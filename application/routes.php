<?php defined('SYSPATH') or die('No direct script access.');

Route::set('auth', '<action>', array(
		'action' => 'login|logout'
	))
	->defaults(array(
		'controller' => 'auth'
	));

Route::set('admin-default', 'admin(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'main',
		'directory'  => 'admin',
		'action'     => 'index',
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));