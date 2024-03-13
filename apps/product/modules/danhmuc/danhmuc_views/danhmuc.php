<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>
        body {

            margin: 0 ;
            width: 100%;
            height: 100%;
        }
        #menu{
        margin: 0;
        padding: 0;
        font-weight: 900;
}
#menu ul {
   background-color: rgb(69, 69, 227); 
    list-style-type: none;
    text-align: center;
    background-image: linear-gradient(to bottom,rgb(69, 69, 227),white);
}
#menu li {
    display: inline-block;
    width: 200px;
    height: 40px;
    line-height: 40px;
    position: relative;
}
#menu ul li a {
    text-decoration: none;
    color: black;
    display: block;
}
#menu ul li a:hover {
    background:white;
    color: black;
}
.sub-menu {
    display: none;
    position: absolute;   
}
#menu ul li>.sub-menu {
    display: none;
    position: absolute;
}
#menu ul li:hover .sub-menu {
    display: block;
  z-index: 1;
    /*menu con*/
    /*Ẩn các menu con cấp 1,2,3*/
}
.trenhinh img {
    width: 100%;
    height: 100px;
}
.thucdon {
    width: 100%;
    height: 100px;
    background-color: black;
}
.lienhe {
    font-family: 'Times New Roman', Times, serif;
    font-size: 15px;
    width: 242px;
    height: 302px;
    color: white;
    background-color: #333;
    margin: 0;
    padding: 0;
    margin-bottom: -20px;
    padding-bottom: 12px;
    padding: 0 10px;
}
.lienhe p {
    margin-bottom: -10px;
}

.gioithieusp {
    width: 100%;
    height: 160px;
    background-color: white;
    text-align: left;
    font-size: 16px;
    padding-left: 60px;
    padding-top: 10px;
}
.gioithieusp h3 {
    text-align: center;
}
.aoban {
    width: 100%;
    height: 250px;
}
.gia {
    width: 20%;
    height: 110%;
    background-color: white;
    float: left;
    padding: 2px 0;
}
.gia img {
    width: 100%;
    height: 200px;
    padding: 1px;
}
.gia a {
    color: red;
    height: 100%;
}
.khoangtrangduoi {
    width: 100%;
    height: 40px;
    padding-top: 20px;
}
.cuoi {
    width: 100%;
    height: 130px;
    background-color: darkblue;
}
.chinhsach {
    width: 25%;
    height: 130px;
    float: left;
    color: white;
    border: 1px solid yellow;
}
.free {
    width: 25%;
    height: 130px;
    padding-top: 50px;
    padding-left: 5px;
    float: left;
}
.vdgt{
    width: 100%;
    height:300px;
    background-color: aquamarine;
}
.vdgt p{
    color: blue;
    font-size:16px ;
    font-weight: bold;
    text-align: center;
}
    </style>
