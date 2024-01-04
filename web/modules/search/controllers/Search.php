<?php
class Search extends Trongate
{
    function index()
    {
        $data['title'] = "Search";
        $data['view_module'] = 'search';
        $data['view_file'] = 'index';
        $this->template('landing', $data);
    }
}
