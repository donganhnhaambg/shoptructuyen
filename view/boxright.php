

                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php 
                                foreach($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }
                            ?>
                            <!-- <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                            <li>
                                <a href="#">Bàn phím</a>
                            </li>
                            <li>
                                <a href="#">Tai nghe</a>
                            </li>
                            <li>
                                <a href="#">USB</a>
                            </li> -->
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php 
                            foreach($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/image/1.jpg" alt="">
                            <a href="#">Surface Laptop Go</a>
                        </div> -->
                    </div>
                </div>








                