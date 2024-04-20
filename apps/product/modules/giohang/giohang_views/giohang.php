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
        'public/css/cssGioHang' => ['cache' => true]
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
            <div class="shopping_cart_area">
                <form action="#"> 
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Hành động</th>
                                            <th class="product_thumb">Hình ảnh</th>
                                            <th class="product_name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product_quantity">Số lượng</th>
                                            <th class="product_total">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(count($products)>0){ 
                                                // error_reporting (E_ALL ^ E_NOTICE);
                                                            $tong=0; 
                                                            foreach($products as $pro){
                                                            
                                                            // var_dump($pro['MaG']);die();
                                                            $tt=$pro['gia']*$pro['sl'];
                                                            $tong+=$tt;                
                                            ?>
                                            <tr>
                                            
                                                <!-- <input type="hidden" id="soluong" value="<?php echo $pro['sl']; ?>"> -->
                                                <input type="hidden" id="MaG" value="<?php echo $pro['MaG']; ?>">
                                            <td class="product_remove"><a id="btn_delete" onclick="deleteSP()" ><i class="fa fa-trash-o" style="cursor:hand;"></i></a</td>
                                            <td class="product_thumb"><a href="#"><img src="<?php echo SITE_ROOT_IMG.$pro['Hinh']?>" alt=""></a></td>
                                            <td class="product_name"><a href="#"><?php echo $pro['Tieude']?></a></td>
                                            <td class="product-price" id="price<?php echo $pro['MaG']?>" val="<?php echo $pro['gia']?>"><?php echo number_format ($pro['gia'],0)?></td>
                                            <td class="product_quantity"><input min="0" max="100" id="sl<?php echo $pro['MaG']?>" value="<?php echo $pro['sl']?>" type="number" onChange="changeQuantity(<?php echo $pro['MaG']; ?>)"></td>
                                            <td class="product_total" id="total<?php echo $pro['MaG']?>" val="<?php echo $pro['gia']*$pro['sl']; ?>"><?php echo number_format($pro['gia']*$pro['sl'],0)?></td>
                                        </tr>
                                        <?php }}?>
                                    </tbody>
                                    </table>   
                                </div>  
                                <div class="cart_submit">
                                    <button type="submit" id="btn_update">Cập nhật</button>
                                </div>      
                            </div>
                        </div>
                    </div>
                                     
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code">
                                    <h3>TỔNG CỘNG GIỎ HÀNG</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Tổng mặt hàng</p>
                                            <p class="cart_amount" val="<?php echo $tong; ?>"><?php echo number_format($tong)?></p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a id="Order" name="giohang" onclick="Dathang()">ĐẶT HÀNG</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->template->display('footer.php'); ?>
</body>
</html>
<script type = "text/javascript">
    // tang chinh so luong + chi phi + tong
    function changeQuantity(MaG){
        var quantity = $('#sl'+MaG).val();
        console.log('Quantity '+quantity);

        var cost = $('#price'+MaG).text();
        console.log('befor cost '+cost);
        console.log(cost);
        cost = Number(cost.replace(/,/g, ""));
        console.log('after cost '+cost);
        $("#price"+MaG).attr('val', cost);

        var sum = quantity * cost;
        console.log('sum '+sum);
        
        //var total = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(sum);
        var total = new Intl.NumberFormat('vi-VN').format(sum);
        console.log('total '+total);
        $("#total"+MaG).text(total);
        $("#total"+MaG).attr('val', sum);

        let elements = document.getElementsByClassName("product_total");
        var sumTotal = 0;
        for (let i = 0; i < elements.length; i++) {
            let element = elements[i];
            console.log('element ');
            console.log(element);
            let value = element.getAttribute('val');
            console.log('i: '+i+'; value: '+value);
            value = Number(value.replace(/,/g, ""));
            sumTotal += value;
        }
        $('.cart_amount').text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(sumTotal));
        $('.cart_amount').attr('val', sumTotal);
    }
    //nút xóa
    function deleteSP(MaG){
        var MaG = $('#MaG').val();
        // $('#MaG').val(MaG);
        $.ajax('/product/giohang/XoaGiohang',{   
            type: 'POST',  // http method
            data: { 
                'MaG': MaG,                 
            },  // data to submit
            success: function (data, status, xhr) {
                // alert(data);
                if(data==1)
                    alert("Xóa thành công");
                else
                    alert("Xóa không thành công");
            }
        });
    }
$('#btn_update').click(function(){
        var sl = $('#sl').val();
        var MaG = $('#MaG').val();
        
        // console.log(color);
        $.ajax('/product/giohang/CapNhatGiohang',{   
            type: 'POST',  // http method
            data: { 
                'sl':sl,
                'MaG': MaG,
            },  // data to submit
            success: function (data, status, xhr) {
                if(data==1){
                    alert("Cập nhật thành công");
                   }
                   else{
                    alert("Cập nhật không thành công");
                   }
            }

        });
});
// click dat hang
$('#Order').click(function(){
        //var makh = $('#makh').val();
       
           // console.log(color);
           $.ajax('/product/giohang/Order',{   
               type: 'POST',  // http method
               data: {      
               },  // data to submit
               success: function (data, status, xhr) {
                if(data==1){                    
                    window.open("<?php echo SITE_ROOT ?>product/dathang","_self"); 
                   }
                else{
                    alert("Vui lòng đăng nhập trước khi thanh toán");   
                    window.open("<?php echo SITE_ROOT ?>product/login","_self"); 
                   }  
               }
           });
    });
</script>