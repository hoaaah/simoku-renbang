<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

/**
 * Adjustments for general configuration for development environment.
 */
return [
	'bootstrap' => [
		'gii',
	],
	'components' => [
		'db' => [
			'schemaCacheDuration' => 60,
		],
	],
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
		],
	],
];
