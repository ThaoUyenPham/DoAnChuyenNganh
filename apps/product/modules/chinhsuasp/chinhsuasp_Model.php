<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class chinhsuasp_Model extends Model {
    public function getChinhSuaSP($msp){
            // $query = "select IdSP,dm.MaDM,dm.TenDM,sp.TenSP,sp.img,SLSP,GIA from ql_banhang.sanpham sp, 
            // qldoanchuyennganh.danhmuc dm where dm.IdDM=sp.Id_DM and IdSP=".$msp;
            $query ="select sp.Id_DM,IdSP,TenDM,Tieude,SL,Gia,sp.Hinh from qldoanchuyennganh.sanpham sp, 
            qldoanchuyennganh.danhmuc dm where dm.IdDM=sp.Id_DM and sp.IdSP=".$msp;
        return $this->qSelect($query);
    }
    public function getCapNhatSanpham($IdSP,$Tieude,$MaDM,$SLSP,$GIA){
        $query = " update qldoanchuyennganh.sanpham set Tieude='".$Tieude."',
        Id_DM='".$MaDM."',SL=".$SLSP.",Gia=".$GIA." where IdSP='".$IdSP."'";
        var_dump($query);die(); 
        return $this->qUpdate($query);
    }
}