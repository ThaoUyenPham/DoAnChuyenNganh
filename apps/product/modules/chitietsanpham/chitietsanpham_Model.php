<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class chitietsanpham_Model extends Model {

    public function getChiTietSanPham($msp){
        $query = "select IdSP,Tieude,Hinh,Gia,KhuyenMai,SL from qldoanchuyennganh.sanpham 
                  where IdSP=".$msp;
        return $this->qSelect($query);
    }
    public function getLuusanpham($IdSP,$Tieude,$amount,$Gia,$KhuyenMai,$Hinh){
        $query = "insert into qldoanchuyennganh.giohang(IdSP,Tieude,SL,Gia,KhuyenMai,Hinh,IPAddress) 
        values ('".$IdSP."',N'".$Tieude."',".$amount.",".$Gia.",".$KhuyenMai.",'".$Hinh."','".$_SESSION['IPAddress']."')";
        //var_dump($query);die();
        return $this->qInsert($query);
    }
}