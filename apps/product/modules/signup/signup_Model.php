<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class signup_Model extends Model {
    public function getTaikhoanKH($TenKH,$Email,$Sdt,$Diachi,$Matkhau){
        $query = "insert into qldoanchuyennganh.khachhang(TenKH,Email,Sdt,DiaChi,Matkhau)
        values(N'".$TenKH."','".$Email."','".$Sdt."',N'".$Diachi."','".$Matkhau."')";
        //var_dump($query);die();
        return $this->qInsert($query);
    }
    public function KTTK($Email,$Matkhau){
        $query = "select * from qldoanchuyennganh.khachhang 
        where Email='".$Email."' and Matkhau='".$Matkhau."'";
        //var_dump($query);die();
        return $this->qSelect($query);
    }
}
