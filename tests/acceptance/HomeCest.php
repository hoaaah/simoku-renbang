<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

use yii\helpers\Url;

/**
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class HomeCest {

	public function ensureThatHomePageWorks(AcceptanceTester $I) {
		$I->amOnPage(Url::toRoute('/site/index'));
		$I->see('My Company');

		$I->seeLink('About');
		$I->click('About');

		$I->see('This is the About page.');
	}

}
