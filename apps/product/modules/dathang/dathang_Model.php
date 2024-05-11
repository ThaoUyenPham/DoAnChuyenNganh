<?php
if (!defined('SERVER_ROOT')) {
    exit('No direct script access allowed');
}
class dathang_Model extends Model {
    public function getKhachhang(){    
            $query = "select * from qldoanchuyennganh.khachhang where Email= '".$_SESSION['dangnhap']['Email']."' group by Email";     
            return $this->qSelect($query);
    }
    public function getGioHang(){    
        $query = "select * from qldoanchuyennganh.giohang";     
        return $this->qSelect($query);
    }

    public function TaoDonHangTTKH($MaSP,$MaKH,$Email,$soluong,$TongTien,$date){       
        $query = "insert into qldoanchuyennganh.HOADON(IdSP,IdKH,Email,SoLuong,TongTien,Ngaydat) 
        values ('".$MaSP."','".$MaKH."','".$Email."',".$soluong.",".$TongTien.",'".$date."')";
        // var_dump($query);die();
        return $this->qInsert($query);
    }
    public function CapNhatSPVuaDat($MaSP){    
        $query = "update qldoanchuyennganh.sanpham AS sp SET sp.SL = sp.SL - 
            (SELECT SUM(hd.SoLuong) FROM qldoanchuyennganh.hoadon AS hd 
            WHERE hd.IdSP = sp.IdSP)WHERE sp.IdSP = '".$MaSP."'";
        // var_dump($query);die();
            return $this->qUpdate($query,true);
        }
}