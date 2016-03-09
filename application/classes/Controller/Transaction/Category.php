<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Transaction_Category extends Controller_Base
{
	public function action_index()
	{
		$view = View::factory('Transaction_Category/index');	

		$categories = ORM::factory('Transaction_Category')
			->where_user_id($this->user->id)
			->order_by('status', 'DESC')
			->order_by('title', 'ASC')
			->find_all();

		$view->categories = $categories;

		$this->template->content = $view;
	}
}
