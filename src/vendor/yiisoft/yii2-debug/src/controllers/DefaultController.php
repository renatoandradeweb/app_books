<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace yii\debug\controllers;

use Yii;
use yii\debug\models\search\Debug;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Debugger controller provides browsing over available debug logs.
 *
 * @see \yii\debug\Panel
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DefaultController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = 'main';
    /**
     * @var \yii\debug\Module owner module.
     */
    public $module;
    /**
     * @var array the summary data (e.g. URL, time)
     */
    public $summary;

    /**
     * @var array
     */
    private $_manifest;


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = [];
        foreach ($this->module->panels as $panel) {
            $actions = array_merge($actions, $panel->actions);
        }

        return $actions;
    }

    /**
     * {@inheritdoc}
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        Yii::$app->response->format = Response::FORMAT_HTML;
        return parent::beforeAction($action);
    }

    /**
     * Index action
     *
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        $searchModel = new Debug();
        $dataProvider = $searchModel->search($_GET, $this->getManifest());

        // load latest request
        $tags = array_keys($this->getManifest());

        if (empty($tags)) {
            throw new \Exception("No debug data have been collected yet, try browsing the website first.");
        }

        $tag = reset($tags);
        $this->loadData($tag);

        return $this->render('index', [
            'panels' => $this->module->panels,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'manifest' => $this->getManifest(),
        ]);
    }

    /**
     * @see \yii\debug\Panel
     * @param string|null $tag debug data tag.
     * @param string|null $panel debug panel ID.
     * @return mixed response.
     * @throws NotFoundHttpException if debug data not found.
     */
    public function actionView($tag = null, $panel = null)
    {
        if ($tag === null) {
            $tags = array_keys($this->getManifest());
            $tag = reset($tags);
        }
        $this->loadData($tag);
        if (isset($this->module->panels[$panel])) {
            $activePanel = $this->module->panels[$panel];
        } else {
            $activePanel = $this->module->panels[$this->module->defaultPanel];
        }

        if ($activePanel->hasError()) {
            Yii::$app->errorHandler->handleException($activePanel->getError());
        }

        return $this->render('view', [
            'tag' => $tag,
            'summary' => $this->summary,
            'manifest' => $this->getManifest(),
            'panels' => $this->module->panels,
            'activePanel' => $activePanel,
        ]);
    }

    /**
     * Toolbar action
     *
     * @param string $tag
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionToolbar($tag)
    {
        $this->loadData($tag, 5);

        return $this->renderPartial('toolbar', [
            'tag' => $tag,
            'panels' => $this->module->panels,
            'position' => 'bottom',
            'defaultHeight' => $this->module->defaultHeight,
        ]);
    }

    /**
     * Download mail action
     *
     * @param string $file
     * @return \yii\console\Response|Response
     * @throws NotFoundHttpException
     */
    public function actionDownloadMail($file)
    {
        $filePath = Yii::getAlias($this->module->panels['mail']->mailPath) . '/' . basename($file);

        if ((mb_strpos($file, '\\') !== false || mb_strpos($file, '/') !== false) || !is_file($filePath)) {
            throw new NotFoundHttpException('Mail file not found');
        }

        return Yii::$app->response->sendFile($filePath);
    }

    /**
     * @param bool $forceReload
     * @return array
     */
    protected function getManifest($forceReload = false)
    {
        if ($this->_manifest === null || $forceReload) {
            if ($forceReload) {
                clearstatcache();
            }
            $this->_manifest = $this->module->logTarget->loadManifest();
        }

        return $this->_manifest;
    }

    /**
     * @param string $tag debug data tag.
     * @param int $maxRetry maximum numbers of tag retrieval attempts.
     * @throws NotFoundHttpException if specified tag not found.
     */
    public function loadData($tag, $maxRetry = 0)
    {
        // retry loading debug data because the debug data is logged in shutdown function
        // which may be delayed in some environment if xdebug is enabled.
        // See: https://github.com/yiisoft/yii2/issues/1504
        for ($retry = 0; $retry <= $maxRetry; ++$retry) {
            $manifest = $this->getManifest($retry > 0);
            if (isset($manifest[$tag])) {
                $data = $this->module->logTarget->loadTagToPanels($tag);
                $this->summary = $data['summary'];

                return;
            }
            sleep(1);
        }

        throw new NotFoundHttpException("Unable to find debug data tagged with '$tag'.");
    }
}
