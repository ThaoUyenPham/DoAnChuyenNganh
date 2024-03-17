<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class chitietsanpham_Model extends Model {

    public function getDanhSachSanPham(){
        $query = "";
        return $this->qSelect($query);
    }
}