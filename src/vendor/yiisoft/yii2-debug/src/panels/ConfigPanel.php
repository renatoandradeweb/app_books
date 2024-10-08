<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace yii\debug\panels;

use Yii;
use yii\debug\Panel;

/**
 * Debugger panel that collects and displays application configuration and environment.
 *
 * @property-read array $extensions
 * @property-read array $phpInfo
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ConfigPanel extends Panel
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Configuration';
    }

    /**
     * {@inheritdoc}
     */
    public function getSummary()
    {
        return Yii::$app->view->render('panels/config/summary', ['panel' => $this]);
    }

    /**
     * {@inheritdoc}
     */
    public function getDetail()
    {
        return Yii::$app->view->render('panels/config/detail', ['panel' => $this]);
    }

    /**
     * Returns data about extensions
     *
     * @return array
     */
    public function getExtensions()
    {
        $data = [];
        foreach ($this->data['extensions'] as $extension) {
            $data[$extension['name']] = $extension['version'];
        }
        ksort($data);

        return $data;
    }

    /**
     * Returns the BODY contents of the phpinfo() output
     *
     * @return array
     */
    public function getPhpInfo()
    {
        ob_start();
        phpinfo();
        $pinfo = ob_get_contents();
        ob_end_clean();
        $phpinfo = preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo);
        $phpinfo = str_replace(
            '<table',
            '<div class="table-responsive"><table class="table table-condensed table-bordered table-striped table-hover config-php-info-table" ',
            $phpinfo
        );
        $phpinfo = str_replace('</table>', '</table></div>', $phpinfo);
        $phpinfo = str_replace('<div class="center">', '<div class="phpinfo">', $phpinfo);
        return $phpinfo;
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        return [
            'phpVersion' => PHP_VERSION,
            'yiiVersion' => Yii::getVersion(),
            'application' => [
                'yii' => Yii::getVersion(),
                'name' => Yii::$app->name,
                'version' => Yii::$app->version,
                'language' => Yii::$app->language,
                'sourceLanguage' => Yii::$app->sourceLanguage,
                'charset' => Yii::$app->charset,
                'env' => YII_ENV,
                'debug' => YII_DEBUG,
            ],
            'php' => [
                'version' => PHP_VERSION,
                'xdebug' => extension_loaded('xdebug'),
                'apc' => extension_loaded('apc'),
                'memcache' => extension_loaded('memcache'),
                'memcached' => extension_loaded('memcached'),
            ],
            'extensions' => Yii::$app->extensions,
        ];
    }
}
