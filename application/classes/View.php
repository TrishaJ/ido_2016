<?php defined('SYSPATH') OR die('No direct script access.');

class View extends Kohana_View
{
	public function set($name, $value = NULL)
	{
		if (is_array($name))
		{
			return $this->set_array($name);
		}

		return parent::set($name, $value);
	}

	public function set_array(array $params = array())
	{
		foreach($params as $name => $value)
		{
			parent::set($name, $value);
		}

		return $this;
	}
}