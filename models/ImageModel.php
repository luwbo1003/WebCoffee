<?php
class ImageModel
{
    var $img_id;
    var $pro_image_id;
    var $img_link;

    public function getImgId()
    {
        return $this->img_id;
    }
    public function getProdImgId()
    {
        return $this->pro_image_id;
    }

    public function getImgLink()
    {
        return $this->img_link;
    }

    public function __contruct($img_id, $pro_image_id, $img_link)
    {
        $this->img_id = $img_id;
        $this->pro_image_id = $pro_image_id;
        $this->img_link = $img_link;
    }

    public function getImage($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT img_link from tbl_image where pro_image_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

   public function addImage($id, $linkimg)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_image (pro_image_id, img_link) VALUES ('$id', '$linkimg')");
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