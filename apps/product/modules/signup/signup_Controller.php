<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class signup_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'signup');
       
    }

    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }

    public function index() {
        $viewData=[];
        $this->getView()->render('signup', $viewData);//khai bao khi goi ham index thi se ra file giao dien nao len
    }
    public function checkTK(){
        //session_start();
        $Email = get_post_var('Email');
        $Sdt = get_post_var('Sdt');
        $result = $this->model->getTaikhoanKH($Email,$Sdt);
       
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