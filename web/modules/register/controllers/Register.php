<?php
class Register extends Trongate
{
    public function index()
    {
        $data['title'] = "Register";
        $data['view_module'] = 'register';
        $data['view_file'] = 'index';
        $this->template('landing', $data);
    }

    public function preferences()
    {
        $data['title'] = "Area of Interest";
        $data['view_module'] = 'register';
        $data['view_file'] = 'interests';
        $this->template('landing', $data);
    }
}
