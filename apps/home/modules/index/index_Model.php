<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}

class index_Model extends Model {

    public function getChamsocda(){
        $query = "select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, 
        qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and dm.IdDM=2 limit 5";
        return $this->qSelect($query);
    }
    public function getChamsoctoc(){
        $query = "select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, 
        qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and dm.IdDM=4 limit 5";
        return $this->qSelect($query);
    }
    public function getSaleTrangdiem(){
        $query = "select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, 
        qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and sp.KhuyenMai>100000
        and sp.KhuyenMai <=300000  limit 5;";
        return $this->qSelect($query);
    }
    public function getSaleNuoctaytrang(){
        $query = "select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.thongtinctdm ttctdm, 
        qldoanchuyennganh.sanpham sp where sp.Id_TTCTDM= ttctdm.IdTTCTDM and sp.KhuyenMai>100000
        and sp.KhuyenMai <=300000 and ttctdm.IdTTCTDM=5 limit 2;";
        return $this->qSelect($query);
    }
    public function getSaleSon(){
        $query = "select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.thongtinctdm ttctdm, 
        qldoanchuyennganh.sanpham sp where sp.Id_TTCTDM= ttctdm.IdTTCTDM and sp.KhuyenMai>=90000
        and sp.KhuyenMai <=100000 and ttctdm.IdTTCTDM=2 limit 2;";
        return $this->qSelect($query);
    }
    public function getThuonghieu(){
        $query = "select DISTINCT sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, 
        qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and sp.Tieude like '%CoCoon%' limit 8;";
        return $this->qSelect($query);
    }
}
