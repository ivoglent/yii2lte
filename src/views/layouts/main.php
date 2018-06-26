<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 11:53 AM
 * @var $this \ivoglent\yii2lte\components\View
 * @var $content string
 */


use yii\helpers\Html;

\ivoglent\yii2lte\assets\AppAsset::register($this);
$this->beginPage();
/** @var \ivoglent\yii2lte\AdminLTEModule $lte */
$lte =  \Yii::$app->getModule('adminlte');
$baseAssetUrl = $this->assetManager->getBundle(\ivoglent\yii2lte\assets\AppAsset::className())->distUrl;
$menu = $lte->getMenu();
$assets = $lte->appAssets;
if ($assets) {
    $assets::register($this);
}
$username = '';
if (\Yii::$app->user->isGuest === false) {
    $username = \Yii::$app->user->identity->username;
    if (method_exists(\Yii::$app->user->identity, 'getName')) {
        $username = \Yii::$app->user->identity->getName();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$this->title?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->head()?>
    <?= Html::csrfMetaTags() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
   <!-- <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody()?>
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="<?=\yii\helpers\BaseUrl::base(true)?>" class="logo">
           <?=$this->getComponent('name')?>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <?php
                    $messages = $this->getComponent('messages');
                    if ($messages):
                    ?>
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"><?=count($messages['items'])?></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="header">
                                <?=\Yii::t('app','You have{count} messages', [
                                    'count' => count($messages['items'])
                                ])?>
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <?php foreach ($messages['items'] as $message) :?>
                                        <li><!-- start message -->
                                            <a href="<?=$message['url']?>">
                                                <div class="pull-left">
                                                    <img src="<?=$message['image']?>" class="img-circle" alt="<?=$message['title']?>">
                                                </div>
                                                <h4>
                                                    <?=$message['title']?>
                                                    <small><i class="fa fa-clock-o"></i> <?=$message['time']?></small>
                                                </h4>
                                                <p><?=$message['description']?></p>
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="footer"><a href="<?=$messages['url']?>"><?=\Yii::t('app', 'See All Messages')?></a></li>
                        </ul>
                    </li>
                    <?php endif;?>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <?php
                    $notifications = $this->getComponent('notifications');
                    if ($notifications) :
                    ?>
                    <li class="dropdown notifications-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning"><?=count($notifications['items'])?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <?=Yii::t('app', 'You have {count} notifications', [
                                        'count' => count($notifications['items'])
                                ])?>
                            </li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <?php foreach ($notifications['items'] as $notification):?>
                                        <li>
                                            <a href="<?=$notification['url']?>">
                                                <i class="<?=$notification['icon']?>"></i>
                                                <?=$notification['content']?>
                                            </a>
                                        </li>
                                    <?php endforeach;?>

                                </ul>
                            </li>
                            <li class="footer"><a href="<?=$notifications['url']?>"><?=\Yii::t('app', 'View all')?></a></li>
                        </ul>
                    </li>
                    <?php endif;?>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?=$baseAssetUrl?>/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?=$username?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?=$baseAssetUrl?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php
                                    $roles = \Yii::$app->authManager->getRolesByUser(\Yii::$app->user->getId());
                                    $roleName = [];
                                    foreach ($roles as $role) {
                                        $roleName[] = $role->name;
                                    }
                                    echo implode($roleName, '-');
                                    ?>
                                    <small>
                                        <?php if (isset(\Yii::$app->user->identity->created_at)):?>
                                            <?=\Yii::$app->user->identity->created_at?>
                                        <?php endif;?>
                                    </small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!--<li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                            </li>-->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?=\yii\helpers\Url::to($this->getComponent('urls')['userProfileUrl'])?>" class="btn btn-default btn-flat"><?=\Yii::t('app', 'Profile')?></a>
                                </div>
                                <div class="pull-right">
                                    <?=\yii\helpers\Html::a(\Yii::t('app', 'Sign Out'), $this->getComponent('urls')['logoutUrl'], ['data-method' => 'POST', 'class' => 'btn btn-default btn-flat', 'data-params' => [\Yii::$app->request->csrfParam => \Yii::$app->request->csrfToken]])?>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=$baseAssetUrl?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?=$username?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <?=\yii\widgets\Menu::widget([
                'options' => [
                    'class' => 'sidebar-menu tree',
                    'data-widget' => 'tree'
                ],
                'encodeLabels' => false,
                'submenuTemplate' => "\n<ul class='treeview-menu'>\n{items}\n</ul>\n",
                'activateParents' => true,
                'activeCssClass' => 'active',
                'items' => $menu
            ])?>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="content-container">
            <?php
            if (Yii::$app->session->hasSessionId) {
                foreach (Yii::$app->session->getAllFlashes() as $name => $message) {
                    echo '<div class="alert alert-' . $name . '">' . $message . '</div>';
                }
                Yii::$app->session->removeAllFlashes();
            }
            ?>
            <!-- Content Header (Page header) -->
            <?php if(!empty($this->title)):?>
            <section class="content-header">
                <h1>
                    <?=$this->title?>
                    <small><?=isset($this->subtitle) ? $this->subtitle : ''?></small>
                </h1>
                <?= \yii\widgets\Breadcrumbs::widget([
                    'itemTemplate' => "<li><i>{link}</i></li>\n",
                    'homeLink' => [
                        'label' => \Yii::t('app', 'Home'),
                        'url' => \Yii::$app->homeUrl,
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'options' => ['class' => 'breadcrumb']
                ])
                ?>
            </section>
            <?php endif;?>

            <!-- Main content -->
            <section class="content">
                <?=$content?>
            </section>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <?=$this->getComponent('footer')?>
    </footer>
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>

