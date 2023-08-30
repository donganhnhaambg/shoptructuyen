
<div class="row mb"style="margin-left:0px;margin-right:0px">
            <div class="boxtrai mr"style ="display:flex">
                <div class="row mb"style ="padding:10px;margin-left:0px;margin-right:0px">
                    
                    <div class="boxtitle"><h1>ĐĂNG KÝ THÀNH VIÊN</h1></div>
                    <div class="row boxcontent formtaikhoan">
                        <form action="index.php?act=dangky" method="post">
                            <div class="row mb10"style="margin-left:0px;margin-right:0px">
                                Email
                                <input type="email" name="email" id="" require_once>
                            </div>
                            <div class="row mb10" style="margin-left:0px;margin-right:0px">
                                Usename
                                <input type="text" name="user" id="" require_once>
                            </div>
                            <div class="row mb10" style="margin-left:0px;margin-right:0px">
                                Password
                                <input type="password" name="pass" id="" require_once>
                            </div>
                            <div class="row mb10" style = "margin-top:20px;margin-left:0px;margin-right:0px">
                                <input type="submit" value="Đăng ký" name="dangky">
                                <input type="reset" value="Nhập lại">
                            </div>
                            
                            
                        </form>        
                    </div>
                </div>
                
                <!-- danhnhap -->
                <div class="row mb userpass" style ="padding:10px" >
                    <div class="boxtitle" style="font-weight:bold">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan" style="height: 270px";>
                        <?php 
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user'])
                        ?>
                            <div class="row mb10">
                                Xin chào <br>
                                <h1 style="color: blue;">
                                    <?=$user?>
                                </h1>
                                
                            </div>
                            <div class="row mb10">
                                 <li style="list-style-type: none;margin-top:5px">
                                    <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                                </li >
                                <li style="list-style-type: none;margin-top:5px">
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li style="list-style-type: none;margin-top:5px">
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php
                                    if($role==1){ ?>
                                
                                <li style="list-style-type: none;margin-top:5px">
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php }?>
                                <li style="list-style-type: none;;margin-top:5px">
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>
                        <?php

                            }else {

                            
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>
                                <input type="password" name="pass">
                            </div>
                            <h2 style="color: red; margin: 5px 0 ; height: 20px">
                            <?php 
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }
                            ?>
                        </h2>
                            <div class="row mb10" style ="margin-top:32px">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                            
                        </form>
                        <li style = "list-style-type: none ;margin-left:8px;padding-bottom:25px">
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <!-- <li style = "list-style-type: none ;margin-left:8px">
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li> -->
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php 
                    include "view/boxright.php";
                ?>
            </div>
        </div>
        
