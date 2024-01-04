<?php

class Article extends Trongate
{

    function index()
    {
        $data['title'] = "Article";
        $data['view_module'] = 'article';
        $data['view_file'] = 'index';
        $this->template('landing', $data);
    }
}
