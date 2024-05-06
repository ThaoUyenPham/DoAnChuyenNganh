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
                    
                     <?php if(count($products) > 0){ 
                        foreach($products as $pro){?>
                        <input type="hidden" id="IdSP" value="<?php echo $IdSP; ?>">
                        <input type="hidden" id="Tieude" value="<?php echo $pro['Tieude']; ?>"><!--gọi TenSP trong sql ra (TenSP) phải trùng khớp với TenSP trong table sanpham-->
                        <input type="hidden" id="gia" val="<?php echo ($pro['Gia'])?>" value="<?php echo number_format($pro['Gia'],0)?>">
                        <input type="hidden" id="Hinh" value="<?php echo $pro['Hinh']; ?>">
                        
                        <div class="hinhlon">
                           <img id="Hinh" src="<?php echo SITE_ROOT_IMG.$pro['Hinh'];?>">
                        </div>
                        <!-- <div class="hinhnho">
                           <div class="nho"> <img src="./ảnh/man-city-cam.jpg"></div>
                           <div class="nho"> <img src="./ảnh/mu-trang-22-640x640.jpg"></div>
                           <div class="nho"> <img src="./ảnh/tottenham-23.jpg"></div>
                           <div class="nho"> <img src="./ảnh/liverpool-trang-xanh-jp.jpg"></div>
                        </div> -->
                        <?php }}?>
                     </div>
                     <form action="" name="muahang" id="muahang" method="post">
                        <?php if(count($products) > 0){ 
                           foreach($products as $pro){?>
                        <div class="thanhtoan">  
                           <h2 id="tenSP"><?php echo $pro['Tieude']?></h2>
                           <br>
                           <p style="color: gray;"><b>Giá tốt nhất so với các sản phẩm cùng loại trên Shop!</b></p>
                           <br>
                           <h4>Giá gốc:<del><?php echo number_format($pro['Gia'],0).'đ'?></del></h4>
                              <br>
                              <p>Vận Chuyển: <a>Miễn phí <i class="fa-solid fa-truck"></i></a></p>
                              <br>
                              <p>Số lượng:</p>
                              <div class="productInfo_input">
                                        <div class="productInfo_block">
                                            <div class="quanity_product" id="buy-amount">
                                                <input type="number" id="amount" min="1" max="10" value="1">
                                            </div>
                                        </div>
                              </div>                              
                              <a style="font-size: 15px;color: gray;">Số lượng sản phẩm có sẵn: <?php echo $pro['SL']?> </a>
                              <br>
                              <br>
                              <p class = "nhap"style="padding-left: 30px;">
                              <button id="btn_cart" type="submit" style="border-color: rgb(69, 69, 227);color: rgb(69, 69, 227);">Thêm giỏ hàng</button>
                              <!-- &nbsp;&nbsp;&nbsp; -->
                              <button type="button" style=" background-color: rgb(69, 69, 227);
                              color: white;">Mua hàng</button>
                              </p>
                           <?php }}?>
                        </div>
                     </form>  
                  </div>
                  <div class="mota">
                           <!-- <h3 style="text-align: center;">Mô tả sản phẩm</h3> -->
                     <h4>THÔNG TIN SẢN PHẨM</h4><br>
                     <p>- 100% hàng chính hãng từ thương hiệu THEGIOSKINFOOD.</p>
                     <br>
                     <p>- Hình ảnh sản phẩm là ảnh thật do shop tự chụp.</p>
                     <br>
                     <p>- Đảm bảo vải chất lượng, được chọn lọc kỹ lưỡng.</p>
                     <br>
                     <p>- Sản phẩm được kiểm tra kỹ càng, 
                     cẩn thận và tư vấn nhiệt tình trước khi gói hàng.</p>
                     <br>
                     <p>- Cam kết sản phẩm giống với mô tả.</p>
                     <br>
                     <p> - Giao hàng trên toàn quốc</p>
                     <br>
                     <h4>CHÍNH SÁCH ĐỔI TRẢ</h4>
                     <br>
                     <p>- Miễn phí đổi hàng cho khách hàng trong trường hợp bị lỗi từ nhà sản xuất, 
                     giao nhầm hàng, bị hư hỏng trong quá trình vận chuyển hàng.</p> 
                     <br>
                     <p>- Khi mở sản phẩm anh chị vui lòng quay lại video quá trình mở sản phẩm 
                        để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.</p>
                        <br>
                     <p>- Sản phẩm đổi phải còn nguyên tem mác và chưa qua sử dụng/ giặt.</p>
                     <br>
                     <p>- Sản phẩm đổi trong thời gian 7 ngày kể từ ngày nhận hàng.</p>
                     <br>
                     <p>Mọi thắc mắc khách hàng vui lòng inbox trực tiếp để được hỗ trợ.</p>
                  </div>
               </div>              
            </div>
      </div>
   </div>
</div>
<?php $this->template->display('footer.php'); ?>
</body>
</html>
<script>
    $('#btn_cart').click(function(){ //khi nhấn vào giỏ hàng
        var IdSP = $('#IdSP').val();
        var Tieude = $('#Tieude').val();
        var amount = $('#amount').val();
        var Gia = $('#gia').val();
        Gia = Number(Gia.replace(/,/g, ""));
        var Hinh = $('#Hinh').val();
        // console.log(color);
        $.ajax('/product/chitietsanpham/saveCartProduct',{   
            type: 'POST',  // http method
            data: { 
                'IdSP': IdSP,
                'Tieude': Tieude,
                'amount': amount,
                'Gia': Gia,
                'Hinh': Hinh,
                
            },  // data to submit
            success: function (data, status, xhr) {
               // if(data==1)
                  alert("Thêm giỏ hàng thành công");
               // else
               //    alert("Thêm giỏ hàng không thành công");
            //  alert(data);
            }

        });
    });
</script>