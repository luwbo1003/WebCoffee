<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->ImageModel = $this->model('ImageModel');
        $this->CategoryModel = $this->model('CategoryModel');
    }

    public function index() 
    {
        // goi method getproductlist
        $prod = $this->ProductModel->getProductList();
        $image = array();
        foreach ($prod as $value) {
            $img = $this->ImageModel->getImage($this->ProductModel->getImageId($value['pro_id']))[0];

            array_push($image, $img);
        }

        // //goi va show du lieu ra view
        $this->view('index', ['prod' => $prod, 'image' => $image]);
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
   // view
   public function shopping_cart()
   {
       // goi method getproductlist
       $this->view('shopping_cart',[]);
   }
}