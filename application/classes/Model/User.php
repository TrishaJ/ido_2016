<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	public function labels()
	{
		return array(
			'username' => 'Пользователь',
			'email'    => 'Email',
			'password' => 'Пароль',
		);
	}
}