create schema qldoanchuyennganh;
-- KHÁCH HÀNG
-- DANH MỤC
create table qldoanchuyennganh.DanhMuc(
IdDM int AUTO_INCREMENT,
TenDM nvarchar(100),
Hinh nvarchar(100),
constraint PK_DM primary key (IdDM)
);
-- ctdm
create table qldoanchuyennganh.CTDM(
IdCTDM int AUTO_INCREMENT,
Ten nvarchar(100),
Id_DM int,
constraint PK_CTDM primary key (IdCTDM),
FOREIGN KEY (Id_DM)
  REFERENCES qldoanchuyennganh.DanhMuc(IdDM)
);
-- cttdm
create table qldoanchuyennganh.thongtinCTDM(
IdTTCTDM int AUTO_INCREMENT,
Ten nvarchar(100),
IdCTDM int,
constraint PK_CTDM primary key (IdTTCTDM),
FOREIGN KEY (IdCTDM)
  REFERENCES qldoanchuyennganh.ctdm(IdCTDM)
);
-- SẢN PHẨM
create table qldoanchuyennganh.SanPham(
IdSP int AUTO_INCREMENT,
Tieude nvarchar(350),
SL int,
Gia int,
KhuyenMai int,
Hinh varchar(500),
Mota nvarchar(500),
Id_DM int,
Id_CTDM int,
Id_TTCTDM int,
constraint PK_SP primary key (IdSP),
FOREIGN KEY (Id_TTCTDM) REFERENCES qldoanchuyennganh.thongtinCTDM(IdTTCTDM),
FOREIGN KEY (Id_DM) REFERENCES qldoanchuyennganh.danhmuc(IdDM),
FOREIGN KEY (Id_CTDM) REFERENCES qldoanchuyennganh.ctdm(IdCTDM)
);
CREATE TABLE qldoanchuyennganh.GIOHANG(
MaG int AUTO_INCREMENT,
IdSP int,
Tieude nvarchar(200),
SL int,
Gia int,
KhuyenMai int,
Hinh nvarchar(50),
IPAddress varchar(10),MaKH int,primary key (MaG));


-- qlsp
create table qldoanchuyennganh.QuanLySanPham(
IdQLSP int AUTO_INCREMENT,
Id_SP int,
NgayCapNhat datetime,
Id_Admin int,
constraint PK_QLSP primary key (IdQLSP),
FOREIGN KEY (Id_SP) REFERENCES qldoanchuyennganh.SanPham(IdSP),
  FOREIGN KEY (Id_SP) REFERENCES qldoanchuyennganh.Admin(IdAdmin)
);

create table qldoanchuyennganh.KhachHang(
IdKH int AUTO_INCREMENT,
TenKH nvarchar(200),
Email nvarchar(200),
Sdt varchar(10),
DiaChi nvarchar(500),
Matkhau varchar(32),
constraint PK_KH primary key (IdKH)
);
-- QL HÌNH
create table qldoanchuyennganh.QuanLyHinh(
IdQL int AUTO_INCREMENT,
Id_SP int,
HinhPhu varchar(500),
Id_Loai int,
constraint PK_QLH primary key (IdQL),
FOREIGN KEY (Id_SP)
  REFERENCES qldoanchuyennganh.SanPham(IdSP),
FOREIGN KEY (Id_Loai)
  REFERENCES qldoanchuyennganh.QuanLyLoai(IdLoai)
);

-- QL LOẠI
create table qldoanchuyennganh.QuanLyLoai(
IdLoai int AUTO_INCREMENT,
Id_SP int,
TenLoai nvarchar(200),
constraint PK_L primary key (IdLoai),
FOREIGN KEY (Id_SP)
  REFERENCES qldoanchuyennganh.SanPham(IdSP)
);

-- ĐÁNH GIÁ
create table qldoanchuyennganh.DanhGia(
IdDG int AUTO_INCREMENT,
Noidung nvarchar(350),
Id_SP int,
Id_KH int,
Sao int,
constraint PK_DG primary key (IdDG),
FOREIGN KEY (Id_SP)
  REFERENCES qldoanchuyennganh.sanpham(IdSP),
  FOREIGN KEY (Id_KH)
  REFERENCES qldoanchuyennganh.Khachhang(IdKH)
);



