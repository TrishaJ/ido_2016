<?php defined('SYSPATH') or die('No direct script access.');

class Widget_User_Status extends Widget
{
	public $user = NULL;
	public $logout_button = "<a class='' href='{url}'>{username} (Выйти)</a>";
	public $login_button = "<a class='' href='{url}'>Войти</a>";

	public function run()
	{
		$this->user = Auth::instance()->get_user();
		
		if ($this->user)
		{
			return $this->render_button($this->logout_button, array(
				'{url}'      => $this->get_logout_url(),
				'{username}' => $this->user->username,
			));
		}

		return $this->render_button($this->login_button, array(
				'{url}' => $this->get_login_url()
		));
	}

	protected function get_logout_url()
	{
		return URL::logout();
	}

	protected function get_login_url()
	{
		return URL::login();
	}

	protected function render_button($template, array $params)
	{
		return strtr($template, $params);
	}
}