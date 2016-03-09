<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Base {

	public function action_index()
	{
		$view = View::factory('User/index');
		$users = ORM::factory('user')->find_all();

		$view->set('users', $users);

		$this->template->content = $view;
	}

	public function action_form()
	{
		$errors = array();

		$view = View::factory('User/form');

		$id = $this->request->param('id');
		$model = ORM::factory('user', $id);

		if ($id AND ! $model->loaded())
		{
			throw new HTTP_Exception_404;
		}

		if ($this->request->method() === Request::POST)
		{
			try
			{
				$expected = array(
					'username',
					'password',
					'email'
				);
				$model = $model->loaded()
					? $model->update_user($this->request->post(), $expected)
					: $model->create_user($this->request->post(), $expected);

				$this->redirect('/user');
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors($e->alias());
			}
		}

		$errors = Arr::flatten($errors);
		
		$view
			->set('model', $model)
			->set('errors', $errors);

		$this->template->content = $view;
	}
}
