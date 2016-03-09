<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Base {

	protected $login_view;
	protected $redirect_url;

	public function before()
	{
		parent::before();

		$this->init_config();
	}

	protected function init_config()
	{
		$this->login_view = 'Auth/login';
		$this->redirect_url = URL::default_url();
	}

	public function action_login()
	{
		if ($this->user)
		{
			throw new HTTP_Exception_403;	
		}

		$errors = array();
		$view = View::factory($this->login_view);
		
		$username = $this->request->post('username');

		if ($this->request->method() === Request::POST)
		{
			$validation = Validation::factory($this->request->post())
				->label('username', 'Логин')
				->label('password', 'Пароль')
				->rule('username', 'not_empty')
				->rule('password', 'not_empty');

			if ($validation->check())
			{
				$post = $this->request->post();

				$success = Auth::instance()->login(
					$this->request->post('username'),
					$this->request->post('password')
				);

				if ($success)
				{
					$this->before_redirect();

				    $this->redirect($this->redirect_url);
				}
			}

			$errors['username'] = 'Неправильные пользователь или пароль';
		}

		$view
			->set('username', $username)
			->set('errors', $errors);

		$this->template->content = $view;
	}

	protected function before_redirect()
	{

	}

	public function action_logout()
	{
		if ( ! $this->user)
		{
			throw new HTTP_Exception_403;	
		}

		Auth::instance()->logout();

		$this->redirect($this->redirect_url);
	}
}
