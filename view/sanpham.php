
<div class="row mb" style="margin-left:0px;margin-right:0px">
            <div class="boxtrai mr">
                <div class="row mb" style="margin-left:0px;margin-right:0px">
                    
                    <div class="boxtitle"><h1 style="font-size: 0.8vw;"><?=$tendm?></h1></div>
                    <div class="row boxcontent" style="margin-left:0px;margin-right:0px">
                        <?php 
                           $i=0;
                           foreach($dssp as $sp) {
                               extract($sp);
                               $linksp="index.php?act=sanphamct&idsp=".$id;
                               $hinh=$img_path.$img;
                               if(($i==2) || ($i==5) || ($i==8) || ($i==11)){
                                   $mr="";
                               }else{
                                   $mr="mr";
                               }
                               echo '<div class="boxsp '.$mr.'">
                                       <div class="row img" style="margin-left:0px;margin-right:0px">
                                       <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""><?/a>
                                       </div>
                                       <p>$'.$price.'</p>
                                       <a href="'.$linksp.'">'.$name.'style="text-transform:uppercase"</a>
                                   </div>';
                               $i+=1;
                           }
                        ?>
                    </div>
                </div>
                
                
            </div>
            <div class="boxphai">
                <?php 
                    include "boxright.php";
                ?>
            </div>
        </div>