-- gio hang
-- create table qldoanchuyennganh.GioHang(
-- IdGH int,
-- ID_KhachHang int,
-- Gia int,
-- TongGia int,
-- TongGiaKhuyenMai int,
-- constraint PK_GH primary key (IdGH),
-- FOREIGN KEY (ID_KhachHang)
--   REFERENCES qldoanchuyennganh.KhachHang(IdKH)
-- );

-- cthd
create table qldoanchuyennganh.ChiTietHoaDon(
IdCTHD int AUTO_INCREMENT, 
Id_GH int,
Id_SP int,
Gia int,
SoLuong int,
TongTien int,
constraint PK_CTHD primary key (IdCTHD),
FOREIGN KEY (Id_GH)
  REFERENCES qldoanchuyennganh.GioHang(IdGH),
  FOREIGN KEY (Id_SP)
  REFERENCES qldoanchuyennganh.SanPham(IdSP)
);

-- qldh
create table qldoanchuyennganh.QuanLyDonHang(
IdQLDH int AUTO_INCREMENT,
Id_Admin int,
Id_CTHD int,
constraint PK_QLDH primary key (IdQLDH),
FOREIGN KEY (Id_Admin)
  REFERENCES qldoanchuyennganh.Admin(IdAdmin),
FOREIGN KEY (Id_CTHD)
  REFERENCES qldoanchuyennganh.ChiTietHoaDon(IdCTHD)  
);

-- admin
create table qldoanchuyennganh.Admin(
IdAdmin int AUTO_INCREMENT,
Ten nvarchar(200),
Email nvarchar(200),
Sdt varchar(10),
Diachi nvarchar(500),
Matkhau varchar(32),
constraint PK_Admin primary key (IdAdmin)
);


-- nhap du lieu 
	-- danh mục
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Trang Điểm','tttl/img/icon-trangdiem.wepb');
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Chăm sóc da','tttl/img/icon-chamsocdamat.wepb');
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Chăm sóc cơ thể','tttl/img/icon-chamsoccothe.wepb');
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Chăm sóc tóc & da đầu','tttl/img/icon-chamsoctoc.wepb');
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Chăm sóc cá nhân','tttl/img/icon-chamsoccanhan.wepb');
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Nước hoa','tttl/img/icon-nuochoa.wepb');
	insert into qldoanchuyennganh.danhmuc(TenDM,Hinh) values(N'Thiết bị làm đẹp','tttl/img/icon-thietbilamdep.wepb');
	
    -- chi tiết danh mục
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'TRANG ĐIỂM MÔI',1);
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'TRANG ĐIỂM MẮT',1);

	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'QUY TRÌNH DƯỠNG DA',2);
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'GIẢI PHÁP LÀN DA',2);

	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'SỮA TẮM',3);
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'KHỬ MÙI',3);

	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'DẦU GỘI/XẢ',4);
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'DƯỠNG TÓC',4);

	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'CHĂM SÓC PHỤ KHOA',5);
	-- insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'CHĂM SÓC RĂNG MIỆNG',5);

	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'NƯỚC HOA',6);
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'BODY MIST',6);

	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'DỤNG CỤ CHĂM SÓC RĂNG MIỆNG',7);
	insert into qldoanchuyennganh.ctdm(Ten,Id_DM) values(N'DỤNG CỤ CHĂM SÓC MẶT',7);
    
	-- thông tin chi tiết danh mục
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Son dưỡng',1);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Son kem',1);

	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Kẻ chân mày',2);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Phấn mắt',2);

	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Tẩy trang',3);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Sữa rửa mặt',3);

	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Mụn đầu đen',4);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Trị nám',4);

	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Băng vệ sinh',9);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Nước vệ sinh',9);

	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Kem đánh răng',13);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Máy đánh răng',13);

	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Máy xông hơi',14);
	insert into qldoanchuyennganh.thongtinctdm(Ten,IdCTDM) values(N'Mặt nạ',14);
