<?php defined('SYSPATH') or die('No direct script access.');

class Url_Admin extends Kohana_Url 
{
	public static function logout()
	{
		return Url::site(
			Route::get('admin-default')
				->uri(array(
					'controller' => 'auth',
					'action'     => 'logout'
			))
		);
	}

	public static function login()
	{
		return Url::site(
			Route::get('admin-default')
				->uri(array(
					'controller' => 'auth',
					'action'     => 'login'
			))
		);
	}

	public static function default_url(
		$controller = '',
		$action = '',
		$id = NULL
	)
	{
		return Url::site(
			Route::get('admin-default')
				->uri(array(
					'controller' => $controller,
					'action'     => $action,
					'id'	     => $id	
			))
		);
	}
}