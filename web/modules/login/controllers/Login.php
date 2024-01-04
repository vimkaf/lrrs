<?php
class Login extends Trongate
{
    public function index()
    {
        $data['title'] = "Login";
        $data['view_module'] = 'login';
        $data['view_file'] = 'index';
        $this->template('landing', $data);
    }
}
