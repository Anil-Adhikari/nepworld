<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'css/site.css',*/
        'css/font-awesome.css',
        'css/bootstrap.min.css',
        'css/agency.css',
        'css/mystyle.css',


    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.bundle.min.js',
        'js/jquery.easing.min.js',
        'js/jqBootstrapValidation.js',
        'js/contact_me.js',
        'js/agency.min.js',
        'js/myquery.js'
        

        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
