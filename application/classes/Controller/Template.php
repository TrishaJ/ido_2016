<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template
{
	/** @var string|View */
	public $template = 'layouts/main';
}
