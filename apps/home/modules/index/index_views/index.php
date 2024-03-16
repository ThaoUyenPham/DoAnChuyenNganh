
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
        'public/css/cssTrangChu' => ['cache' => true]
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
                <div class="SwiperSilder">                     
                        <img src="tttl/img/anhbia.webp" style="width:100%">
                </div>
                <div class="container">
                    <div class="category_content">
                    <div class="category">
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-search.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Danh mục</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-money.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Flash Sale</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-gift.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Quà tặng</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-bear.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Quà tặng 8/3</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-flashsale.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Khuyến mãi</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-love.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Bán chạy</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-cart.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Giỏ hàng</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-star.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>Hàng mới về</span>
                        </div>
                        <div class="item_category">
                            <div class="img_category">
                                <span>
                                   <a href=""><img src="<?php echo SITE_ROOT_IMG;?>tttl/img/item-cup.webp" alt=""></a> 
                                </span>
                            </div>
                            <span>TGSKF</span>
                        </div>
                    </div>
                    </div>
                    <h4>FLASH SALE GIÁ DƯỚI 300K</h4>
                    <div class="slide-product">
                        
                        <div class="container-fluid">
                            <div class="row-product">
                                <div class="product_col">
                                    <?php if(count($sale) > 0){ 
                                    foreach($sale as $sl){
                                    ?>
                                    <div class="product_item">
                                        <div class="product_img">
                                            <a href="#">
                                                <img src="<?php echo SITE_ROOT_IMG.$sl['Hinh'];?>" onclick="xemChiTiet('<?php echo $pro['MaSP']?>')">
                                            </a>
                                        </div>
                                        <div class="product_text">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>                                            
                                            <div class="product_front">
                                                <p><?php echo $sl['Tieude']?></p>
                                            </div>
                                            <span>
                                                <p style="color:#b50014;font-weight:bold;float:left"><?php echo number_format($sl['Gia'],0)?>   -    </p>                             
                                                <p style="color:#b50014;font-weight:bold"><?php echo number_format($sl['KhuyenMai'],0).'đ'?></p>
                                            </span>
                                                
                                        </div>                                                            
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="brandlist">
                        <div class="brandleft">
                            <a href=""><img src="tttl/img/banner1.webp" alt="" style="width:100%;height:100%"></a>
                        </div>
                        <div class="brandright">
                            <h3>THƯƠNG HIỆU NỔI BẬT</h3>
                        <div class="row-product_brand">
                            <?php if(count($thuonghieu) > 0){ 
                                            foreach($thuonghieu as $th){
                            ?>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                            <img src="<?php echo SITE_ROOT_IMG.$th['Hinh'];?>" onclick="xemChiTiet('<?php echo $pro['MaSP']?>')">
                                            </a>
                                        </div>

                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p><?php echo $th['Tieude']?></p>
                                            </div>
                                        <span>
                                            <p style="color:#b50014;font-weight:bold;float:left"><?php echo number_format($th['Gia'],0)?></p>                             
                                            <!-- <p style="color:#b50014;font-weight:bold"><?php echo number_format($th['KhuyenMai'],0).'đ'?></p> -->
                                        </span>
                                        </div>                                                            
                                    </div>
                                </div>
                                <?php }}?>
                                <!-- <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div>
                                <div class="product_col_brand">
                                    <div class="product_item_brand">
                                        <div class="product_img_brand">
                                            <a href="#">
                                                <img src="tttl/img/son1.webp">
                                            </a>
                                        </div>
                                        <div class="product_text_brand">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front_brand">
                                                <p>[PHIÊN BẢN V6 SIREN HOLIDAY] Son Kem Lì, Bền Màu, Lâu Trôi Merzy The First Velvet Tint 4.5g</p>
                                            </div>
                                            <p class="brand-price"><b>123.11</b></p>
                                        </div>                                                            
                                    </div>
                                </div> -->
                            </div>
                            <ul class="pagination">
                                    <li><a href="?per_page=4&page=1">1</a></li>
                                    <li><a href="?per_page=4&page=2">2</a></li>
                                    <li><a href="?per_page=4&page=3">3</a></li>
                                    <li><a href="?per_page=4&page=4">4</a></li>
                                    <li><a href="?per_page=4&page=5">5</a></li>
                                    <li><a href="?per_page=4&page=6">6</a></li>
                                    <li><a href="?per_page=4&page=7">7</a></li>
                                
                                </ul>
                        </div>
                        
                    </div>
                    <h4>CHĂM SÓC DA</h4>
                    <div class="slide-product">
                        <div class="containerr-fluid">
                            <div class="row-product">
                            <div class="product_col">
                                <?php if(count($products) > 0){ 
                                   foreach($products as $pro){
                                 ?>
                                <div class="product_item">
                                    <div class="product_img">
                                        <a href="#">
                                            <img src="<?php echo SITE_ROOT_IMG.$pro['Hinh'];?>" onclick="xemChiTiet('<?php echo $pro['MaSP']?>')">
                                        </a>
                                    </div>
                                    <div class="product_text">
                                        <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                        </div>
                                        <div class="product_front">
                                            <p><?php echo $pro['Tieude']?></p>
                                        </div>
                                        <span>
                                            <p style="color:#b50014;font-weight:bold;float:left"><?php echo number_format($sl['Gia'],0)?>   -    </p>                             
                                            <p style="color:#b50014;font-weight:bold"><?php echo number_format($sl['KhuyenMai'],0).'đ'?></p>
                                        </span>
                                    </div>                                                            
                                </div>
                                <?php } } ?>
                            </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="container">
                    <h4>SỰ KIỆN HOT</h4>
                    <div class="index-hotdeal-products">
                         <div class="index-hotdeal-list owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="index-hotdeal-item">
                                    <div class="index-hotdeal-item-wrap">
                                        <a href=""><img src="tttl/img/img-hone-hot.webp" alt=""></a>
                                        <div class="index-hotdeal-item-products collection-crumb">
                                        <?php if(count($saleNuocTT) > 0){ 
                                            foreach($saleNuocTT as $slNc){
                                        ?>
                                            <div class="proLoop relative changeimage">
                                                <div class="proLoop-wrap">
                                                    <div class="productImg">
                                                        <a href=""><img src="<?php echo SITE_ROOT_IMG.$slNc['Hinh']?>" alt=""></a>
                                                    </div>
                                                    <div class="proLoop-wrap-info">
                                                        <div class="proLoops">
                                                            <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                            <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                                        </div>
                                                        <div class="product_front_brand">
                                                            <p><?php echo $slNc['Tieude']?></p>
                                                        </div>
                                                        <span>
                                                            <p style="color:#b50014;font-weight:bold;float:left"><?php echo number_format($slNc['Gia'],0)?>   -    </p>                             
                                                            <p style="color:#b50014;font-weight:bold"><?php echo number_format($slNc['KhuyenMai'],0).'đ'?></p>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        <?php }}?>
                                        </div>
                                    </div>
                                </div>
                                <div class="index-hotdeal-item">
                                    <div class="index-hotdeal-item-wrap">
                                        <a href=""><img src="tttl/img/img-home-hot2.webp" alt=""></a>
                                        <div class="index-hotdeal-item-products collection-crumb">
                                        <?php if(count($saleSon) > 0){ 
                                            foreach($saleSon as $slS){
                                        ?>
                                            <div class="proLoop relative changeimage">
                                                <div class="proLoop-wrap">
                                                    <div class="productImg">
                                                        <a href=""><img src="<?php echo SITE_ROOT_IMG.$slS['Hinh']?>" alt=""></a>
                                                    </div>
                                                    <div class="proLoop-wrap-info">
                                                        <div class="proLoops">
                                                            <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                            <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                                        </div>
                                                        <div class="product_front_brand">
                                                            <p><?php echo $slS['Tieude']?></p>
                                                        </div>
                                                        <span>
                                                            <p style="color:#b50014;font-weight:bold;float:left"><?php echo number_format($slS['Gia'],0)?>   -    </p>                             
                                                            <p style="color:#b50014;font-weight:bold"><?php echo number_format($slS['KhuyenMai'],0).'đ'?></p>
                                                        </span>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        <?php }}?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>           
                    </div>
                </div>
                <div class="container" style="margin-top:20px">
                <h4>CHĂM SÓC TÓC</h4>
                    <div class="slide-product">
                        <div class="containerr-fluid">
                            <div class="row-productt">                               
                                <div class="product_col">
                                    <?php if(count($hair) > 0){ 
                                    foreach($hair as $hair){
                                    ?>
                                    <div class="product_item">
                                        <div class="product_img">
                                            <a href="#">
                                                <img src="<?php echo SITE_ROOT_IMG.$hair['Hinh'];?>" onclick="xemChiTiet('<?php echo $pro['MaSP']?>')">
                                            </a>
                                        </div>
                                        <div class="product_text">
                                            <div class="proLoops">
                                                <span class="proLoop-label-freeship" style="background-color:#002351">FREESHIP TQ</span>
                                                <span class="proLoop-label-freeship" style="background-color:#b50014">BEST</span>
                                            </div>
                                            <div class="product_front">
                                                <p><?php echo $hair['Tieude']?></p>
                                            </div>
                                            <span>
                                                <p style="color:#b50014;font-weight:bold;float:left"><?php echo number_format($hair['Gia'],0)?></p>
                                            </span>                                        
                                        </div>                                                            
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
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
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>