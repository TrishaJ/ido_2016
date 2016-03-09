<?php defined('SYSPATH') OR die('No direct access allowed.');

$i = 0;

return array
(
	'Новости'  => 'news',
	'Страницы' => 'pages',
	'Пользователи' => array(
		'Пользователи' => 'users',
		$i++           => '',
		'Роли'         => 'roles',
	)
);
