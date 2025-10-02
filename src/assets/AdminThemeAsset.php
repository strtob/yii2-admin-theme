<?php
namespace sahmed237\yii2admintheme\assets;

use yii\web\AssetBundle;

class AdminThemeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sahmed237/yii2-admin-theme/src/assets';
    
    public $css = [
        'css/bootstrap.min.css',
        'libs/simplebar/simplebar.min.css',
        'css/icons.min.css',
        'css/app.min.css',
        'libs/choices.js/public/assets/styles/choices.min.css',
        'libs/flatpickr/flatpickr.min.css',
        'libs/sweetalert2/sweetalert2.min.css',
        'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css',
        'dist/css/custom.css', // Custom styles
    ];

    public $js = [
        'libs/bootstrap/js/bootstrap.bundle.min.js',
        'libs/simplebar/simplebar.min.js',
        'libs/node-waves/waves.min.js',
        'libs/feather-icons/feather.min.js',
        'libs/choices.js/public/assets/scripts/choices.min.js',
        'libs/flatpickr/flatpickr.min.js',
        'libs/sweetalert2/sweetalert2.min.js',
        'https://cdn.jsdelivr.net/npm/toastify-js',
        'js/layout.js',
        'js/app.js',
        
        
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'sahmed237\yii2admintheme\assets\SortableJsAsset',
    ];
} 