<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

/**
 * Configuration adjustments for web application.
 */
return [
	'id' => 'app-web',
	'components' => [
		'user' => [
			'identityClass' => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
];
