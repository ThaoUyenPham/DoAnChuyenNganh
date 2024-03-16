<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class danhmuc_Model extends Model {

    public function getDanhSachSanPham(){
        $query = "select * from qldoanchuyennganh.sanpham";
        return $this->qSelect($query);
    }
    public function getDanhSachSanPhamTheoDanhMuc($gender){
        $query = "select distinct IdSP,Tieude,Gia,KhuyenMai,Hinh from qldoanchuyennganh.sanpham 
        where Id_TTCTDM=".$gender." limit 10";
        return $this->qSelect($query);
    }
}