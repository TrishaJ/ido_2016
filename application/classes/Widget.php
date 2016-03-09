<?php defined('SYSPATH') or die('No direct script access.');

abstract class Widget
{
	protected static $prefix = 'Widget';

	public static function factory($name, array $params = array())
	{
		$widget_name = static::$prefix . '_' . $name;
		$widget = new $widget_name($params);

		return $widget->run();
	}

	protected function __construct($params = array())
	{
		foreach ($params as $param => $value)
		{
			$this->$param = $value;
		}

		if (method_exists($this, 'init'))
		{
			$this->init();
		}
	}

	abstract public function run();
}