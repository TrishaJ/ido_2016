<?php defined('SYSPATH') or die('No direct script access.');

class Model_News_Category extends Model_Base 
{
	protected $_table_name = 'news_categories';

	protected $_has_many = array(	
	    'news' => array(
	        'model'       => 'News',
	        'foreign_key' => 'category_id',
	    )
	);
}