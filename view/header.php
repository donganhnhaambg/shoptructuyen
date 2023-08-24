<?php 

// $path = $_SERVER['REQUEST_SCHEME'] . "://" .$_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
// $path = str_replace("index.php", "", $path);
// include "global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Cong Nghe</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div class="boxcenter" style="width:70%">
        <div class="row mb header" style = "display:flex;background-color: aquamarine">
            <div><h1><a style="text-decoration: none;font-size:30px" href="index.php">SIÊU THỊ TRỰC TUYẾN</a></h1></div>
            <div class="boxfooter searchbox" style = "background-color: transparent; margin-top:10px ; border:none;">
            <form action="index.php?act=sanpham" method="post" style = "display:flex">
                            <input  style = " margin:0 5px 0 15rem; width:300px;border: 1px solid #3d30e9" type="text" name="kyw" placeholder="Tìm kiếm sản phẩm">
                            <input  style = "padding: 0 4px ;border: 1px solid #3d30e9; border-radius : 5px ;" type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
            </div>   
            <div style = "background-color: white; margin:23px 10px 23px 13rem ; padding :5px ;border: 1px solid #3d30e9;border-radius:5px" >
                <a  style="text-decoration: none" href="index.php?act=dangky">Tài Khoản</a>
            </div>
            <div style = "background-color: white; margin:23px 0; padding :5px ;border: 1px solid #3d30e9;border-radius:5px " ><a style="text-decoration: none" href="index.php?act=viewcart">Giỏ hàng</a></div>          

        </div>
        <div class="row mb menu" style= "padding:13px" >
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=giaidap">Giải đáp</a></li>
            </ul>
        </div>