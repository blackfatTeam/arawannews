<?php
$params = require (__DIR__ . '/params.php');

$config = [ 
		'id' => 'basic',
		'basePath' => dirname ( __DIR__ ),
		'bootstrap' => [ 
				'log' 
		],
		'components' => [ 
				'assetManager' => [ 
						'bundles' => [ 
								'yii\web\JqueryAsset' => [ 
										'js' => [ ] 
								],
								'yii\bootstrap\BootstrapPluginAsset' => [ 
										'js' => [ ] 
								],
								'yii\bootstrap\BootstrapAsset' => [ 
										'css' => [ ] 
								] 
						] 
				],
				'authManager' => [ 
						'class' => 'yii\rbac\PhpManager' 
				],
				'request' => [
						// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
						'cookieValidationKey' => 'n_k7WSPcjYPRdQGEpDEK2HQPn-aVX9jy' 
				],
				'cache' => [ 
						'class' => 'yii\caching\FileCache' 
				],
				'user' => [ 
						'identityClass' => 'app\models\User',
						'enableAutoLogin' => true 
				],
				'errorHandler' => [ 
						'errorAction' => 'site/error' 
				],
				'mailer' => [ 
						'class' => 'yii\swiftmailer\Mailer',
						// send all mails to a file by default. You have to set
						// 'useFileTransport' to false and configure a transport
						// for the mailer to send real emails.
						'useFileTransport' => true 
				],
				'log' => [ 
						'traceLevel' => YII_DEBUG ? 3 : 0,
						'targets' => [ 
								[ 
										'class' => 'yii\log\FileTarget',
										'levels' => [ 
												'error',
												'warning' 
										] 
								] 
						] 
				],
				'db' => require (__DIR__ . '/db.php'),
				
				'urlManager' => [
					'enablePrettyUrl' => true,
					'showScriptName' => false,
					'rules' => [
						'<controller:content>/<postTitle:.+>'=>'<controller>/index',
						/* '<controller:contact>'=>'<controller>/view',
						'<controller:eletter>'=>'<controller>/index',
						'<controller:contact>/<action:success>'=>'<controller>/success',
						'<controller:instagram>/<action:view>'=>'<controller>/view',
						'<controller:instagram>/<action:generate>'=>'<controller>/generate',
						'<controller:instagram>/<action:info>'=>'<controller>/info',
						'<controller:instagram>/<action:posted>'=>'<controller>/posted',
						'<controller:instagram>/<action:readmore>'=>'<controller>/readmore',
						'<controller:content>/<action:viewgallery>'=>'<controller>/viewgallery',
						'<controller:content>/<action:changegallery>'=>'<controller>/changegallery',
						'<controller:site>/<action:readmore>'=>'<controller>/readmore',
						'<controller:category>/<action:readmore>'=>'<controller>/readmore',
						'<controller:category>/<section:.+>'=>'<controller>/view',
						'<controller:search>/<action:view>'=>'<controller>/view',
						'<controller:site>/<action:error>'=>'<controller>/<action>',
						'<controller:.+>'=>'content/view', */
					]
				] 
		],
		'params' => $params 
];

if (YII_ENV_DEV) {
	// configuration adjustments for 'dev' environment
	$config ['bootstrap'] [] = 'debug';
	$config ['modules'] ['debug'] = [ 
			'class' => 'yii\debug\Module' 
	];
	
	$config ['bootstrap'] [] = 'gii';
	$config ['modules'] ['gii'] = [ 
			'class' => 'yii\gii\Module' 
	];
}

return $config;
