<?php defined('SYSPATH') or die('No direct script access.');

class Widget_Menu extends Widget
{
	public function run()
	{
		$view = View::factory('Widget/menu');

		$pages = ORM::factory('page')
			->published()
			->find_all();

		$current_url = Request::$current->uri();
		$current_url = Url::site($current_url);

		$view
			->set('pages', $pages)
			->set('current_url', $current_url);

		return $view;
	}
}