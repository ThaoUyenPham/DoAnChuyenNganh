
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
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src="" alt=""></a></td>
                                            <td class="product_name"><a href="#"></a></td>
                                            <td class="product-price"></td>
                                            <td class="product_quantity"><input min="0" max="100" value="1" type="number"></td>
                                            <td class="product_total"></td>
                                        </tr>
                                    </tbody>
                                    </table>   
                                </div>  
                                <div class="cart_submit">
                                    <button type="submit">Cập nhật</button>
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
                                            <p class="cart_amount">12</p>
                                        </div>
                                        <!-- <div class="cart_subtotal ">
                                            <p>Giá vận chuyển</p>
                                            <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>
                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div> -->
                                        <div class="checkout_btn">
                                            <a href="#">ĐẶT HÀNG</a>
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
<script>
   
</script>