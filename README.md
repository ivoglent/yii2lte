# AdminLTE Template for Yii2 Framework

## Installation
```
composer require @ivoglent/yii2lte:latest
```
## Configuration

Enable module in config file :
```
	'modules' => ['adminlte' => '\ivoglent\yii2lte\AdminLTEModule']
```

Add `adminlte` module to bootstrap

```
    'bootstrap' => ['log', 'adminlte']
```

Example module config :

```
 'adminlte' => [
        'class' => \ivoglent\yii2lte\AdminLTEModule::className(),
        'menuFile' => '@backend/views/layouts/menu.php',
        'configs' =>  [
            'logo' => 'SOS System',
            'footer' => '&copy; ' . date('Y') . ' by xDev'
        ]
 ]
```
