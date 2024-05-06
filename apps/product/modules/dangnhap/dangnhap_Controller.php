<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class dangnhap_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'dangnhap');
       
    }
    
    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }
    public function index() {
        $viewData=[];
        $this->getView()->render('dangnhap', $viewData);//khai bao khi goi ham index thi se ra file giao dien nao len
    }
    public function checkUser(){
        $Email = get_post_var('Email');
        $Matkhau = get_post_var('Matkhau');

        //echo 'Email:'.$Email;
        //echo 'Matkhau:'.$Matkhau;
        
        $result = $this->model->getTaikhoan($Email,$Matkhau);
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        //session_start();
        $_SESSION['dangnhap']['Email']=$Email;
        if(!$result){
            echo 0;
        }
        else{
            echo 1;
        }
    }
}
?>