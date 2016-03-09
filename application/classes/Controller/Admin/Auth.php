<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_Auth
{
	public $template = 'layouts/blank';

	protected function init_config()
	{
		parent::init_config();

		$this->redirect_url = URL_Admin::default_url();
	}
}
