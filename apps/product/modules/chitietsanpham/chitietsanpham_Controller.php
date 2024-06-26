<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class chitietsanpham_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'chitietsanpham');
       
    }

    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }

    public function index() {
        $msp = get_request_var('msp');
        
        if(!empty($msp)){
            $viewData['products'] = $this->model->getChiTietSanPham($msp);
            $viewData['IdSP'] = $msp;  
            $result = $this->getView()->render('chitietsanpham', $viewData);//khai bao khi goi ham index thi se ra file giao dien nao len
            if(count($result) == 1){
                // $gt = $result[0];
                if($result['SL']!=0)
                    echo $result['SL'];
                else
                    echo "hết hàng";
            }         
        }else{
            $this->getView()->render('error404');   
        }//khai bao khi goi ham index thi se ra file giao dien nao len
    }
    public function soLuongSP(){
        $msp = get_post_var('maSP');
        $result = $this->model->getAmount($msp);
        if(count($result) == 1){
            $gt = $result[0];
            if($gt['SL']!=0)
                echo $gt['SL'];
            else
                echo "hết hàng";
        }
        else
            echo 0;
    }

    public function saveCartProduct(){//lưu trữ sản phẩm
        $IdSP = get_post_var('IdSP');
        $Tieude = get_post_var('Tieude');
        $amount = get_post_var('amount');
        $Gia = get_post_var('Gia');
        $Hinh = get_post_var('Hinh');

        $result = $this->model->getLuusanpham($IdSP,$Tieude,$amount,$Gia,$Hinh); 
        
       
    }
}
?>