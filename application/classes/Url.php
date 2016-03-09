<?php defined('SYSPATH') or die('No direct script access.');

class Url extends Kohana_Url 
{
	public static function page($page)
	{
		if ($page->url)
		{
			return $page->url;
		}

		return Url::site(
			Route::get('default')
				->uri(array(
					'controller' => 'page',
					'action'     => 'view',
					'id'	     => $page->id	
			))
		);
	}

	public static function logout()
	{
		return Url::site(
			Route::get('auth')
				->uri(array(
					'action' => 'logout'
			))
		);
	}

	public static function login()
	{
		return Url::site(
			Route::get('auth')
				->uri(array(
					'action' => 'login'
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
			Route::get('default')
				->uri(array(
					'controller' => $controller,
					'action'     => $action,
					'id'	     => $id	
			))
		);
	}


	public static function admin_url(
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