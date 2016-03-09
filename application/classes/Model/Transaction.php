<?php defined('SYSPATH') or die('No direct script access.');

class Model_Transaction extends Model_Base 
{
	protected $_table_name = 'transactions';

	protected $_belongs_to = array(	
	    'user' => array(
	        'model'       => 'User',
	        'foreign_key' => 'user_id',
	    ),
	    'category' => array(
	        'model'       => 'Transaction_Category',
	        'foreign_key' => 'category_id',
    	)
	);

	public function rules()
	{
	    return array(
    		'user_id' => array(
    			array('not_empty'),
    			array('digit')
			),
    		'category_id' => array(
    			array('not_empty'),
    			array('digit')
			),
			'date' => array(
    			array('not_empty'),
    			array('date')
			)
    	);
	}

	public function filters()
	{
		return array(
			TRUE => array(
				array('trim')
			)
			// тут надо еще 2 фильтра
		);
	}

	public function labels()
	{
		return array(
			'category_id' => 'Категория',
			'user_id'     => 'Пользователь',
			'date'	      => 'Дата',
			'description' => 'Подробности',
			'sum'		  => 'Сумма'
		);
	}
}
