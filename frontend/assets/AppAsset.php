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
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/ionicons.min.css',
        'css/owl.carousel.min.css',
        'css/lightbox.min.css',
        'css/style.css',
        'css/style.css',
        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery.min.js',
        'js/jquery-migrate.min.js',
        'js/bootstrap.bundle.min.js',
        'js/easing.min.js',
        'js/hoverIntent.js',
        'js/superfish.min.js',
        'js/wow.min.js',
        'js/waypoints.min.js',
        'js/counterup.min.js',
        'js/owl.carousel.min.js',
        'js/isotope.pkgd.min.js',
        'js/lightbox.min.js',
        'js/jquery.touchSwipe.min.js',
        'js/contactform.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
