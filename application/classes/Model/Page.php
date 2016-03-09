<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Model_Page
 *
 * @property string $title
 * @property string $url
 * @property string $content
 * @property int    $status
 */
class Model_Page extends Model_Base
{
    protected $_table_name = 'pages';
}