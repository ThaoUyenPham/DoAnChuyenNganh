<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class giohang_Model extends Model {

    public function getDanhSachSanPham(){
        $query = "select * from qldoanchuyennganh.giohang order by IdG asc";
        return $this->qSelect($query);
    }
    public function getxoaSanpham($IdG){
        $query = "delete from qldoanchuyennganh.giohang where IdG = '".$IdG."'";
        //var_dump($query);die();
        return $this->qDelete($query);
    }
    public function getCapNhatSanpham($IdG,$soluong){
        $query = "update qldoanchuyennganh.giohang set SL=".$soluong." where IdG='".$IdG."'";
        //var_dump($query);die();
        return $this->qUpdate($query);
    }
}