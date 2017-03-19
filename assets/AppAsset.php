<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main app assets.
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class AppAsset extends AssetBundle {

	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/site.css',
		'css/font-awesome.min.css'
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];

}
