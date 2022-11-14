<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->ImageModel = $this->model('ImageModel');
        $this->CategoryModel = $this->model('CategoryModel');
        $this->DescriptionModel = $this->model('DescriptionModel');
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
        $this->view('index', ['prod' =>  $prod, 'image' => $image]);
    }
    public function detail($id)
    {
        $prod = $this->ProductModel->getProduct($id);
        $prodByCate = $this->ProductModel->getProductByCategory($prod[0]['category_id']);
        $category_name = $this->CategoryModel->getCategory($prod[0]['category_id']);
        $image = $this->ImageModel->getImage($prod[0]['pro_image_id']);
        $des = $this->DescriptionModel->getDes($prod[0]['pro_des_id']);
        $imageByCate = array();
        foreach ($prodByCate as $value) {
            $img = $this->ImageModel->getImage($value['pro_image_id'])[0];
            array_push($imageByCate, $img);
        }
        // // goi method getproductlist
        $this->view('detail',['prod' => $prod, 'category' => $category_name, 'image' => $image, 'des' => $des, 'prodByCate' => $prodByCate, 'imageByCate' => $imageByCate]);
    }
    public function about()
    {
        // goi method getproductlist
        $this->view('about',[]);
    }
    public function products()
    {
        $prod = $this->ProductModel->getProductList();
        $image = array();
        $category_list = $this->CategoryModel->getCategoryList();
        foreach ($prod as $value) {
            $img = $this->ImageModel->getImage($this->ProductModel->getImageId($value['pro_id']))[0];
            array_push($image, $img);
        }

        // //goi va show du lieu ra view
        $this->view('products', ['prod' => $prod, 'image' => $image, 'category' => $category_list]);
    }
   // view
   public function shopping_cart()
   {
       // goi method getproductlist
       $this->view('shopping_cart',[]);
   }
   public function empty()
   {
       // goi method getproductlist
       $this->view('empty',[]);
   }
   
}