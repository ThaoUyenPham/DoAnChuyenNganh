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
        // $TenSz1 = get_post_var('TenSz1');
        // $TenSz2 = get_post_var('TenSz2');
        // $SLT1 = get_post_var('SLT1');
        // $SLT2 = get_post_var('SLT2');
        $split = html_entity_decode(str_replace('C:fakepath', '', $Hinh));
        $img="tttl/img/" .$split;
        $IdSP = $this->model->getThemSanpham($TenSP,$img,$IdDM,$Gia,$IdCTDM,$IdTTCTDM,$SL);
        
        
        // nu $maSP < 1 -> thi loi khong them moi duoc
            // viet <code> phai them rang buoc du lieu lai di
            // $kq2 = $this->model->getMauSanpham($TenMau);
            // $kq5 = $this->model->getQHMauSanpham($maSP,$kq2);

            // $kq3 = $this->model->getSizeSanpham1($TenSz1);
            // $kq6 = $this->model->getQHSizeSanpham1($maSP,$kq3);


            // $kq4 = $this->model->getSizeSanpham2($TenSz2); 
            // $kq7 = $this->model->getQHSizeSanpham2($maSP,$kq4);

            // $kq8 = $this->model->getQLTKSanpham1($kq2,$kq3,$maSP,$SLT1);
            // $kq9 = $this->model->getQLTKSanpham2($kq2,$kq4,$maSP,$SLT2);
        
        if($maSP>0){
            echo 1;
        }
        else{
            echo 0;
        }
            
        
        
    }   
}
?>