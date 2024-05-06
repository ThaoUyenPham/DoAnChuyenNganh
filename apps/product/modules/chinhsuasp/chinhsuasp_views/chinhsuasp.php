<?php
   // session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kênh người bán</title>
    <?php
    $context = Context::getContext();
    //luu css va add vao nhu nay, khong goi truc tiep link css hay js tu he thong khac > viec nay tranh viec tan cong tu he thong thu 3 > luu y
    $context->prependStylesheet([
        'public/libs/ionicons/2.0.0/css/ionicons.min' => ['cache' => true],
        'public/libs/font-awesome-4.7.0/css/font-awesome.min' => ['cache' => true],
        'public/libs/bootstrap-3.3.7-dist/css/bootstrap.min' => ['cache' => true],
        'public/css/css' => ['cache' => true],
        'public/css/csschinhsuasp' => ['cache' => true]
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
            <div class="container_main">
                <div class="productBox">
                    <div class="ProductShow">
                        <div class="content">
                                <div class="container containerr">
                                    <?php if(count($products) > 0){ 
                                        foreach($products as $pro){
                                    ?>
                                    <input type="hidden" id="txtMaSP" name="" value="<?php echo $pro['IdSP']?>">
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label> Hình ảnh</label>
                                        </div>
                                        <div class="lblinput" id="lbinputt">
                                            <img src="<?php echo SITE_ROOT_IMG.$pro['Hinh'];?>" alt="">
                                        </div>
                                    </div>
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Mã sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <p><?php echo $pro['IdSP']?></p>
                                        </div>
                                    </div>
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Danh mục</label>
                                        </div>
                                        <input type="hidden" id="txtMaDM" value="<?php echo $pro['Id_DM']?>">
                                        <div class="lblinput">                                        
                                            <div class="inputSize">
                                                <p ><?php echo $pro['TenDM']?></p>            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Tên sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" id="txtname" name="" value="<?php echo $pro['Tieude']?>">
                                        </div>
                                    </div>
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Số lượng</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" id="txtSL" value="<?php echo $pro['SL']?>">
                                        </div>
                                    </div>
            
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Giá sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" id="txtGia" value="<?php echo number_format($pro['Gia'],0) ?>">
                                        </div>
                                    </div>
                                    <?php }}?>
                                    <button name="AddProduct" id="AddProduct" onclick="UpdateProduct()">Cập nhật</button>
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
    function UpdateProduct(){
        var IdSP = $('#txtMaSP').val();
        var Tieude = $('#txtname').val();
        var MaDM = $('#txtMaDM').val();
        var SLSP = $('#txtSL').val();
        var GIA = $('#txtGia').val();
        GIA = Number(GIA.replace(/,/g, ""));
            $.ajax('/product/chinhsuasp/CapnhatSP',{   
                type: 'POST',  // http method
                data: { 
                    'IdSP':IdSP,
                    'Tieude': Tieude,
                    'MaDM': MaDM,
                    'SLSP': SLSP,
                    'GIA': GIA,
                },  // data to submit
                success: function (data, status, xhr) {
                    // console.log(data);
                    // console.status(data);
                    // alert(data);
                    // if(data==1){
                        alert("Cập nhật thành công");
                    //     location.reload();
                    // }
                        
                    // else
                    //     alert("Cập nhật không thành công");
                }

            });
    }
</script>