<?php defined('SYSPATH') or die('No direct script access.');

class Model_Transaction_Category extends Model_Base 
{
	const STATUS_INCOMING = 1;
	const STATUS_EXPENSE  = 0;

	protected $_table_name = 'transaction_categories';

	protected $_has_many = array(	
	    'categories' => array(
	        'model'       => 'Transaction',
	        'foreign_key' => 'category_id',
	    )
	);

	protected $_belongs_to = array(	
	    'user' => array(
	        'model'       => 'User',
	        'foreign_key' => 'user_id',
	    )
	);

	public function rules()
	{
	    return array(
	    	TRUE => array(
	    		array('not_empty')
    		),
    		'status' => array(
    			array('in_array', array(':value', array_keys(self::get_statuses)))
			),
			'title' => array(
				array('max_length', array(':value', 255))
			),
    	);
	}

	public function labels()
	{
		return array(
			'title'       => 'Заголовок',
			'user_id'     => 'Пользователь',
			'status'	  => 'Статус',
		);
	}

	public static function get_statuses($status = NULL)
	{
		$statuses = array(
			self::STATUS_INCOMING => 'Доход',
			self::STATUS_EXPENSE  => 'Расход'
		);

		if (Valid::digit($status))
		{
			return Arr::get($statuses, $status, '');
		}

		return $statuses;
	}
}
