<?php
class Home extends Controller
{
    public function __construct()
    {
        // $this->ProductModel = $this->model('ProductModel');
    }

    public function index()
    {
        // goi method getproductlist
        $this->view('index',[]);
    }
    public function detail()
    {
        // goi method getproductlist
        $this->view('detail',[]);
    }
    public function about()
    {
        // goi method getproductlist
        $this->view('about',[]);
    }
    public function products()
    {
        // goi method getproductlist
        $this->view('products',[]);
    }
    public function checkout()
    {
        $this->view('checkout', []);
    }

   // view

}