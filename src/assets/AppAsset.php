<?php

namespace ivoglent\yii2lte\assets;

use yii\helpers\ArrayHelper;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $distUrl;
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/font-awesome/css/font-awesome.css',
        'libs/Ionicons/css/ionicons.css',
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
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\jui\JuiAsset',
    ];

    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $paths = \Yii::$app->getModule('adminlte')->assetPath;
        if (!empty($paths)) {
            $baseUrl = $paths[1];
            $this->distUrl = $baseUrl;
            foreach ($this->css as &$css) {
                $css = $baseUrl  . '/' . $css;
            }
            foreach ($this->js as &$js) {
                $js = $baseUrl  . '/' . $js;
            }
        }
    }
}
