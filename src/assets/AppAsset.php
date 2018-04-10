<?php

namespace ivoglent\yii2lte\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/fontawesome/css/fontawesome-all.css',
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'libs/morris.js/morris.css',
        'libs/jvectormap/jquery-jvectormap.css',

    ];
    public $js = [
        'libs/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'libs/jvectormap/jquery-jvectormap-world-mill-en.js',
        'libs/jquery-sparkline/dist/jquery.sparkline.min.js',
        'libs/jquery-slimscroll/jquery.slimscroll.min.js',
        'libs/chart.js/Chart.js',
        'js/adminlte.min.js',
        'js/demo.js'
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\jui\JuiAsset',
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $paths = \Yii::$app->getModule('adminlte')->assetPath;
        if (!empty($paths)) {
            $this->sourcePath = dirname(__FILE__) . '/statics';
            $this->basePath = $paths[0];
            $this->baseUrl = $paths[1];
        }
    }
}
