<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Base {

	public function action_index()
	{
		$view = View::factory('News/index');
		$news = ORM::factory('news')
			->only_relised()
			->order_by('id', 'DESC');

		$this->filter($news, $view);

		$news = $news->find_all();

		$categories = ORM::factory('news_category')
			->order_by('title', 'ASC')
			->find_all();

		$view->set(array(
			'news' 		 => View::factory('News/_list')->set('news', $news),
			'categories' => $categories
		));

		$this->template->content = $view;
	}

	protected function filter(Model_News $news, $view)
	{
		$category_id = $this->request->query('category_id');

		if ($category_id)
		{
			$news->where('category_id', '=', $category_id);
		}

		$view->category_id = $category_id;
	}

	public function action_view()
	{
		$view = View::factory('News/view');

		$id = $this->request->param('id');

		if ( ! $id)
		{
			throw new HTTP_Exception_404;
		}

		$model = ORM::factory('news')
			->where('id', '=', $id)
			->where('status', '=', TRUE)
			->find();

		if ( ! $model->loaded())
		{
			throw new HTTP_Exception_404;
		}

		$view->model = $model;

		$this->template->content = $view;
	}

	public function action_form()
	{
		$errors = array();
		$view = View::factory('News/form');

		$id = $this->request->param('id');

		$model = ORM::factory('news', $id);

		if ($this->request->method() === Request::POST)
		{
			$model->values($this->request->post());

			try
			{
				$model->save();

				$this->redirect('/news/form/'.$model->id);
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors($e->alias());
			}
		}

		$categories = ORM::factory('news_category')
			->order_by('title', 'ASC')
			->find_all()
			->as_array('id', 'title');

		$view
			->set('model', $model)
			->set('errors', $errors)
			->set('categories', $categories);

		$this->template->content = $view;
	}
}