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
        $TenKH = get_post_var('TenKH');
        $Diachi = get_post_var('Diachi');
        $Matkhau = get_post_var('Matkhau');
        $Sdt = get_post_var('Sdt');
        $result = $this->model->getTaikhoanKH($TenKH,$Email,$Sdt,$Diachi,$Matkhau);
        if($result==null){
            echo 0;
        }
        else{
            echo 1;
            $kq1 = $this->model-> KTTK($Email,$Matkhau);
        }
        //$_SESSION['login']['Email']=$Email;
    }
}
?>