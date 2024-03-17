<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <?php
    
    // var_dump($products); die();
    $context = Context::getContext();
    //luu css va add vao nhu nay, khong goi truc tiep link css hay js tu he thong khac > viec nay tranh viec tan cong tu he thong thu 3 > luu y
    $context->prependStylesheet([
        'public/libs/ionicons/2.0.0/css/ionicons.min' => ['cache' => true],
        'public/libs/font-awesome-4.7.0/css/font-awesome.min' => ['cache' => true],
        'public/libs/bootstrap-3.3.7-dist/css/bootstrap.min' => ['cache' => true],
        'public/css/cssHeaderFooter' => ['cache' => true],
        'public/css/cssChitietsanpham' => ['cache' => true]
    ]);
    echo $context->getEmbedStylesheet();

    $context->prependJavascript([
        'public/libs/bootstrap-3.3.7-dist/js/bootstrap.min' => ['cache' => true],
        'public/libs/jquery/jquery-3.6.min' => ['cache' => true]
    ]);
    echo $context->getEmbedJavascript();
    ?> 
</head>
<body>
<?php $this->template->display('header.php'); ?>
<div class="_trangchu">
   <div class="mainLayout">
      <div class="main">
            <div class="content_main">
               <div class="muahang">
                  <div class="trongmuahang">
                     <div class="hinhmuahang">
                        <div class="hinhlon">
                           <img src="./ảnh/tottenham-23.jpg">
                        </div>
                        <div class="hinhnho">
                           <div class="nho"> <img src="./ảnh/man-city-cam.jpg"></div>
                           <div class="nho"> <img src="./ảnh/mu-trang-22-640x640.jpg"></div>
                           <div class="nho"> <img src="./ảnh/tottenham-23.jpg"></div>
                           <div class="nho"> <img src="./ảnh/liverpool-trang-xanh-jp.jpg"></div>
                        </div>
                     </div>
                     <form action="" name="muahang" id="muahang" method="post" onsubmit="return kiemtra()">
                        <div class="thanhtoan">  
                           <h2>Áo bóng đá CLB Tottenham-2023</h2>
                        <br>
                        <p style="color: gray;"><b>Giá tốt nhất so với các sản phẩm cùng loại trên TC Shop!</b></p>
                        <br>
                        <h4>Giá gốc:<del>150.000đ</del></h4>
                        <h4 style="font-size: 25px;">Giảm còn:110.000đ</h4>
                           <br>
                           <br>
                           <p>Vui lòng chọn size:
                           <select name="size" id="size" >
                           <option value="1">S</option>
                           <option value="1">M</option>
                           <option value="1">L</option>
                           <option value="1">XL</option>
                           <option value="1">XXL</option>
                           </select>
                           </p>
                           <br>
                           <p>Vận Chuyển: <a>Miễn phí <i class="fa-solid fa-truck"></i></a></p>
                           <br>
                           <p>Số lượng: <input type="text" name="sl" id="sl"  placeholder="0" ><a style="font-size: 15px;color: gray;"> 95634 sản phẩm có sẵn</a></p>
                           <br>
                           <br>
                           <p  class = "nhap"style="padding-left: 30px;"><input type="submit" value="Thêm Vào Giỏ Hàng" style="border-color: rgb(69, 69, 227);color: rgb(69, 69, 227);">
                           &nbsp;&nbsp;&nbsp;
                           <input type="button" value="Mua Hàng" style=" background-color: rgb(69, 69, 227);
                           color: white;">
                           </p>
                        </div>
                     </form> 
                     <div class="mota">
                           <h3 style="text-align: center;">Mô tả sản phẩm</h3>
                           <p>ĐẶC TÍNH CỦA BỘ QUẦN ÁO ĐÁ BÓNG NAM – BÓNG ĐÁ NỮ </p>
                              <p>- Chất vải của bộ quần áo thể thao siêu thoáng, thấm hút mồ hôi, độ bền cao, có khả năng cầm màu, giữ dáng rất tốt</p>      
                              <p></p> - Sợi vải mảnh siêu nhẹ, chống nhăn, cấu trúc sợi thấm mồ hôi nhanh, làm lạnh và thoát nhiệt qua bề mặt hiệu quả giúp cơ thể luôn thoáng mát, khử mùi khi vận động
                              <p></p> - Công nghệ dệt đặc biệt giúp bộ quần áo thể thao ngăn chặn tia UV, bảo vệ da trước tia cực tím                   
                              <br><br>
                           <p></p>  ƯU ĐIỂM CỦA BỘ QUẦN ÁO ĐÁ BÓNG NAM – BÓNG ĐÁ NỮ 
                              <p></p> - Thiết kế độc đáo, kiểu dáng thời thượng 
                           <p></p>  - Màu sắc đa dạng từ đơn giản đến nổi bật, cập nhật mẫu thường xuyên                    
                              <p></p> - Size áo theo tiêu chuẩn Việt Nam, vừa vặn, thoải mái
                              <p></p> - Công nghệ in chuyển nhiệt cao cấp sắc nét, không bong, không phai
                              <p></p> - Bộ quần áo thể thaoThích hợp trong mọi hoạt động thể thao, đặc biệt là tập luyện và thi đấu bóng đá, đá banh, đá bóng
                              <p></p> HD GIẶT ỦI BỘ QUẦN ÁO ĐÁ BÓNG NAM – BÓNG ĐÁ NỮ
                           <p></p>  Giặt quần áo mới trước khi mặc, không ngâm sản phẩm quá lâu trong dung dịch có độ tẩy rửa cao, không cho xà phòng, hóa chất trực tiếp lên sản phẩm, không phơi dưới nắng to, ủi đồ ở nhiệt độ trung bình
                              <br><br>
                           <p></p>  CAM KẾT  
                           <p></p>  - Màu sắc và họa tiết sản phẩm chân thật                   
                           <p></p>  - Đường may tỉ mỉ, chắc chắn, bền đẹp                   
                              <p></p> - Chất liệu vải cao cấp, thân thiện với người dùng                   
                           <p></p>  Logo in sắc nét                 
                              <br><br> 
                           <p></p>  BẢNG SIZE               
                           <p></p>  Size S: cao 1m50-1m59 nặng 40-50kg                  
                           <p></p>  Size M: cao 1m60-1m64 nặng 50-57kg               
                              <p></p> Size L: cao 1m65-1m72 nặng 58-65kg                   
                           <p></p>  Size XL: cao 1m73-1m78 nặng 66-73kg                   
                              <br><br>                   
                              <p></p> ⛔️  HƯỚNG DẪN ĐẶT ĐỒ IN TÊN SỐ
                        <p></p>   =>>  Chọn đúng phân loại có ghi + in để được in theo yêu cầu 
                           <p></p>   *  in sau áo  ( Tên + Số + FC ) , Quần in số theo áo
                           <p></p>
                                 * Ghi thông tin in tên số vào phần ghi chú hoặc inbox nội dung cho shop ( inbox shop sẽ xử lý chậm hơn )
                              <p></p>
                           * Mặc đinh font chữ và IN HOA quý khách muốn thay đổi vui lòng ghi rõ hoặc inbox shop.
                              <p></p>
                              ⛔️Liên hệ shop để đặt Đội nhận nhiều ưu đãi nha
                           <p></p>
                              ⛔️ Mọi thắc mắc liên hệ : hotline / zalo : 086.999.8658                   
                              </p>
                     </div> 
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
<?php $this->template->display('footer.php'); ?>
</body>
</html>