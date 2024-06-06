<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class admin_Model extends Model {

    public function getXemSanPham($item_per_page,$offet){
        $query = "select distinct  * from qldoanchuyennganh.sanpham 
        order by IdSP asc limit ".$item_per_page." offset ".$offet."";
        return $this->qSelect($query);
    }
    public function getDanhSachSanPhamTheoTuKhoa($tukhoa){
        $query = "select * from qldoanchuyennganh.sanpham where Tieude 
        like '%".$tukhoa."%' order by IdSP asc"; 
        //echo $query; die();
        return $this->qSelect($query);
    }
    public function getDanhMuc(){
        $query = "select * from qldoanchuyennganh.danhmuc"; 
        //echo $query; die();
        return $this->qSelect($query);
    }
    public function getDonHang(){
        $query = "select sp.Hinh,sp.Tieude,hd.IdKH,hd.Email,hd.SoLuong,TongTien,
        Ngaydat,kh.Sdt,kh.TenKH,kh.Diachi from qldoanchuyennganh.hoadon as hd,
        qldoanchuyennganh.sanpham as sp,qldoanchuyennganh.khachhang as kh 
        where hd.IdSP=sp.IdSP and kh.IdKH=hd.IdKH GROUP BY Email"; 
        return $this->qSelect($query);
    }
    public function getCTDM(){
        $query = "select * from qldoanchuyennganh.ctdm"; 
        return $this->qSelect($query);
    }
    public function getThongKe(){
        $query = "select sp.IdSP, sp.Tieude, SUM(hd.SoLuong) as total_quantity
        FROM qldoanchuyennganh.sanpham as sp
        JOIN qldoanchuyennganh.hoadon as hd ON sp.IdSP = hd.IdSP
        GROUP BY sp.IdSP, sp.Tieude
        ORDER BY total_quantity DESC
        LIMIT 10"; 
        return $this->qSelect($query);
    }
    public function getTTCTDM(){
        $query = "select * from qldoanchuyennganh.thongtinctdm"; 
        return $this->qSelect($query);
    }
    public function getxoaSanpham($IdSP){
        $query = "delete from qldoanchuyennganh.sanpham where IdSP = '".$IdSP."'";
       //var_dump($query);die();
        return $this->qDelete($query);
    }
    public function getThemSanpham($TenSP,$SL,$Gia,$img,$IdDM,$IdCTDM,$IdTTCTDM){
        $query = "	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) 
        values(N'".$TenSP."',".$SL.",".$Gia.",'".$img."',".$IdDM.",".$IdCTDM.",".$IdTTCTDM.")";
        // var_dump($query);die();
        return $this->qInsert($query);
    }
}