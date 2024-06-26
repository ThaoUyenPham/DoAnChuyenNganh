<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $context = Context::getContext();
    //luu css va add vao nhu nay, khong goi truc tiep link css hay js tu he thong khac > viec nay tranh viec tan cong tu he thong thu 3 > luu y
    $context->prependStylesheet([
        'public/libs/ionicons/2.0.0/css/ionicons.min' => ['cache' => true],
        'public/libs/font-awesome-4.7.0/css/font-awesome.min' => ['cache' => true],
        'public/libs/bootstrap-3.3.7-dist/css/bootstrap.min' => ['cache' => true],
        'public/css/cssHeaderFooter' => ['cache' => true],
        'public/css/cssDathang' => ['cache' => true]
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
        <div class="Main">
            <h3>THÔNG TIN KHÁCH HÀNG</h3>
            <div class="formMain">
                <div class="col-infor">
                    <div class="table_infor">
                        <div class="infor_page">
                            <form action="">
                                <table style="width:100%; height:100%">
                                    <tbody>
                                        <?php 
                                            if(count($data) > 0){ 
                                                foreach($data as $data){
                                        ?>
                                        <input type="hidden" id="MaKH" value="<?php echo $data['IdKH']?>"></input>
                                        <tr>
                                            <td class="product_infor">Họ tên</td>
                                            <td class="product_text"><input type="text" id="TenKH" value="<?php echo $data['TenKH']?>"></td>                                             
                                        </tr>
                                        <tr>
                                            <td class="product_infor">Địa chỉ</td>
                                            <td class="product_text"><input type="text" id="DiaChi" value="<?php echo $data['DiaChi']?>"></td>                                             
                                        </tr>
                                        <tr>
                                            <td class="product_infor">Số điện thoại</td>
                                            <td class="product_text"><input type="text" id="Sodienthoai" value="<?php echo $data['Sdt']?>"></td>                                             
                                        </tr>
                                        <tr>
                                            <td class="product_infor">Email</td>
                                            <td class="product_text"><input type="email" name="to" required id="Email" value="<?php echo $data['Email']?>"></td>                                             
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                </table>   
                            </form>
                        </div>        
                    </div>
                </div>
                <h3>THÔNG TIN ĐƠN HÀNG</h3>
                <form action="" method="post"> 
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="headerTable">Mã SP</th>
                                                <th class="headerTable">Hình ảnh</th>
                                                <th class="headerTable">Sản phẩm</th>
                                                <th class="headerTable">Giá</th>
                                                <th class="headerTable">Số lượng</th>
                                                <th class="headerTable">Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(count($cart)>0){ 
                                                // error_reporting (E_ALL ^ E_NOTICE);
                                                            $tong=0; 
                                                            $tongsl=0;
                                                            foreach($cart as $cart){
                                                            
                                                            // var_dump($pro['MaG']);die();
                                                            $tt=$cart['Gia']*$cart['SL'];
                                                            $tong+=$tt;      

                                                            $tsl=$tt/$cart['Gia'];       
                                                            $tongsl+= $tsl;            
                                            ?>
                                            <tr>
                                            
                                                <input type="hidden" id="maSP" value="<?php echo $cart['IdSP']; ?>">
                                                <input type="hidden" id="MaG" value="<?php echo $cart['IdG']; ?>">
                                                <input type="hidden" id="Hinh" value="<?php echo $cart['Hinh']; ?>">
                                                <input type="hidden" id="TenSP" value="<?php echo $cart['Tieude']; ?>">
                                                <input type="hidden" id="Gia" value="<?php echo $cart['Gia']; ?>">
                             

                                                <td class="product_id" val="<?php echo $cart['IdSP']?>"><?php echo $cart['IdSP']?></td>
                                                <td class="product_thumb" ><img src="<?php echo SITE_ROOT_IMG.$cart['Hinh']?>" alt=""></td>
                                                <td class="product_name" val="<?php echo $cart['Tieude']?>"><?php echo $cart['Tieude']?></td>
                                                <td class="product-price"><?php echo number_format ($cart['Gia'],0)?></td>
                                                <td class="product_quantity" val="<?php echo $cart['SL']?>"><?php echo $cart['SL']?></td>
                                                <td class="product_total" ><?php echo number_format($cart['Gia']*$cart['SL'],0)?></td>                                              
                                            </tr>
                                            <?php }}?>
                                        </tbody>
                                    </table>   
                                </div>       
                            </div>
                        </div>
                    </div>
                                     
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code">
                                    <h3>TỔNG CỘNG ĐƠN HÀNG</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Tổng mặt hàng</p>
                                            <p class="cart_amount" id="TongTien"><?php echo number_format($tong)?></p>
                                        </div>
                                        <div class="cart_subtotal">
                                            <p>Tổng số lượng hàng</p>
                                            <p class="cart_sl" id="SL"><?php echo number_format($tongsl)?></p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a id="Order" name="giohang" onclick="DatHang()">ĐẶT HÀNG</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>              
        </div> 
</body>
</html>
<script>
    function DatHang(){
        var MaKH = $('#MaKH').val();
        var Email = $('#Email').val();
        var TongTien = $('#TongTien').text();
        TongTien = Number(TongTien.replace(/,/g, ""));

        let SLElements = document.getElementsByClassName("product_quantity");
        let soluongValues = []; // Mảng để lưu trữ nhiều giá trị
            for (let i = 0; i < SLElements.length; i++) {
                let element = SLElements[i];
                console.log('element ', element);
                let value = element.getAttribute('val');
                console.log('i: ' + i + '; value: ' + value);
                soluongValues.push(Number(value)); //Chuyển đổi thành số và lưu trữ trong mảng
        }

    let MaSPElements = document.getElementsByClassName("product_id");
    let MaSPValues = []; // This should also be an array
    for (let i = 0; i < MaSPElements.length; i++) {
        let element = MaSPElements[i];
        console.log('element ', element);
        let value = element.getAttribute('val');
        console.log('i: ' + i + '; value: ' + value);
        MaSPValues.push(value); 
    };

    for (let i = 0; i < soluongValues.length; i++) {
            $.ajax('/product/dathang/ThemHoaDon', {//gom vo 1 ham, roi qua conntroller xu ly
            type: 'POST',
            data: {
                'MaSPValues': MaSPValues[i],
                'soluongValues': soluongValues[i],
                'MaKH': MaKH,  
                'Email': Email,  
                'TongTien': TongTien,   
                              
            },
            success: function (data, status, xhr) {
                alert(data);
                // console.log(data);
                // console.log(status);

            }
        });
    }
}
</script>