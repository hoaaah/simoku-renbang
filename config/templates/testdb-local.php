<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

/**
 * Database connection credentials for tests on a local installation.
 */
return [
	'class' => 'yii\db\Connection',
	// test database! Important not to run tests on production or development databases
	'dsn' => 'mysql:host=localhost;dbname=yii2_app_tests',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
];
