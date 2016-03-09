<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Base
{
    public function action_view()
    {
        $view = View::factory('Page/view');
        $id = $this->request->param('id');

        if ( ! $id)
        {
            throw new HTTP_Exception_404;
        }

        $page = ORM::factory('page')
            ->where_id($id)
            ->published()
            ->find();

        if ( ! $page->loaded())
        {
            throw new HTTP_Exception_404;
        }

        $view->set('page', $page);

        $this->template->content = $view;
    }
}