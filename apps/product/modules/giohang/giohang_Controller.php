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
    // public function XoaGiohang() {
    //     $MaG = get_post_var('MaG');
    //     $result= $this->model->getxoaSanpham($MaG);   
    //     if(!$result)
    //         echo 0;
    //     else
    //         echo 1;           
    // }
    // public function CapNhatGiohang() {
    //     $MaG = get_post_var('MaG');
    //     $sl = get_post_var('sl');
    //     if($sl >0){
    //         echo 1;
    //     }
    //     else{
    //         echo 0;
    //     }
    //     return $this->model->getCapNhatSanpham($MaG,$sl);      
    // }
    public function Order(){
        session_start();
        
    }
}
?>