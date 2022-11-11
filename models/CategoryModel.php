<?php
class CategoryModel
{
    var $cate_id;
    var $cate_name;
    var $cate_status;

    public function getId()
    {
        return $this->cate_id;
    }
    public function getName()
    {
        return $this->cate_name;
    }
    public function getStatus()
    {
        return $this->cate_status;
    }
    public function __contruct($cate_id, $cate_name, $cate_status)
    {
        $this->cate_id = $cate_id;
        $this->cate_name = $cate_name;
        $this->cate_status = $cate_status;
    }

    public function getCategoryList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_category WHERE cate_status = '1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }
    
    public function getCategory($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_category where cate_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }
    
    public function addCategory($name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_category (cate_name, cate_status) VALUES ('$name','1')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    public function editCategory($id, $cate_name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_category SET cate_name = '$cate_name' WHERE cate_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCategory($cate_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_category SET cate_status = b'0' WHERE cate_id = '$cate_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    
    public function countProdPerCate($cate_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT COUNT(category_id) AS 'count' FROM tbl_product WHERE category_id = '$cate_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function duplicateCategory($cate_name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT cate_name FROM tbl_category WHERE cate_name like '$cate_name'");
        $data = $result[0]['cate_name'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function editStatusCategory($cate_name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_category SET cate_status = b'1' WHERE cate_name like '$cate_name'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
}