select * from qldoanchuyennganh.sanpham;
	-- san phẩm
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son dưỡng Roman mềm môi',3,100000,90000,'tttl/img/img-sonduong1.webp',1,1,1);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son dưỡng Roman 2 mềm môi',4,120000,80000,'tttl/img/img-sonduong2.webp',1,1,1);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son dưỡng COCOON mềm môi',5,110000,100000,'tttl/img/img-sonduong3.webp',1,1,1);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son dưỡng SENKA mềm môi',8,100000,90000,'tttl/img/img-sonduong4.webp',1,1,1);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son dưỡng Glam mềm môi',3,130000,110000,'tttl/img/img-sonduong5.webp',1,1,1);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem FOIF',9,120000,100000,'tttl/img/img-sonkem1.webp',1,1,2);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem Merzy',10,120000,90000,'tttl/img/img-sonkem2.webp',1,1,2);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem Roman',4,110000,100000,'tttl/img/img-sonkem3.webp',1,1,2);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem rom&nd',2,100000,90000,'tttl/img/img-sonkem4.webp',1,1,2);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem Roman 3 ',1,130000,110000,'tttl/img/img-sonkem5.webp',1,1,2);
    
    -- vừa thêm 10/3
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem Merzy siêu lì ',8,120000,110000,'tttl/img/img-sonkem6.webp',1,1,2);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Son kem Merzy siêu lì ',11,120000,110000,'tttl/img/img-sonkem6.webp',1,1,2);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kẻ chân mày nâu',4,90000,80000,'tttl/img/img-kechanmay1.webp',1,2,3);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kẻ chân mày color mate',5,90000,80000,'tttl/img/img-kechanmay2.webp',1,2,3);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kẻ chân mày rom&nd',5,80000,30000,'tttl/img/img-kechanmay3.webp',1,2,3);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kẻ chân mày Merzy',7,80000,60000,'tttl/img/img-kechanmay4.webp',1,2,3);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kẻ chân mày the SREM',7,100000,80000,'tttl/img/img-kechanmay5.webp',1,2,3);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Phấn mắt rom&nd',6,100000,80000,'tttl/img/img-phanmat1.webp',1,2,4);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Phấn mắt lấp lánh ZEESEA',9,110000,100000,'tttl/img/img-phanmat2.webp',1,2,4);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Phấn mắt rom&nd trái tim',4,120000,110000,'tttl/img/img-phanmat3.webp',1,2,4);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Phấn mắt trái cây',5,99000,89000,'tttl/img/img-phanmat4.webp',1,2,4);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Phấn mắt 3CE',6,100000,80000,'tttl/img/img-phanmat5.webp',1,2,4);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Nước tẩy trang LOREAL',6,180000,150000,'tttl/img/img-taytrang1.webp',2,3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Bông tẩy trang',5,80000,75000,'tttl/img/img-taytrang2.webp',2,3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Nước tẩy trang GARNIOR',4,180000,150000,'tttl/img/img-taytrang3.webp',2,3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Nước tẩy trang LOREAL mẫu mới',6,180000,150000,'tttl/img/img-taytrang4.webp',2,3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Nước tẩy trang BYPHASSE',4,190000,'tttl/img/img-taytrang5.webp',2,3,5);
	


	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Sữa rửa mặt SVR',4,190000,170000,'tttl/img/img-suaruamat1.webp',2,3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Sữa rửa mặt COSRX',2,170000,'tttl/img/img-suaruamat2.webp',2,3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Sữa rửa mặt Euceriri',7,190000,'tttl/img/img-suaruamat3.webp',2,3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Sữa rửa mặt SEKA',8,1750000,170000,'tttl/img/img-suaruamat4.webp',2,3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Sữa rửa mặt CENTELLA',8,190000,170000,'tttl/img/img-suaruamat5.webp',2,3,6);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Mụn đầu đen ',8,190000,170000,'tttl/img/img-mundauden1.webp',2,4,7);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Mụn đầu đen ACNESS',8,170000,'tttl/img/img-mundauden2.webp',2,4,7);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Mụn đầu đen SOMEBYMI',8,130000,110000,'tttl/img/img-mundauden3.webp',2,4,7);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Mụn đầu đen LAROCHE - POSAY',8,190000,170000,'tttl/img/img-mundauden4.webp',2,4,7);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Mụn đầu đen IT CLEAN',8,190000,'tttl/img/img-mundauden5.webp',2,4,7);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum giúp mờ nám Klairs',8,190000,'tttl/img/img-trinam1.webp',2,4,8);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum giúp mờ nám GARNIER',5,180000,'tttl/img/img-trinam2.webp',2,4,8);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum giúp mờ nám hàng mới',8,190000,'tttl/img/img-trinam3.webp',2,4,8);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum giúp mờ nám G9SKIN',0,120000,'tttl/img/img-trinam4.webp',2,4,8);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum giúp mờ nám VICHY',5,190000,'tttl/img/img-trinam5.webp',2,4,8);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Sữa tắm CoCoon',7,210000,200000,'tttl/img/img-suatam1.webp',3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Sữa tắm Cornine',3,210000,200000,'tttl/img/img-suatam2.webp',3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Sữa tắm OLAY mềm da',5,250000,210000,'tttl/img/img-suatam3.webp',3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM) values(N'Sữa tắm VENUS',3,210000,'tttl/img/img-suatam4.webp',3,5);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Sữa tắm nước hoa thơm mát',4,210000,200000,'tttl/img/img-suatam5.webp',3,5);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM) values(N'Serum khử mùi',4,150000,'tttl/img/img-khumui1.webp',3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Lăn khử mùi mẫu mới',4,120000,100000,'tttl/img/img-khumui2.webp',3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Lăn khử mùi NIVEA',4,150000,110000,'tttl/img/img-khumui3.webp',3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM) values(N'Lăn khử mùi Oli nắp đỏ',4,160000,140000,'tttl/img/img-khumui4.webp',3,6);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM) values(N'Lăn khử mùi EtiaXil',4,150000,'tttl/img/img-khumui1.webp',3,6);

	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Dầu gội nhật bản nắp vàng mượt tóc, mọc tóc',4,210000,'tttl/img/img-daugoi1.webp',4,7);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Dầu gội nhật bản HAIRBURST',6,200000,'tttl/img/img-daugoi2.webp',4,7);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Dầu gội nhật bản TSUBAKI',6,250000,'tttl/img/img-daugoi3.webp',4,7);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Dầu gội CoCoon bưởi kích thích mọc tóc',6,199000,'tttl/img/img-daugoi4.webp',4,7);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Dầu gội nhật TSUBAKI nhật bản',6,210000,'tttl/img/img-daugoi5.webp',4,7);

	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Chai xịt dưỡng tóc giúp kích thích mọc tóc',6,90000,'tttl/img/img-duongtoc1.webp',4,8);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Serum dưỡng tóc giúp kích thích mọc tóc',6,90000,'tttl/img/img-duongtoc2.webp',4,8);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Chai xịt dưỡng tóc TSUBAKI giúp kích thích mọc tóc',6,70000,'tttl/img/img-duongtoc3.webp',4,8);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Chai xịt dưỡng tóc CoCoon giúp kích thích mọc tóc',6,50000,'tttl/img/img-duongtoc4.webp',4,8);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia, Hinh,Id_DM,Id_CTDM) values(N'Serum dưỡng tóc LOREAL giúp kích thích mọc tóc',6,210000,'tttl/img/img-duongtoc5.webp',4,8);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kem đánh răng hàn quốc',6,110000,'tttl/img/img-kemdanhrang1.webp',5,13,9);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kem đánh răng hàn quốc hàng mới',6,110000,'tttl/img/img-kemdanhrang2.webp',5,13,9);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kem đánh răng sensitive',6,100000,'tttl/img/img-kemdanhrang3.webp',5,13,9);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kem đánh răng hàn quốc',6,110000,'tttl/img/img-kemdanhrang4.webp',5,13,9);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Kem đánh răng EUCRYL trắng răng',6,110000,'tttl/img/img-kemdanhrang5.webp',5,13,9);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy đánh răng lông mềm mịn',6,1110000,'tttl/img/img-maydanhrang1.webp',5,13,10);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy đánh răng trắng hàng mới lông mềm',6,1210000,'tttl/img/img-maydanhrang2.webp',5,13,10);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy đánh răng LUXURY lông mềm mịn',6,1410000,'tttl/img/img-maydanhrang3.webp',5,13,10);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy đánh răng DR BEL lông mềm mịn',6,1610000,'tttl/img/img-maydanhrang4.webp',5,13,10);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy đánh răng UXEMOX lông mềm mịn',6,1910000,'tttl/img/img-maydanhrang5.webp',5,13,10);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy chăm sóc da FOREO',6,191000,'tttl/img/img-maychamsocda1.webp',7,14,11);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy chăm sóc da bao bì trong suốt',5,190000,'tttl/img/img-maychamsocda2.webp',7,14,11);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy chăm sóc da thiết bị 4 chức năng',5,187000,'tttl/img/img-maychamsocda3.webp',7,14,11);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy chăm sóc da hàng mới',5,191000,'tttl/img/img-maychamsocda4.webp',7,14,11);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Máy chăm sóc da cầm tay',5,175000,'tttl/img/img-maychamsocda5.webp',7,14,11);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Chai mặt nạ bùn TSURURI',5,175000,'tttl/img/img-matna1.webp',7,14,12);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Hủ mặt nạ bùn BUBBLE PACK',5,170000,'tttl/img/img-matna2.webp',7,14,12);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Hủ mặt nạ Hoa Cúc',5,155000,'tttl/img/img-matna3.webp',7,14,12);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Chai mặt nạ thảo dược',5,105000,'tttl/img/img-matna4.webp',7,14,12);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Hủ mặt nạ bùn CoCoon',5,175000,'tttl/img/img-matna5.webp',7,14,12);

	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Băng vệ sinh Diana cool',5,78000,55000,'tttl/img/img-bangvesinh1.webp',5,9,13);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Băng vệ sinh Kotext ban đêm',5,99000,'tttl/img/img-bangvesinh2.webp',5,9,13);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Băng vệ sinh Slimguard',5,78000,55000,'tttl/img/img-bangvesinh3.webp',5,9,13);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Băng vệ sinh SENSI cool',5,78000,55000,'tttl/img/img-bangvesinh4.webp',5,9,13);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Băng vệ sinh whisper thảo dược',5,78000,'tttl/img/img-bangvesinh5.webp',5,9,13);

	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum dung dịch vệ sinh hàng mới',5,180000,'tttl/img/img-dungdichvesinh1.webp',5,9,14);
	insert into qldoanchuyennganh.sanpham(Tieude, SL,Gia,KhuyenMai, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Nước dung dịch vệ sinh thảo dược',5,160000,150000,'tttl/img/img-dungdichvesinh2.webp',5,9,14);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum dung dịch vệ sinh oải hương',5,190000,'tttl/img/img-dungdichvesinh3.webp',5,9,14);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum dung dịch vệ sinh chiết xuất cây trà trắng',5,150000,'tttl/img/img-dungdichvesinh4.webp',5,9,14);
	insert into qldoanchuyennganh.sanpham(Tieude,SL, Gia, Hinh,Id_DM,Id_CTDM,Id_TTCTDM) values(N'Serum dung dịch vệ sinh dưỡng ẩm',5,180000,'tttl/img/img-dungdichvesinh5.webp',5,9,14);

	-- quản lí hình
	insert into qldoanchuyennganh.quanlyhinh(Id_SP,HinhPhu,Id_Loai) values(1,'tttl/img/img-sonduong1(1).webp,tttl/img/img-sonduong1(2).webp',1);
    -- quản lí loại
    insert into qldoanchuyennganh.quanlyloai(Id_Loai,Id_SP,TenLoai) values(1,1,'Màu Nude');
    insert into qldoanchuyennganh.quanlyloai(Id_Loai,Id_SP,TenLoai) values(1,1,'Màu San Hô');
    -- khách hàng (nhập 3 ng)
    
	-- Admin (nhập 3ng)
    
    -- Giỏ hàng (nhập 3)
