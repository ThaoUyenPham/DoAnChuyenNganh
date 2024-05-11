<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class danhmuc_Model extends Model {
    public function getDanhSachSanPhamTheoTTCTDM($gender){
        $query = "select distinct IdSP,Tieude,Gia,KhuyenMai,Hinh from qldoanchuyennganh.sanpham 
        where Id_TTCTDM=".$gender." order by IdSP asc";
        return $this->qSelect($query);
    }
    public function getDanhSachSanPhamTheoTenSP($tukhoa){
        $query = "select * from qldoanchuyennganh.sanpham where Tieude like '%".$tukhoa."%' order by IdSP asc"; 
        //echo $query; die();
        return $this->qSelect($query);
    }
}