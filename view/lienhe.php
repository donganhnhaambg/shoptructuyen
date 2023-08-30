<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Mã CSS */
.form {
text-align: center;
}
#form1 {
width: 600px;
background: #fff;
margin: 0 auto;
}
#form1 input[type=text] {
border : 0;
width: 100%;
box-sizing: border-box;
font-size: 18px;
color: #555;
display: block;
line-height: 1.2;
background-color: #fff;
border-radius: 20px;
margin-bottom: 10px;
height: 50px;
padding: 0 20px 0 23px;
box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
-moz-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
-webkit-box-shadow: 0 5px 20px 0 rgb(0 0 0 / 5%);
-o-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
-ms-box-shadow: 0 5px 20px 0 rgba(0,0,0,.05);
}
#form1 input[type=text]:focus{
border: 1px solid #333;
outline: none;
box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
-moz-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
-webkit-box-shadow: 0 5px 20px 0 rgb(250 66 81 / 10%);
-o-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
-ms-box-shadow: 0 5px 20px 0 rgba(250,66,81,.1);
}
#form1 #fcontent {
outline: none;
min-height: 150px;
}
#form1 input[type=submit] {
background-color: #bd59d4;
height: 42px;
padding: 5px 20px;
border-radius: 21px;
font-size: 14px;
text-tranforms: uppercase;
color: #fff;
border: 0;
box-shadow: 0 10px 30px 0 rgb(189 89 212 / 50%);
-moz-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
-webkit-box-shadow: 0 10px 30px 0 rgb(189 89 212 / 50%);
-o-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
-ms-box-shadow: 0 10px 30px 0 rgba(189,89,212,.5);
}
#form1 input[type="submit"]:hover {
background:#CC4949;
}
#form1 {
    width:60%;
}
    </style>
</head>
<body>
<div class="row"style="margin-left:0px;margin-right:0px">
    <div class="boxtitle">LIÊN HỆ</div>
    <div class="row boxcontent"style="margin-left:0px;margin-right:0px">
    <div class="form">
<form action="" id="form1">
<input type="text" id="fname" name="fname" placeholder="Họ tên"><br>
<input type="text" id="femail" name="femail" placeholder="Địa chỉ Email"><br>
<input type="text" id="fcontent" name="fcontent" placeholder="Nội dung yêu cầu"><br>
<input type="submit" value="Gửi yêu cầu">
</form>
</div>
    </div>
</div>
</body>
</html>


