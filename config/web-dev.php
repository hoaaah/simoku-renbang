<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

/**
 * Configuration adjustments for installation of web application in development environment.
 */
return [
	'bootstrap' => [
		'debug',
	],
	'modules' => [
		'debug' => [
			'class' => 'yii\debug\Module',
		],
	],
];
