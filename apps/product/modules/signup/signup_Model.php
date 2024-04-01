<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class signup_Model extends Model {
    public function getTaikhoanKH($Email,$Sdt){
        $query = "select * from qldoanchuyennganh.khachhang 
        where Email='".$Email."' and Sdt='".$Sdt."";
        return $this->qSelect($query);
    }
}
