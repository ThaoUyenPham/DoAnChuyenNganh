
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <?php
    
    // var_dump($products); die();
    $context = Context::getContext();
    //luu css va add vao nhu nay, khong goi truc tiep link css hay js tu he thong khac > viec nay tranh viec tan cong tu he thong thu 3 > luu y
    $context->prependStylesheet([
        'public/libs/ionicons/2.0.0/css/ionicons.min' => ['cache' => true],
        'public/libs/font-awesome-4.7.0/css/font-awesome.min' => ['cache' => true],
        'public/libs/bootstrap-3.3.7-dist/css/bootstrap.min' => ['cache' => true],
        'public/css/cssHeaderFooter' => ['cache' => true],
        'public/css/style' => ['cache' => true]
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
                <form class="form_main" action="" method="POST">
                    <p class="heading">Đăng Ký</p>
                    <div class="inputContainer">
                        <input placeholder="Điền tên khách hàng" id="inputTenkh" class="input" type="text" value="Mai">
                    </div>
                    <div class="inputContainer">
                        <input placeholder="Điền email" id="inputUser" class="input" type="text" value="mai12@gmail.com">
                    </div>
                    <div class="inputContainer">
                        <input placeholder="Điền số điện thoại" id="inputPhone" class="input" type="text" value="0123456781">
                    </div>
                    <div class="inputContainer">
                        <input placeholder="Điền địa chỉ" id="inputAddress" class="input" type="text" value="Bến tre">
                    </div>                  
                    <div class="inputContainer">
                        <input placeholder="Điền mật khẩu" id="inputPassword" class="input" type="Password" value="Maiii@!23">
                </div>
                            
                <a href="/product/forget">Quên mật khẩu?</a>           
                <button class="button" id="register" style="color:white;">Đăng Ký</button>
                    <div class="signupContainer">
                        <a href="<?php echo SITE_ROOT?>product/login">Đăng Nhập</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
<?php $this->template->display('footer.php'); ?>
</body>
</html>
<script> 
$('#register').click(function(){ //khi nhấn vào giỏ hàng
        var tenkh=$('#inputTenkh').val();
        var username = $('#inputUser').val();
        var password = $('#inputPassword').val();
        var phone = $('#inputPhone').val();
        var address = $('#inputAddress').val();
        var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
       
        if (!passwordPattern.test(password)) {
            alert("Mật khẩu phải có chữ hoa, chữ thường, số, và kí tự đặc biệt.");
            return false;
        }
        else if (!filter.test(username)) {
            alert("Username phải đủ tên,@,gmail.com");
            return false;
        }
        else if (phone.length !== 10) {
            alert("Số điện thoại phải có đúng 10 số.");
            return false;
        }
        else if(!username || !phone || !address || !password){
            alert("Vui lòng nhập đủ thông tin");  
        }
        
        else{
            $.ajax('/product/signup/checkTK',{   
            type: 'POST',  // http method
            data: { 
                'username': username,
                'phone': phone,
                
            },  // data to submit
            
            success: function (data, status, xhr) {
                console.log(data);
                console.log(status);
                // alert("Đã tạo tài khoản thành công,Hãy chọn đăng nhập");
                // window.open("<?php echo SITE_ROOT ?>product/dangnhap","_self");
                // if(data==1){
                //     //window.open("<?php echo SITE_ROOT ?>product/dathang","_self");
                //     alert("Xin chào '"+username+"' Bạn đăng ký thành công");
                // }
                // else{
                //     alert("Tài khoản của bạn đã được đăng ký");
                //  }

            }
        });
        }
       
    });
</script>