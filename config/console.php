<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

Yii::setAlias('@webroot', dirname(__DIR__) . '/webroot');
Yii::setAlias('@web', '/');

/**
 * Configuration adjustments for console application.
 */
return [
	'id' => 'app-console',
	'controllerNamespace' => 'app\commands',
	'controllerMap' => [
		'fixture' => [ // Fixture generation command line.
			'class' => 'yii\faker\FixtureController',
		],
	],
];
