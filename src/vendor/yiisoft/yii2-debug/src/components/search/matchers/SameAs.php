<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace yii\debug\components\search\matchers;

use yii\helpers\VarDumper;

/**
 * Checks if the given value is exactly or partially same as the base one.
 *
 * @author Mark Jebri <mark.github@yandex.ru>
 * @since 2.0
 */
class SameAs extends Base
{
    /**
     * @var bool if partial match should be used.
     */
    public $partial = false;


    /**
     * {@inheritdoc}
     */
    public function match($value)
    {
        if (!is_scalar($value)) {
            $value = VarDumper::export($value);
        }
        if ($this->partial) {
            return mb_stripos($value, $this->baseValue, 0, \Yii::$app->charset) !== false;
        }

        return strcmp(
            mb_strtoupper($this->baseValue, \Yii::$app->charset),
            mb_strtoupper($value, \Yii::$app->charset)
        ) === 0;
    }
}
