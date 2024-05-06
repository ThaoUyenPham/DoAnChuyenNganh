<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class donhang_Model extends Model {
    public function getXemDH($maKH){
        $query = "select distinct sp.Hinh,sp.Tieude,sp.Gia,hd.Email,SoLuong,TongTien 
        from qldoanchuyennganh.hoadon as hd,qldoanchuyennganh.sanpham as sp,qldoanchuyennganh.khachhang as kh 
        where hd.IdSP=sp.IdSP and kh.IdKH=hd.IdKH and kh.IdKH='".$maKH."'";
    return $this->qSelect($query);
}
    public function getXemDHKH($maKH){
        $query = "select kh.Sdt,hd.IdHD,kh.Tenkh,kh.DiaChi,Ngaydat,hd.Email
        from qldoanchuyennganh.hoadon as hd,qldoanchuyennganh.sanpham as sp,qldoanchuyennganh.khachhang as kh 
        where hd.IdSP=sp.IdSP and kh.IdKH=hd.IdKH and kh.IdKH='".$maKH."' GROUP BY Email;";
    return $this->qSelect($query);
    }
}