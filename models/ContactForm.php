<?php

/* (C) Copyright 2017 Heru Arief Wijaya (http://belajararief.com/) untuk Renbang Biro Kepegawaian BPKP.*/

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 *
 * @author Heru Arief Wijaya <heru@belajararief.com>
 */
class ContactForm extends Model {

	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * {@inheritdoc}
	 */
	public function rules() {
		return [
			// name, email, subject and body are required
			[['name', 'email', 'subject', 'body'], 'required'],
			// email has to be a valid email address
			['email', 'email'],
			// verifyCode needs to be entered correctly
			['verifyCode', 'captcha'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'verifyCode' => 'Verification Code',
		];
	}

	/**
	 * Sends an email to the specified email address using the information collected by this model.
	 * @param string $email The target email address.
	 * @return boolean Whether the model passes validation.
	 */
	public function contact($email) {
		if ($this->validate()) {
			Yii::$app->mailer->compose()
					->setTo($email)
					->setFrom([$this->email => $this->name])
					->setSubject($this->subject)
					->setTextBody($this->body)
					->send();

			return true;
		}
		return false;
	}

}
