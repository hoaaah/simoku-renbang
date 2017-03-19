<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

namespace yii\base;

/**
 * Fake class to define code completion for IDE.
 *
 * Define your components as properties of this class to get code completion for `Yii::$app->`.
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class Yii extends \yii\BaseYii {

	/**
	 * @var BaseApplication|WebApplication|ConsoleApplication the application instance
	 */
	public static $app;
}

abstract class BaseApplication extends \yii\base\Application {

}

class WebApplication extends \yii\web\Application {

//	/**
//	 * @var \app\components\MyComponent
//	 */
//	public $myComponent;
}

class ConsoleApplication extends \yii\console\Application {

}
