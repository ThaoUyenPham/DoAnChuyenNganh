
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
                        <a href=""><img src="<?php echo SITE_ROOT_IMG.$pro['Hinh'];?>"></a>
                        <p><?php echo $pro['Tieude']?></p>
                        <p><a><?php echo $pro['Gia']?></a></p>                          
                    </div>
                <?php }}?>            
            </div>
           
                <div class="khoangtrang1">
        
                </div>
                <ul class="pagination">
                    <li><a href="?per_page=5&page=1">1</a></li>
                    <li><a href="?per_page=5&page=2">2</a></li>
                    <li><a href="?per_page=5&page=3">3</a></li>
                    <!-- <li><a href="?per_page=4&page=4">4</a></li>
                    <li><a href="?per_page=4&page=5">5</a></li>
                    <li><a href="?per_page=4&page=6">6</a></li>
                    <li><a href="?per_page=4&page=7">7</a></li>
                    <li><a href="?per_page=4&page=8">8</a></li> -->
                                
                </ul>
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
    let user=[];
    let currentPage=1
    let perPage=2
    let totalPage=user.length/2
    let perUsesr=[]
    function OpenTab(evt, productName) {
        var i, TabContentX,TabContentQL, tablinks;
        TabContentX = document.getElementsByClassName("TabContentX");
        TabContentQL = document.getElementsByClassName("TabContentQL");
 
        for (i = 0; i < TabContentX.length; i++) {
            TabContentX[i].style.display = "none";
        }
        for (i = 0; i < TabContentQL.length; i++) {
            TabContentQL[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(productName).style.display = "block";
        evt.currentTarget.className += " active";
        }
</script>