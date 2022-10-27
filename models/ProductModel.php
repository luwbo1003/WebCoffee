<?php
class ProductModel
{
    var $pro_id;
    var $pro_name;
    var $pro_quantity;
    var $pro_price;
    var $category_id;
    var $pro_des_id;
    var $pro_image_id;
    var $status;

    public function getId()
    {
        return $this->pro_id;
    }
    public function getName()
    {
        return $this->pro_name;
    }
    public function getQuantity()
    {
        return $this->pro_quantity;
    }
    public function getPrice()
    {
        return $this->pro_price;
    }
    public function getIdCategory()
    {
        return $this->category_id;
    }
    public function getDes()
    {
        return $this->pro_des_id;
    }
    public function getIdImage()
    {
        return $this->pro_image_id;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function __contruct($pro_id, $pro_name, $pro_quantity, $pro_price, $category_id, $pro_des_id, $pro_image_id, $status)
    {
        $this->pro_id = $pro_id;
        $this->pro_name = $pro_name;
        $this->pro_quantity = $pro_quantity;
        $this->pro_price = $pro_price;
        $this->category_id = $category_id;
        $this->pro_des_id = $pro_des_id;
        $this->pro_image_id = $pro_image_id;
        $this->status = $status;
    }

    public function getProductList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * from tbl_product where status = '1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_product where pro_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProductId()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select pro_id from tbl_product where pro_image_id is NULL");
        $data = $result[0]['pro_id']; //**** */
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getCategoryId($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select category_id from tbl_product where pro_id = '$id'");
        $data = $result[0]['category_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getImageId($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select pro_image_id from tbl_product where pro_id = '$id'");
        $data = $result[0]['pro_image_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getDesId($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select pro_des_id from tbl_product where pro_id = '$id'");
        $data = $result[0]['pro_des_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProductByCategory($category)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = 1 AND category_id = '$category'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

}