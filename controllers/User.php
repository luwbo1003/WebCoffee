<?php
class User extends Controller
{
    public function __construct()
    {
        // $this->UserModel = $this->model('UserModel');
        // $this->CustomerModel = $this->model('CustomerModel');
    }

    public function login()
    {

            $this->view('login', []);
        
    }
}