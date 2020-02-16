<?php

namespace app\assets;

use yii\web\AssetBundle;
class HighChartAsset extends AssetBundle
{

    public $sourcePath = '@bower/highcharts';
    public $css = [];
    public $js = [
        'hightcharts.js',
        'hightcharts-more.js',
    ];
}