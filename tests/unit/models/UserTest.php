<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

namespace tests\models;

use app\models\User;

/**
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class UserTest extends \Codeception\Test\Unit {

	public function testFindUserById() {
		expect_that($user = User::findIdentity(100));
		expect($user->username)->equals('admin');

		expect_not(User::findIdentity(999));
	}

	public function testFindUserByAccessToken() {
		expect_that($user = User::findIdentityByAccessToken('100-token'));
		expect($user->username)->equals('admin');

		expect_not(User::findIdentityByAccessToken('non-existing'));
	}

	public function testFindUserByUsername() {
		expect_that($user = User::findByUsername('admin'));
		expect_not(User::findByUsername('not-admin'));
	}

	/**
	 * @depends testFindUserByUsername
	 */
	public function testValidateUser($user) {
		$user = User::findByUsername('admin');
		expect_that($user->validateAuthKey('test100key'));
		expect_not($user->validateAuthKey('test102key'));

		expect_that($user->validatePassword('admin'));
		expect_not($user->validatePassword('123456'));
	}

}
