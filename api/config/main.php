<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controllers',
	'components' => [
	    'urlManager' => [
		    'enablePrettyUrl' => true,
		    'enableStrictParsing' => true,
		    'showScriptName' => false,
		    'rules' => [
		        ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
		    ],
		],
	],
    'params' => $params,
];
