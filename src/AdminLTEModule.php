<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 10:04 AM
 */
namespace ivoglent\yii2lte;
use ivoglent\yii2lte\components\View;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Module;
use yii\helpers\ArrayHelper;
use yii\web\AssetBundle;

define('YII2_LTE_PATH', dirname(__FILE__));
class AdminLTEModule extends Module implements BootstrapInterface
{
    /**
     * @var string published asset uri
     */
    public $assetPath;

    /**
     * @var string
     */
    public $layoutType = 'main';
    /**
     * @var string
     */
    public $skinType = 'all';

    public $controllerNamespace = 'ivoglent\yii2lte\controllers';

    /**
     * Alias path to menu file
     * @var string
     */
    public $menuFile = '@vendor/ivoglent/yii2lte/src/views/layouts/menu.php';
    public $viewComponents = [];

    /**
     * @var AssetBundle
     */
    public $appAssets;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        $app->layoutPath = dirname(__FILE__) . '/views/layouts';
        if (isset($_GET['layout'])) {
            $app->layout = urldecode($_GET['layout']);
        }
        $app->setComponents([
            'view' => [
                'class' => View::className()
            ]
        ]);
        foreach ($this->viewComponents as $name => $value) {
            \Yii::$app->view->setComponent($name, $value);
        }
        // TODO: Implement bootstrap() method.
        $this->publishAsset($app);
    }

    /**
     * @return array|mixed
     */
    public function getMenu() {
        $menu = [];
        $menuFile = \Yii::getAlias($this->menuFile);
        if (file_exists($menuFile)) {
            $menu = require $menuFile;
        }
        return $menu;
    }

    /**
     * @param $app
     */
    private function publishAsset($app) {
        $this->assetPath = $app->getAssetManager()->publish(YII2_LTE_PATH . '/assets/statics');
    }
}
