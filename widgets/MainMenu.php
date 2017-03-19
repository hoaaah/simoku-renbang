<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

namespace app\widgets;

use Yii;
use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Widget;

/**
 * Widget for rendering main menu of app.
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class MainMenu extends Widget {

	/**
	 * {@inheritdoc}
	 */
	public function run() {
		NavBar::begin([
			'brandLabel' => Yii::$app->name,
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
				'class' => 'navbar-inverse navbar-fixed-top',
			],
		]);
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $this->getItems(),
		]);
		NavBar::end();
	}

	/**
	 * Generate items list for menu.
	 * @return array
	 */
	protected function getItems() {
		$items = [
			['label' => 'Home', 'url' => ['/site/index']],
			// ['label' => 'About', 'url' => ['/site/about']],
			// ['label' => 'Contact', 'url' => ['/site/contact']],
		];

		if (Yii::$app->user->isGuest) {
			$items[] = ['label' => 'Login', 'url' => ['/site/login']];
		} else {
			$items[] = ['label' => 'Parameter', 
				'items' => [
					['label' => 'Bidang', 'url' => ['/parameter/bidang']],
					['label' => 'Kategori Data Bidang', 'url' => ['/parameter/kategori']],
					['label' => 'Pegawai', 'url' => ['/parameter/pegawai']],
					['label' => 'Kategori Data', 'url' => ['/parameter/puus']],
					['label' => 'Peran PPM', 'url' => ['/parameter/peran']],
					// ['label' => 'Location', 'url' => ['/location']],
					// ['label' => 'News and Articles', 'url' => ['/articles']],
					['label' => 'About', 'url' => '#' ],
				]
			];

			$items[] = ['label' => 'Transaksi', 
				'items' => [
					['label' => 'PPM', 'url' => ['/transaksi/ppm']],
					// ['label' => 'Portofolio', 'url' => ['/portofolio']],
					['label' => 'About', 'url' => '#' ],
					// ['label' => 'Team Member', 'url' => ['/team']],
					// ['label' => 'Partner', 'url' => ['/partner']],
					// ['label' => 'Location', 'url' => ['/location']],
					// ['label' => 'News and Articles', 'url' => ['/articles']],
				]
			];

			$items[] = ['label' => 'Laporan', 
				'items' => [
					// ['label' => 'PPM', 'url' => ['/transaksi/ppm']],
					// ['label' => 'Portofolio', 'url' => ['/portofolio']],
					['label' => 'Laporan Individu', 'url' => '#' ],
					// ['label' => 'Team Member', 'url' => ['/team']],
					// ['label' => 'Partner', 'url' => ['/partner']],
					// ['label' => 'Location', 'url' => ['/location']],
					// ['label' => 'News and Articles', 'url' => ['/articles']],
				]
			];	
			$items[] = Html::tag('li', $this->getLogoutButton());					
		}

		return $items;
	}

	/**
	 * Generate logout button for menu.
	 * @return string
	 */
	protected function getLogoutButton() {
		$label = 'Logout (' . Html::encode(Yii::$app->user->identity->username) . ')';
		$output = Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form']);
		$output .= Html::submitButton($label, ['class' => 'btn btn-link']);
		$output .= Html::endForm();

		return $output;
	}

}