-- kết thúc nhập dữ liệu

select * from qldoanchuyennganh.danhmuc where IdDM=1 and TenDM=N'';
select * from qldoanchuyennganh.ctdm where Id_DM=1; 
select * from qldoanchuyennganh.thongtinctdm;
select * from qldoanchuyennganh.sanpham;
select * from qldoanchuyennganh.khachhang;
select * from qldoanchuyennganh.giohang;


select * from qldoanchuyennganh.khachhang where Email='uyen12@gmail.com' and Matkhau='Uyen@123';
insert into qldoanchuyennganh.khachhang(TenKH,Email,Sdt,DiaChi,Matkhau)values('lan','lan12@gmail.com','012345689',N'Mỹ Tho','Lan@123');
select * from qldoanchuyennganh.sanpham where Id_TTCTDM=5;
select distinct IdSP,Tieude,Gia,KhuyenMai,Hinh from qldoanchuyennganh.sanpham sp where Id_CTDM=6 limit 10;
select distinct * from qldoanchuyennganh.sanpham sp where Id_DM=2 limit 10;
select * from qldoanchuyennganh.sanpham;
select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and dm.IdDM=4 limit 5;

select DISTINCT sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.danhmuc dm, qldoanchuyennganh.sanpham sp where dm.IdDM= sp.Id_DM and sp.Tieude like '%Máy rửa mặt%';

select sp.Hinh,Tieude,Gia,KhuyenMai from qldoanchuyennganh.thongtinctdm ttctdm, qldoanchuyennganh.sanpham sp where sp.Id_TTCTDM= ttctdm.IdTTCTDM and sp.KhuyenMai>=90000
and sp.KhuyenMai <=100000 and ttctdm.IdTTCTDM=2 limit 2;