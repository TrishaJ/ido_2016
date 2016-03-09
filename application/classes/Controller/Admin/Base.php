<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Base extends Controller_Base
{
	public $template = 'layouts/admin';

	public function before()
	{
		parent::before();

		if ( ! $this->user)
		{
			$this->redirect(Url_Admin::login());
		}
	}
}