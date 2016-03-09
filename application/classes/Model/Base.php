<?php defined('SYSPATH') or die('No direct script access.');

class Model_Base extends ORM 
{
	public function filters()
	{
		return array(
			TRUE => array(
				array('trim'),
				array('strip_tags')
			),
		);
	}

	public function published($published = TRUE)
	{
		return $this->where($this->object_name().'.status', '=', $published);
	}

	public function where_id($id)
	{
		return $this->where($this->object_name().'.id', '=', (int) $id);
	}

	public function where_user_id($user_id)
	{
		return $this->where($this->object_name().'.user_id', '=', (int) $user_id);
	}
}