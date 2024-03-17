<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class index_Model extends Model {

    public function getChamsocda(){
        $query = "select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, 
        qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and dm.IdDM=2 limit 5";
        return $this->qSelect($query);
    }

}
