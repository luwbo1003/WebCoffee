<?php 
class DescriptionModel{
    var $pro_des_id;
    var $pro_brand;
    var $pro_form;
    var $pro_flavor;
    var $pro_caffein;
    var $pro_roast_level;
    var $pro_info;

    public function getId()
    {
        return $this->pro_des_id;
    }
    public function getBrand()
    {
        return $this->pro_brand;
    }
    public function getForm()
    {
        return $this->pro_form;
    }
    public function getFlavor()
    {
        return $this->pro_flavor;
    }
    public function getCaffein()
    {
        return $this->pro_caffein;
    }
    public function getRoast()
    {
        return $this->pro_roast_level;
    }
    public function getInfo()
    {
        return $this->pro_info;
    }

    public function __contruct($pro_des_id, $pro_brand, $pro_form,$pro_flavor,$pro_caffein,$pro_roast_level,$pro_info)
    {
        $this->pro_des_id = $pro_des_id;
        $this->pro_brand = $pro_brand;
        $this->pro_form =  $pro_form;
        $this->pro_flavor =  $pro_flavor;
        $this->pro_caffein =  $pro_caffein;
        $this->pro_roast_level =  $pro_roast_level;
        $this->pro_info =  $pro_info;
    }
    public function getDes($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_pro_des where pro_des_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addDes($pro_brand, $pro_form, $pro_flavor, $pro_caffein, $pro_roast_level)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_pro_des (pro_brand, pro_form, pro_flavor, pro_caffein, pro_roast_level) 
                                                    VALUES ('$pro_brand', '$pro_form', '$pro_flavor', '$pro_caffein', '$pro_roast_level')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>