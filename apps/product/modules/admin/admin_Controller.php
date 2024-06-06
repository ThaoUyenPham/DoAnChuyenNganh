<?php

if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class admin_Controller extends Controller {

    public function __construct() { //ham cau truc, vd app la home/ke ben la module
        parent::__construct('product', 'admin');
       
    }

    public function main() {//dau tien khi url goi home/index thi dau tien no se vo index
        $this->index();//khong bo qua nhieu xu ly vao ham main nay
    }

    public function index() {
        $item_per_page=$_GET['per_page'];
        $current_page=$_GET['page'];
        $offet=($current_page-1)*$item_per_page;
        
        $viewData['danhmuc'] =  $this->model->getDanhMuc();  
        $viewData['ctdm'] =  $this->model->getCTDM(); 
        $viewData['ttctdm'] =  $this->model->getTTCTDM(); 
        $viewData['order']=$this->model->getDonHang();
        $viewData['thongke']=$this->model->getThongKe();
        if($item_per_page==0){
            echo "Khong co san pham";
        }
        else{
            $viewData['products'] =  $this->model->getXemSanPham($item_per_page,$offet);

        } 
        
        $this->getView()->render('admin', $viewData);     
    }
    public function getSearchKey() {
        if(isset($_GET['tukhoa'])){
            $tukhoa=$_GET['tukhoa']; 
            $viewData['gender'] = null;
            $viewData['products'] = $this->model->getDanhSachSanPhamTheoTuKhoa($tukhoa);
            //var_dump($viewData);die();
            $this->getView()->render('admin', $viewData);           
        }
        else{
            $this->getView()->render('error404'); 
        }
    }
    public function ThemSanpham() {
        $TenSP = get_post_var('TenSP');
        $Hinh = get_post_var('Hinh');
        $IdDM = get_post_var('IdDM');
        $Gia = get_post_var('Gia');
        $IdCTDM= get_post_var('IdCTDM');
        $IdTTCTDM= get_post_var('IdTTCTDM');
        $SL = get_post_var('SL');
        //$date = date('Y-m-d H:i:s');
        $split = html_entity_decode(str_replace('C:fakepath', '', $Hinh));
        $img="tttl/img/" .$split;
        $IdSP = $this->model->getThemSanpham($TenSP,$SL,$Gia,$img,$IdDM,$IdCTDM,$IdTTCTDM);
        
        if($IdSP!=null){
            echo 1;
        }
        else{
            echo 0;
        }
    }   
    public function XoaSanpham() {
        $IdSP = get_post_var('IdSP');
        $result= $this->model->getxoaSanpham($IdSP);
        if(!$result)
            echo 0;
        else
            echo 1;
            
    }
}
?>