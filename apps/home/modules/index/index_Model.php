<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class index_Model extends Model {

    public function getDanhSachSanPham(){
        $query = "select tc.MaTC,sp.MaSP,TenSP,img,GIA from ql_banhang.trangchu as tc,ql_banhang.sanpham as sp where tc.MaSP=sp.MaSP";
        return $this->qSelect($query);
    }

}
