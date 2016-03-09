<?php defined('SYSPATH') or die('No direct script access.');

class Widget_Admin_Menu extends Widget
{
	public function run()
	{
		$view = View::factory('Admin/Widget/Menu');

		$current_url = $this->get_current_url();

		$menu = Kohana::$config->load('admin/menu');

		$view
			->set('current_url', $current_url)
			->set('menu', $menu);

		return $view;
	}

	protected function get_current_url()
	{
		return Url::site(Request::$current->uri());
	}
}