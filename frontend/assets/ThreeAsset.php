<?php
namespace frontend\assets;

use yii\validators\ValidationAsset;
use yii\web\AssetBundle;
use yii\widgets\ActiveFormAsset;

class ThreeAsset extends AssetBundle
{
    public $sourcePath = '@assets/three_asset';
    public $css = [
        'three.css',
    ];
    public $js = [
        'three.js',
    ];
    public $depends = [
        AppAsset::class,
        ActiveFormAsset::class,
        ValidationAsset::class,
    ];
}
