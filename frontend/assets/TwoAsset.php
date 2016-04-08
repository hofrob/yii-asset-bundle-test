<?php
namespace frontend\assets;

use yii\validators\ValidationAsset;
use yii\web\AssetBundle;
use yii\widgets\ActiveFormAsset;

class TwoAsset extends AssetBundle
{
    public $sourcePath = '@assets/two_asset';
    public $css = [
        'two.css',
    ];
    public $js = [
        'two.js',
    ];
    public $depends = [
        AppAsset::class,
        ActiveFormAsset::class,
        ValidationAsset::class,
    ];
}
