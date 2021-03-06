<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class LoginForm extends Model {

	public $username;
	public $password;
	public $rememberMe = true;
	private $_user = false;

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			// username and password are both required
			[['username', 'password'], 'required'],
			// rememberMe must be a boolean value
			['rememberMe', 'boolean'],
			// password is validated by validatePassword()
			['password', 'validatePassword'],
		];
	}

	/**
	 * Validates the password.
	 * This method serves as the inline validation for password.
	 *
	 * @param string $attribute The attribute currently being validated.
	 * @param array $params The additional name-value pairs given in the rule.
	 */
	public function validatePassword($attribute, $params) {
		if (!$this->hasErrors()) {
			$user = $this->getUser();

			if (!$user || !$user->validatePassword($this->password)) {
				$this->addError($attribute, 'Incorrect username or password.');
			}
		}
	}

	/**
	 * Logs in a user using the provided username and password.
	 * @return boolean Whether the user is logged in successfully.
	 */
	public function login() {
		if ($this->validate()) {
			return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
		}
		return false;
	}

	/**
	 * Finds user by [[username]].
	 * @return User|null
	 */
	public function getUser() {
		if ($this->_user === false) {
			$this->_user = User::findByUsername($this->username);
		}

		return $this->_user;
	}

}
