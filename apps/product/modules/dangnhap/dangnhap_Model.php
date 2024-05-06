<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class dangnhap_Model extends Model {
    public function getTaikhoan($Email,$Matkhau){
        $query = "select IdKH, Email,Matkhau from qldoanchuyennganh.khachhang 
        where Email='".$Email."' and Matkhau='".$Matkhau."'";
        //echo $query;die();
        return $this->qSelect($query);

    }
}
