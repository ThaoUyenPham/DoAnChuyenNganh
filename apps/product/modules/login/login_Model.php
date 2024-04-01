<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class login_Model extends Model {

    public function getTaikhoanKH($Email,$Matkhau){
        $query = "select * from qldoanchuyennganh.khachhang 
        where Email='".$Email."' and Matkhau='".$Matkhau."";
        return $this->qSelect($query);

    }

}
