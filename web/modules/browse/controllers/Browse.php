<?php
class Browse extends Trongate
{
    function index()
    {
        $data['title'] = "Browse Resources";
        $data['view_module'] = 'browse';
        $data['view_file'] = 'index';
        $this->template('landing', $data);
    }
}
