<?php
class Search extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->ImageModel = $this->model('ImageModel');
        $this->CategoryModel = $this->model('CategoryModel');
    }

    public function searchByCategory()
    {
        if (isset($_POST['category'])) {
            $prod = $this->ProductModel->getProductByCategory($_POST['category']);
            $image = array();
            $category_list = $this->CategoryModel->getCategoryList();
            foreach ($prod as $value) {
                $img = $this->ImageModel->getImage($this->ProductModel->getImageId($value['pro_id']))[0];
                array_push($image, $img);
            }

            // //goi va show du lieu ra view
            $this->view('products', ['prod' => $prod, 'image' => $image, 'category' => $category_list]);
        }
    }
}
