<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/DoAnChuyenNganh-main/public/css/profile.css">
</head>
<body>
<form action="">
<fieldset>
    <legend>Thông tin cá nhân</legend>
    <label for="name">Họ và tên: </label><br>
    <input type="text" id="name" name="name" value=""><br>
    <label for="date">Ngày sinh: </label><br>
  	<input type="date" id="date" name="date"><br>
    <label for="live">Địa chỉ: </label><br>
    <input list="live" name="browser">
  	<datalist id="live">
    <option value="Tiền Giang">
    <option value="Hồ Chí Minh">
    <option value="Hà Nội">
    <option value="Cao Bằng">
    <option value="An Giang">
    <option value="Cần Thơ">
    <option value="Huế">
    <option value="Quảng Bình">
    <option value="Cà Mau">
    <option value="Kiên Giang">
  	</datalist><br>
    <label for="email">Email: </label><br>
    <input type="email" name="email" id="email" value=""><br>
    <label for="phone">Số điện thoại: </label><br>
    <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
    <input type="submit" value="Sửa thông tin">
   </fieldset>
</form>
</body>
</html>