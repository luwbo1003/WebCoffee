<?php
class ProductModel
{
    public function __contruct()
    {
    }

    public function getProductList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product join tbl_category WHERE tbl_product.category_id = tbl_category.cate_id and tbl_product.status = 1 AND tbl_category.cate_status = 1");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * from tbl_product where pro_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProductId()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT pro_id from tbl_product where pro_image_id is NULL OR pro_des_id is NULL");
        $data = $result[0]['pro_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    // public function getCategoryId($id)
    // {
    //     $link = null;
    //     taoKetNoi($link);
    //     $result = chayTruyVanTraVeDL($link, "SELECT category_id from tbl_product where pro_id = '$id'");
    //     $data = $result[0]['category_id'];
    //     giaiPhongBoNho($link, $result);
    //     return $data;
    // }

    public function getImageId($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT pro_image_id from tbl_product where pro_id = '$id'");
        $data = $result[0]['pro_image_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getDesId($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT pro_des_id from tbl_product where pro_id = '$id'");
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

    public function getProductByName($name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = 1 AND pro_name LIKE '%$name%'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addProduct($name, $quantity, $price, $category_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_product (pro_name, pro_quantity, pro_price, category_id, STATUS) 
                                                    VALUES ('$name', '$quantity', '$price', '$category_id', '1')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET STATUS = b'0' WHERE pro_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function addImageIdProduct($id, $pro_image_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET pro_image_id = '$pro_image_id' WHERE pro_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function addDesIdProduct($id, $pro_des_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET pro_des_id = '$pro_des_id' WHERE pro_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    public function editProduct($id, $pro_name, $pro_quantity, $category_id, $pro_price)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET pro_name = '$pro_name', pro_quantity = '$pro_quantity', category_id = '$category_id',
                                                                        pro_price = '$pro_price' WHERE pro_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function countPageProductAdmin($name, $cateList)
    {
        $category = '(';
        foreach ($cateList as $key => $value) {
            if ($key == count($cateList) - 1) {
                $category .= $value['cate_id'] . ')';
            } else {
                $category .= $value['cate_id'] . ",";
            }
        }
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT count(*) FROM tbl_product WHERE STATUS = 1 AND pro_name LIKE '%$name%' AND category_id in $category");
        $total = ceil($result[0]['count(*)'] / 6);
        giaiPhongBoNho($link, $result);
        return $total;
    }

    public function searchProductAdmin($name, $cateList, $from)
    {
        $category = '(';
        foreach ($cateList as $key => $value) {
            if ($key == count($cateList) - 1) {
                $category .= $value['cate_id'] . ')';
            } else {
                $category .= $value['cate_id'] . ",";
            }
        }
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = 1 AND pro_name LIKE '%$name%' AND category_id in $category LIMIT $from, 6");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }
}
