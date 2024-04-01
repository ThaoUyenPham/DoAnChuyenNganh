<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị viên</title>
    <?php
    
    // var_dump($products); die();
    $context = Context::getContext();
    //luu css va add vao nhu nay, khong goi truc tiep link css hay js tu he thong khac > viec nay tranh viec tan cong tu he thong thu 3 > luu y
    $context->prependStylesheet([
        'public/libs/ionicons/2.0.0/css/ionicons.min' => ['cache' => true],
        'public/libs/font-awesome-4.7.0/css/font-awesome.min' => ['cache' => true],
        'public/libs/bootstrap-3.3.7-dist/css/bootstrap.min' => ['cache' => true],
        'public/css/cssHeaderFooter' => ['cache' => true],
        'public/css/admin' => ['cache' => true]
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
                    <div class="containerr">
                        <div class="sidebar">
                            <ul class="sidebar-menu">
                                <li><a class="tablinks" onclick="OpenTab(event, 'XemSanpham')"><i class="fa fa-home"></i> Quản Lý Sản Phẩm</a></li>
                                <li><a class="tablinks" onclick="OpenTab(event, 'QuanlySanpham')"><i class="fa fa-pencil"></i> Thêm sản phẩm</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                            </ul>
                            <div class="sidebar-footer" style="color: #333;">
                                <a href="/apps/home/modules/index/index_views/index.php" style="color: cornsilk; text-decoration:none"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="dashboard-overview">
                                <h2>Tổng hợp sản phẩm</h2>
                                <!-- <form style="float:left;margin-right:40px;" action="" method="GET">
                                    <label for="live">Phân loại:</label>
                                    <input list="live" name="browser">
                                    <datalist id="live">
                                        <option id="opt" value="Son">
                                        <option id="opt" value="Phấn mắt">
                                        <option id="opt" value="Kẻ chân mày">
                                        <option id="opt" value="Nước tẩy trang">
                                        <option id="opt" value="Dầu gội">
                                    </datalist><br>
                                </form> -->
                                <form action="/product/admin/getSearchKey?" method="GET">
                                    <label for="live">Tìm kiếm:</label>
                                    <input type="text" name="tukhoa">
                                </form>
                            </div>

                            <br>
                            <div id="XemSanpham" class="TabContentX"> 
                                <div class="bangContent">
                                    <table>                                  
                                        <tr>
                                            <th id="masp">Mã sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th id="tensp">Giá</th>
                                            <th>Hành động</th>                      
                                        </tr>  
                                      
                                        <input type="hidden" id="MaSP" value="<?php echo $pro['MaSP']; ?>">
                                        <?php if(count($products) > 0){ 
                                            foreach($products as $pro){?>
                                        <tr>
                                        
                                            <td><?php echo $pro['IdSP']?></td>
                                            <!-- <td><?php echo $pro['MADM']?></td> -->
                                            <td><img src="<?php echo SITE_ROOT_IMG.$pro['Hinh'];?>" alt=""></td>
                                            <td id="tensp"><?php echo $pro['Tieude']?></td>
                                            <td><?php echo $pro['SL']?></td>
                                            <td><?php echo $pro['Gia']?></td>
                                            <td><a style="cursor:hand;" onclick="deletePro('<?php echo $pro['IdSP'];?>')">Xóa</a></td>                  
                                        
                                        </tr>   
                                        <?php }}?>   
                                    </table>
                                    <ul class="pagination">
                                        <li><a href="<?php echo SITE_ROOT?>product/admin?per_page=10&page=1">1</a></li>
                                        <li><a href="<?php echo SITE_ROOT?>product/admin?per_page=10&page=2">2</a></li>
                                        <li><a href="<?php echo SITE_ROOT?>product/admin?per_page=10&page=3">3</a></li>
                                        <li><a href="<?php echo SITE_ROOT?>product/admin?per_page=10&page=4">4</a></li>
                                        <li><a href="<?php echo SITE_ROOT?>product/admin?per_page=10&page=5">5</a></li>
                                        <li><a href="<?php echo SITE_ROOT?>product/admin?per_page=10&page=6">6</a></li>
                                </ul>
                                </div>
                            </div>
                            <div id="QuanlySanpham" class="TabContentQL"> 
                                <div class="bangContent">
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label> Hình ảnh</label>
                                        </div>
                                        <div class="lblinput">
                                            <form action="tttl/img/" method="post" enctype="multipart/form-data">
                                                <input type="file" name="Hinh" id="Hinh">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Tên sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" id="txtname" name="" value="">
                                        </div>
                                    </div>
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Danh mục</label>
                                        </div>
                                        <div class="lblinput">                                        
                                            <div class="inputSize">
                                                <form action="" method="POST">
                                                    <select id="IdDM" name="IdDM" > 
                                                        <option value="0">--Hãy chọn danh mục--</option>     
                                                        <?php 
                                                            if(count($danhmuc) > 0){ 
                                                                foreach($danhmuc as $dm){?>                                             
                                                        <option value="<?php echo $dm['IdDM']?>"><?php echo $dm['TenDM']?></option>
                                                        <?php }}?>
                                                    </select>
                                                    <select id="IdCTDM" name="IdCTDM" > 
                                                        <option value="0">--Hãy chọn loại danh mục--</option>   
                                                        <?php 
                                                            if(count($ctdm) > 0){ 
                                                                foreach($ctdm as $ctdm){?>                                                 
                                                        <option id="MaDM" value="<?php echo $ctdm['IdCTDM']?>"><?php echo $ctdm['Ten']?></option>  
                                                        <?php }}?> 
                                                    </select>
                                                    <select id="IdTTCTDM" name="IdTTCTDM" > 
                                                        <option value="0">--Hãy chọn chi tiết danh mục--</option> 
                                                        <?php 
                                                            if(count($ttctdm) > 0){ 
                                                                foreach($ttctdm as $ttctdm){?>                                     
                                                                <option id="MaDM" value="<?php echo $ttctdm['IdTTCTDM']?>"><?php echo $ttctdm['Ten']?></option>
                                                            <?php }}?>                            
                                                    </select>
                                                </form>                                    
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Màu</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" id="txtMau" name="" value="">
                                            <input type="text" id="txtMau" name="" value="">
                                        </div>
                                    </div> -->

                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Kho hàng</label>
                                        </div>
                                        <div class="lblinput">                                        
                                            <div class="inputSize">
                                                <input type="text" id="txtSL" name="" value="4">                                  
                                            </div>
                                        </div>
                                    </div>  
            
                                    <div class="rowContent">
                                        <div class="lbltitle">
                                            <label>Giá sản phẩm</label>
                                        </div>
                                        <div class="lblinput">
                                            <input type="text" id="txtGia" value="">
                                        </div>
                                    </div>
                                    <button name="AddProduct" id="AddProduct" onclick="AddProduct()">Thêm sản phẩm</button>
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
    //thanh số trang
    let user=[];
    let currentPage=1
    let perPage=2
    let totalPage=user.length/2
    let perUsesr=[]
    //mở tab
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
    function AddProduct(TenSP,Hinh,IdDM,Gia){
        var TenSP = $('#txtname').val();
        var IdDM = $('#IdDM').val();
        var Hinh = $('#Hinh').val();
        var IdCTDM = $('#IdCTDM').val();
        var IdTTCTDM = $('#IdTTCTDM').val();
        var SL = $('#txtSL').val();
        // var TenSz1 = $('#txtSz1').val();
        // var TenSz2 = $('#txtSz2').val();


        var Gia = $('#txtGia').val();
        // var SLT1 = $('#txtSL1').val();
        // var SLT2 = $('#txtSL2').val();

       // $('#MaSP').val(MaSP);
            $.ajax('/product/admin/ThemSanpham',{   
                type: 'POST',  // http method
                data: { 
                    'TenSP': TenSP,
                    'Hinh': Hinh,
                    'SL': SL,
                    'IdDM': IdDM,
                    'IdCTDM':IdCTDM,
                    'IdTTCTDM':IdTTCTDM,
                    'Gia': Gia,
                    // 'TenSz1': TenSz1,
                    // 'TenSz2': TenSz2,
                    // 'SLT1': SLT1,
                    // 'SLT2': SLT2

                },  // data to submit
                success: function (data, status, xhr) {
                    // console.log(data);
                //    if(data==1){
                //     alert("Thêm thành công");
                //    }
                //    else{
                //     alert("Thêm không thành công");
                //    }
                }

            });
    }
</script>