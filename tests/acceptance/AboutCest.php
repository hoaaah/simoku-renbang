<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

use yii\helpers\Url;

/**
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class AboutCest {

	public function ensureThatAboutWorks(AcceptanceTester $I) {
		$I->amOnPage(Url::toRoute('/site/about'));
		$I->see('About', 'h1');
	}

}
