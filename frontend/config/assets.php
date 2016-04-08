<?php
/**
 * Configuration file for the "yii asset" console command.
 */

// In the console environment, some path aliases may not exist. Please define these:
Yii::setAlias('@webroot', __DIR__ . '/../web');
Yii::setAlias('@web', '/');
Yii::setAlias('assets', '@frontend/assets');

use backend\assets\AppAsset;
use frontend\assets\ThreeAsset;
use frontend\assets\TwoAsset;
use yii\web\AssetBundle;

return [
    // Adjust command/callback for JavaScript files compressing:
    'jsCompressor'  => 'uglifyjs -mc warnings=false -o {to} {from}',
    // Adjust command/callback for CSS files compressing:
    'cssCompressor' => 'lessc {from} {to} --clean-css --no-color',
    // The list of asset bundles to compress:
    'bundles'       => [
        AppAsset::class,
        TwoAsset::class,
        ThreeAsset::class,
    ],
    // Asset bundle for compression output:
    'targets'       => [
        'all'   => [
            'class'    => AssetBundle::class,
            'basePath' => '@webroot/assets',
            'baseUrl'  => '@web/assets',
            'js'       => 'js/all-{hash}.js',
            'css'      => 'css/all-{hash}.css',
        ],
        'two'   => [
            'class'    => AssetBundle::class,
            'basePath' => '@webroot/assets',
            'baseUrl'  => '@web/assets',
            'js'       => 'js/two-{hash}.js',
            'css'      => 'css/two-{hash}.css',
            'depends'  => [
                TwoAsset::class,
            ],
        ],
        'three' => [
            'class'    => AssetBundle::class,
            'basePath' => '@webroot/assets',
            'baseUrl'  => '@web/assets',
            'js'       => 'js/three-{hash}.js',
            'css'      => 'css/three-{hash}.css',
            'depends'  => [
                ThreeAsset::class,
            ],
        ],
    ],
    // Asset manager configuration:
    'assetManager'  => [
        'basePath' => '@webroot/assets',
        'baseUrl'  => '@web/assets',
    ],
];
