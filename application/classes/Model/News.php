<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends Model_Base 
{
	protected $_table_name = 'news';

	protected $_belongs_to = array(
	    'category' => array(
	        'model'       => 'News_Category',
	        'foreign_key' => 'category_id',
	    )
	);

	public function rules()
	{
	    return array(
	    	TRUE => array(
	    		array('trim')
    		),
    		'title' => array(
    			array('not_empty'),
			),
			'category_id' => array(
				array('not_empty')
			),
    	);
	}

	public function labels()
	{
		return array(
			'title'       => 'Заголовок',
			'content'     => 'Контент',
			'category_id' => 'Категория',
			'status'	  => 'Статус',
		);
	}

	public function only_relised()
	{
		return $this->where(
			$this->object_name().'.date',
			'<=',
			DB::expr('NOW()')
		);
	}
}