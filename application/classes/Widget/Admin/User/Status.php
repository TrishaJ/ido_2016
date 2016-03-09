<?php defined('SYSPATH') or die('No direct script access.');

class Widget_Admin_User_Status extends Widget_User_Status
{
	protected function get_logout_url()
	{
		return URL_Admin::logout();
	}

	protected function get_login_url()
	{
		return URL_Admin::login();
	}
}