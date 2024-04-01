<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class admin_Model extends Model {

    public function getXemSanPham($item_per_page,$offet){
        $query = "select distinct  * from qldoanchuyennganh.sanpham 
        order by IdSP asc limit ".$item_per_page." offset ".$offet."";
        return $this->qSelect($query);
    }
    public function getDanhSachSanPhamTheoTuKhoa($tukhoa){
        $query = "select * from qldoanchuyennganh.sanpham where Tieude 
        like '%".$tukhoa."%' order by IdSP asc"; 
        //echo $query; die();
        return $this->qSelect($query);
    }
    public function getDanhMuc(){
        $query = "select * from qldoanchuyennganh.danhmuc"; 
        //echo $query; die();
        return $this->qSelect($query);
    }
    public function getCTDM(){
        $query = "select * from qldoanchuyennganh.ctdm"; 
        return $this->qSelect($query);
    }
    public function getTTCTDM(){
        $query = "select * from qldoanchuyennganh.thongtinctdm"; 
        return $this->qSelect($query);
    }
    public function getThemSanpham($TenSP,$img,$IdDM,$Gia,$IdCTDM,$IdTTCTDM,$SL){
        $query = "insert into qldoanchuyennganh.sanpham(Tieude,SL,img,GIA,IdDM,Id_CTDM,Id_TTCTDM) 
        values (N'".$TenSP."',".$SL.",'".$img."',".$Gia.",'".$IdDM."','".$IdCTDM."','".$IdTTCTDM."')";
        return $this->qInsert($query, true);
    }
}