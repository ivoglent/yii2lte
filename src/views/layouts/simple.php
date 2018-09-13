<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 4/10/18
 * Time: 10:53 PM
 *
 * @var $this \yii\web\View
 */
\ivoglent\yii2lte\assets\SimpleAsset::register($this);
$this->beginPage();
/** @var \ivoglent\yii2lte\AdminLTEModule $lte */
$lte =  \Yii::$app->getModule('adminlte');
//$configs = $lte->configs;
$assets = $lte->appAssets;
if ($assets) {
    $assets::register($this);
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<body class="hold-transition login-page">
<?php $this->beginBody()?>
<?=$content?>
<?php
$this->registerJs(" $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });");
?>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>

