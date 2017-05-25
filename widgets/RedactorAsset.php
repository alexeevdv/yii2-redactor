<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\redactor\widgets;

/**
 * @author Nghia Nguyen <yiidevelop@hotmail.com>
 * @since 2.0
 */
class RedactorAsset extends \yii\web\AssetBundle
{
    public $depends = ['yii\web\JqueryAsset'];

    public $js = [
        'https://imperavi.com/assets/redactor/redactor.js?r',
        'https://imperavi.com/assets/js/plugins/source/source.js?r',
        'https://imperavi.com/assets/js/plugins/table/table.js?r',
        'https://imperavi.com/assets/js/plugins/video/video.js?r',
        'https://imperavi.com/assets/js/plugins/imagemanager/imagemanager.js'
    ];

    public $css = [
        'https://imperavi.com/assets/redactor/redactor.css?r',
    ];
}
