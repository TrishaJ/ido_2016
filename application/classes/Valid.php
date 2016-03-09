<?php defined('SYSPATH') OR die('No direct script access.');

class Valid extends Kohana_Valid {

	public static function future_date($value)
	{
		$time = date('Y-m-d', strtotime($value));

		return $time > date('Y-m-d', time());
	}

	public static function next_year($value)
	{
		$year = date('Y', strtotime($value));
		$next_year = date('Y', strtotime('+1 year'));

		return $year === $next_year;
	}

	public static function one_month($array, $field_one, $field_two)
	{
		$value_one = Arr::get($array, $field_one);
		$value_two = Arr::get($array, $field_two);

		$value_one = strtotime($value_one);
		$value_two = strtotime($value_two);

		if (date('Y', $value_one) !== date('Y', $value_two)) {
			return FALSE;
		}

		$month_one = (int) date('m', $value_one);
		$month_two = (int) date('m', $value_two);

		$result = $month_one - $month_two;

		return abs($result) <= 1;
	}

	/**
	* PHPDOC
	*/
	public static function at_least($validation, $fields, $count)
	{
		$found = 0;

		$data = $validation->data();

		foreach ($fields as $field)
		{
			if (array_key_exists($field, $data))
			{
				if (Valid::not_empty($data[$field]))
				{
					$found++;
				}
			}
		}

		if ($found < $count)
		{
			foreach($fields as $field)
			{
				if (!Valid::not_empty($data[$field]))
				{
					$validation->error($field, 'Поле не должно быть пустым');
				}
			}
		}
	}
}
