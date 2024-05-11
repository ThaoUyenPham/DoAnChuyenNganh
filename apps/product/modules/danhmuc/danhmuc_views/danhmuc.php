
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
        'public/css/cssDanhMuc' => ['cache' => true]
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
         <div class=" gioithieusp">
                <p><h3>Giới Thiệu Sản Phẩm</h3></p>
                <p><h3>SẢN PHẨM CHĂM SÓC PHÁI ĐẸP CHÍNH HÃNG MỚI NHẤT 2024</h3></p>
            <p> ★ Giao hàng tận nơi, kiểm tra hàng mới thanh toán</p>
            </div>
            
            <div class="aoban">
                <?php if(count($products) > 0){ 
                foreach($products as $pro){?>
                    <div class="gia">
                        <a href="#"><img src="<?php echo SITE_ROOT_IMG.$pro['Hinh'];?>" 
                        onclick="xemChiTiet('<?php echo $pro['IdSP']?>')"></a>
                        <p><?php echo $pro['Tieude']?></p>
                        <p><a><?php echo number_format($pro['Gia'],0).' '.'đ'?></a></p>                          
                    </div>
                <?php }}?>            
            </div>
           
                <div class="khoangtrang1">
        
                </div>
            <div class="khoangtrangduoi">
                <marquee behavior="" direction="">
                    <h5> Cảm ơn bạn đã quan tâm đến sản phẩm của Shop! Chúc bạn Thành Công và Mạnh Khỏe! Nếu có
                        thắc mắc *Liên hệ: 0392291028(Uyên) & 0838070362(Chấn) hoặc Fanpage. Để được hỗ trợ tốt
                        hơn! Một lần nữa sShop xin chân thành Cảm Ơn Bạn!</h5>
                </marquee>
            </div>
         </div>    
    </div>
</div>
</div>
<?php $this->template->display('footer.php'); ?>
</body>
</html>
<script>
    function xemChiTiet(IdSP){
        // $.ajax({
        //     type: "POST",
        //     url: '/product/chitietsanpham',
        //     dataType:"jsonp",
        //     data: {
        //         "id": maSP
        //     },
        //     success: function(response){
                
        //         $( "#result" ).empty().append( response );
        //     }
        // });
        window.open("<?php echo SITE_ROOT ?>product/chitietsanpham?msp="+IdSP, "_top");
    }

</script>