</head>
<body>
        <div id="menu">
            <ul>
                <li><a href="">Trang Chủ</a></li>
                <li><a href="#">Trang Điểm</a>
                    <ul class="sub-menu">
                        <li><a href="">abc</a></li>
                        <li><a href="">cbdshj</a></li>
                        <li><a href="">hjvcige</a></li>
                    </ul>
                </li>
                <li><a href="">Chăm sóc da mặt</a>
                    <ul class="sub-menu">
                        <li><a href="">dfvbjk</a></li>
                        <li><a href="">djkgbvi</a></li>
                        <li><a href="">dvkf</a></li>
                        <li><a href="">bfkxhv</a></li>
                    </ul>
                </li>
                <li><a href="#">Chăm sóc cơ thể</a>
                    <ul class="sub-menu">
                        <li><a href="">gvegv</a></li>
                        <li><a href="">sfbvdf</a></li>
                    </ul>
                </li>
                <li><a href="">Chăm sóc tóc & da đầu</a></li>
                <ul class="sub-menu">
                        <li><a href="">gvegv</a></li>
                        <li><a href="">sfbvdf</a></li>
                    </ul>
                <li><a href="">Nước hoa</a></li>
                <ul class="sub-menu">
                        <li><a href="">gvegv</a></li>
                        <li><a href="">sfbvdf</a></li>
                    </ul>
                <li><a href="">Thiết bị làm đẹp</a></li>
                <ul class="sub-menu">
                        <li><a href="">gvegv</a></li>
                        <li><a href="">sfbvdf</a></li>
                    </ul>
            </ul>
        </div>
        <div class=" gioithieusp">
            <p><h3>Giới Thiệu Sản Phẩm</h3></p>
            <p><h3>SẢN PHẨM CHĂM SÓC PHÁI ĐẸP CHÍNH HÃNG MỚI NHẤT 2024</h3></p>
            <p> </p>
            <p> </p>
            <p> </p>
           <p> ★ Giao hàng tận nơi, kiểm tra hàng mới thanh toán</p>
        </div>
        <div class="aoban">
            <div class="gia">
               <a href=""><img src=""></a>
                <p>Son abc</p>
                <p><a>Giá:630.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""><img src=""></a>
                <p>Son</p>
                <p><a>Giá:625.000đ</a></p>
    
            </div>
            <div class="gia">
                <a href=""><img src=""></a>
                <p>Son</p>
                <p><a>Giá:310.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""> <img src=""></a>
                <p>Son</p>
                <p><a>Giá:510.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""> <img src=""></a>
                <p>Son</p>
                <p><a>Giá:610.000đ</a></p>
            </div>
            
            </div>
            <div class="khoangtrang1">
    
            </div>
            <div class="aoban">
            <div class="gia">
               <a href=""><img src=""></a>
                <p>Son abc</p>
                <p><a>Giá:630.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""><img src=""></a>
                <p>Son</p>
                <p><a>Giá:625.000đ</a></p>
    
            </div>
            <div class="gia">
                <a href=""><img src=""></a>
                <p>Son</p>
                <p><a>Giá:310.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""> <img src=""></a>
                <p>Son</p>
                <p><a>Giá:510.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""> <img src=""></a>
                <p>Son</p>
                <p><a>Giá:610.000đ</a></p>
            </div>
            
            </div>
            <div class="khoangtrang1">
                
            </div>
            <div class="aoban">
            <div class="gia">
               <a href=""><img src=""></a>
                <p>Son abc</p>
                <p><a>Giá:630.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""><img src=""></a>
                <p>Son</p>
                <p><a>Giá:625.000đ</a></p>
    
            </div>
            <div class="gia">
                <a href=""><img src=""></a>
                <p>Son</p>
                <p><a>Giá:310.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""> <img src=""></a>
                <p>Son</p>
                <p><a>Giá:510.000đ</a></p>
            </div>
            <div class="gia">
                <a href=""> <img src=""></a>
                <p>Son</p>
                <p><a>Giá:610.000đ</a></p>
            </div>
            
            </div>
        <div class="khoangtrangduoi">
            <marquee behavior="" direction="">
                <h5> Cảm ơn bạn đã quan tâm đến sản phẩm của Shop! Chúc bạn Thành Công và Mạnh Khỏe! Nếu có
                    thắc mắc *Liên hệ: 0392291028(Uyên) & 0838070362(Chấn) hoặc Fanpage. Để được hỗ trợ tốt
                    hơn! Một lần nữa sShop xin chân thành Cảm Ơn Bạn!</h5>
            </marquee>
        </div>

        <div class="cuoi">
            <div class="chinhsach">
                <div class="free">
                    <h3>FREE</h3>
                </div>
                <h4 style="padding-top: 40px;">Giao Hàng Miễn Phí</h4>
                <p></p>
                <p></p>
                <br>

                <p>Với Đơn hàng trên 500k</p>

            </div>
            <div class="chinhsach">
                <div class="free">
                    <h3>FREE</h3>
                </div>
                <h4 style="padding-top: 40px;">Thanh Toán Tiện Lợi</h4>
                <p></p>
                <p></p>
                <br>
                <p>Tích hợp nhiều kênh thanh toán</p>

            </div>
            <div class="chinhsach">
                <div class="free">
                    <h3>FREE</h3>
                </div>
                <h4 style="padding-top: 40px;">Chính Sách Đổi Trả</h4>
                <p></p>
                <p></p>
                <br>

                <p>Nếu sản phẩm lỗi hoặc khách đổi size</p>

            </div>
            <div class="chinhsach">
                <div class="free">
                    <h3>FREE</h3>
                </div>
                <h4 style="padding-top: 40px;">Chăm Sóc Khách Hàng</h4>
                <p></p>
                <p></p>
                <br>

                <p>Tư vấn và hỗ trợ nhiệt tình nhất</p>

            </div>
        </div>

</div></body>

</html>
