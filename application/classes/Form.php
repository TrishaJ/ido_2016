<?php defined('SYSPATH') or die('No direct script access.');

class Form extends Kohana_Form
{
	public static function show_error($field, array $errors = array())
	{
		if (Arr::get($errors, $field))
		{
			return "<span class='text-danger'>
              		 {$errors[$field]}
      			  </span>";
		}
	}
}