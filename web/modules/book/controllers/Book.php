<?php

class Book extends Trongate
{

    function index()
    {
        $data['title'] = "Book";
        $data['view_module'] = 'book';
        $data['view_file'] = 'index';
        $this->template('landing', $data);
    }
}
