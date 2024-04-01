<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class danhmuc_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'danhmuc');
       
    }

    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }

    public function index() {
        $viewData['type'] = get_request_var('t'); //url $_GET['t'] 
        $gender = get_request_var('g');
        $viewData['gender'] = $gender;
        $viewData['products'] = $this->model->getDanhSachSanPhamTheoTTCTDM($gender);
        $this->getView()->render('danhmuc', $viewData);
       
    }
    public function getSearch() {
        if(isset($_GET['tukhoa'])){
            $tukhoa=$_GET['tukhoa']; 
            $viewData['gender'] = null;
            $viewData['products'] = $this->model->getDanhSachSanPhamTheoTenSP($tukhoa);
            //var_dump($viewData);die();
            $this->getView()->render('danhmuc', $viewData);           
        }
        else{
            $this->getView()->render('error404'); 
        }
      
    }
}
?>