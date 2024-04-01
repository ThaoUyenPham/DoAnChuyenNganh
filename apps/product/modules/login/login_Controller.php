<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class login_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'login');
       
    }

    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }

    public function index() {
        $viewData=[];
        $this->getView()->render('login', $viewData);//khai bao khi goi ham index thi se ra file giao dien nao len
    }
    public function checkTK(){
        //session_start();
        $Email = get_post_var('Email');
        $Matkhau = get_post_var('Matkhau');
        $result = $this->model->getTaikhoanKH($Email,$Matkhau);
       
       //$_SESSION['dangnhap']['username']=$username;
        //echo $_SESSION['dangnhap']['username'];
             
        if(!$result){
            echo 0;
        }
        else{
            echo 1;
        }
        //$_SESSION['login']['Email']=$Email;
    }
}
?>