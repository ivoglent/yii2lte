<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 10:54 PM
 */

namespace ivoglent\yii2lte\assets;

use yii\helpers\ArrayHelper;
use yii\web\AssetBundle;
class SimpleAsset extends AssetBundle
{
    public $distUrl;
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'libs/font-awesome/css/font-awesome.css',
        'libs/Ionicons/css/ionicons.css',
        'css/AdminLTE.min.css',
        'libs/iCheck/square/blue.css',
    ];
    public $js = [
        'libs/iCheck/icheck.min.js'
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    protected $customJs = [];

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
                $js = $baseUrl . '/' . $js;
            }
        }
    }
}
