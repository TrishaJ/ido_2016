<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News_Category extends Controller_Base {

	public function action_index()
	{
		$view = View::factory('News_Category/index');

		$categories = ORM::factory('News_Category')
			->order_by('id', 'ASC')
			->find_all();

		$view->categories = $categories;

		$this->template->content = $view;
	}

	public function action_view()
	{
		$view = View::factory('News_Category/view');

		$id = $this->request->param('id');

		if ( ! $id)
		{
			throw new HTTP_Exception_404;
		}

		$category = ORM::factory('News_Category')
			->where('id', '=', $id)
			->find();

		if ( ! $category->loaded())
		{
			throw new HTTP_Exception_404;
		}

		$news = $category->news
			->where('news.status', '=', 1)
			->find_all();

		$view->category = $category;

		$news_list = View::factory('News/_list');
		$news_list->news = $news;
		$view->news = $news_list;

		$this->template->content = $view;
	}
}
