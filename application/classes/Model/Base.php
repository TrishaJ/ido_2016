<?php defined('SYSPATH') or die('No direct script access.');

class Model_Base extends ORM 
{
	public function published($published = TRUE)
	{
		return $this->where('status', '=', $published);
	}

	public function where_id($id)
	{
		return $this->where('id', '=', $id);
	}
}