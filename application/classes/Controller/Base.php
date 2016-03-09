<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	protected $user = NULL;

	public function before()
	{
		parent::before();

		$this->user = Auth::instance()->get_user();
		$this->template->content = '';
		$this->template->user = $this->user;
	}
}