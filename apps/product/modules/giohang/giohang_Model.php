<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class giohang_Model extends Model {

    public function getDanhSachSanPham(){
        $query = "select * from qldoanchuyennganh.giohang order by IdG asc";
        return $this->qSelect($query);
    }
    public function getxoaSanpham($MaG){
        $query = "delete from qldoanchuyennganh.giohang where MaG = '".$MaG."'";
        return $this->qDelete($query);
    }
    public function getCapNhatSanpham($MaG,$soluong){
        $query = "update qldoanchuyennganh set sl=".$sl." where MaG='".$MaG."'";
        //var_dump($query);
        return $this->qUpdate($query);
    }
}