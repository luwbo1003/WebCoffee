<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
    }

    public function index()
    {
        // goi method getproductlist
        $this->view('index',[]);
    }

   // view

}