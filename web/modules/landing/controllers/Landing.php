<?php
class Landing extends Trongate
{

    function index()
    {
        $test = $this->model->query("SELECT * FROM test", "object");

        $data['title'] = "Home";
        $data['view_module'] = 'landing';
        $data['view_file'] = 'index';
        $this->template('landing', $data);


    }
}
