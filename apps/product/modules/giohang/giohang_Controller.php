<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class giohang_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'giohang');
       
    }

    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }

    public function index() {
        $viewData['products'] = $this->model->getDanhSachSanPham();
        $this->getView()->render('giohang', $viewData);//khai bao khi goi ham index thi se ra file giao dien nao len
    }
    public function XoaGiohang() {
        $IdG = get_post_var('IdG');
        $result= $this->model->getxoaSanpham($IdG);   
    }
    public function CapNhatGiohang() {
        $IdG = get_post_var('IdG');
        $soluong = get_post_var('soluong');
        $result = $this->model->getCapNhatSanpham($IdG,$soluong);   
        // if($result==null)
        //     echo 0;
        // else
        //     echo 1;
    }
    public function Order(){
        session_start();
        
    }
}
?>