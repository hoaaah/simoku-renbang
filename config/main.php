<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

error_reporting(-1);

/**
 * General configuration shared between console and web application.
 */
return [
	'name' => 'SIMOKU',
	'basePath' => dirname(__DIR__),
	'bootstrap' => [
		'log',
	],
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm' => '@vendor/npm-asset',
		'@upload' => '@app/upload',
	],
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'log' => [
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'db' => \yii\helpers\ArrayHelper::merge(
			[
				'class' => 'yii\db\Connection',
				'charset' => 'utf8',
				'enableSchemaCache' => true,
			],
			require(__DIR__ . '/db-local.php')
		),
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
			],
		],
		'assetManager' => [
			'linkAssets' => false,
		],
	],
	'modules' => [
		'gridview' =>  [
			'class' => '\kartik\grid\Module'
		],
		'pdfjs' => [
			'class' => '\yii2assets\pdfjs\Module',
			'waterMark'=>[
				'text'=> 'SIMOKU-BPKP',
				'color'=> 'red',
				'alpha'=>'0.3'
			]			
		],		
        'parameter' => [
            'class' => 'app\modules\parameter\bidang',
        ],
        'transaksi' => [
            'class' => 'app\modules\transaksi\transaksi',
        ],	
        'laporan' => [
            'class' => 'app\modules\laporan\module',
        ],					
	],
    // this class use for force login to all controller. Usefull quiet enough
    // this function work only in login placed in site controller. FOr other login controller/action, change denyCallback access
	// 'as beforeRequest' => [
	// 		    'class' => 'yii\filters\AccessControl',
	// 		    'rules' => [
	// 		        [
	// 		            'allow' => true,
	// 		            'actions' => ['login'],
	// 		        ],
	// 		        [
	// 		            'allow' => true,
	// 		            'roles' => ['@'],
	// 		        ],
	// 		    ],
	// 		    'denyCallback' => function () {
	// 		        return Yii::$app->response->redirect(['site/login']);
	// 		    },
	// 		],	
	'params' => require(__DIR__ . '/params.php'),
];
