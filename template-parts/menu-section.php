<!-- ****************************************** -->
<!-- ************  Menu Section  ************** -->
<!-- ****************************************** -->
<?php  
    require_once 'functions/config.php';
    $querym = "SELECT * FROM category where is_img='1' limit 4";
    $resultm = $db->query($querym);
    
    ?>
    <section class="menu_section" id="menu">
        <div class="container-fluid">
            <h2 class="header-2 text-center" data-anijs="if: mouseover, do: swing animated">قائمة الطعام</h2>
            <div class="row">
                <div class="col-md-3 menu-side">
                    <div class="text-shadow">Recipies</div>
                     
                </div>
                <div class="col-md-8">
                     <div class="menu-tab">

                         <!-- Nav tabs -->
                       <ul class="nav nav-tabs ab" role="tablist">
                        <?php 
                            $array_cats=array();
                            $i=0;
                            while ($rowm= $resultm->fetch_object()){
                                $array_cats[$i]['id']=$rowm->id;
                                $array_cats[$i]['slug']=$rowm->slug;
                           
                         ?>
                         <li role="presentation" <?php if($i<1){ ?> class="active" <?php } ?>><a href="#<?php echo $rowm->slug;?>" aria-controls="<?php echo $rowm->slug;?>" role="tab" data-toggle="tab"><?php echo$rowm->arabic;?> </a></li>
                         <?php $i++;} ?>
                         
                       </ul>

                       <!-- Tab panes -->
                        <div class="tab-content">
                        <?php foreach ($array_cats as $k=>$array_cat) {
                            //print_r($array_cat);
                            $cat_id=$array_cat['id'];
                            $querym2 = "SELECT * FROM foods where cat_id='$cat_id' && img!='' limit 3";
                            $resultm2 = $db->query($querym2);
                         ?>
                        
                         <div role="tabpanel" class="tab-pane fade in <?php if($k<1){ ?> active <?php } ?>" id="<?php echo $array_cat['slug'];?>"> 
                            <?php while ($rowm2 = $resultm2->fetch_object()){ ?>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/<?php echo $rowm2->img;?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3"><?php echo $rowm2->title;?></h3>
                                    <p class="p-text-1">
                                        <?php echo $rowm2->detail;?> 
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        <?php echo $rowm2->price;?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                         </div>
                         <?php } ?>

                        </div>
                        </div>

    
                     <a href="menu.php" class="view-more-btn">View More</a>
                </div>
                <div class="col-md-1">&nbsp;</div>
            </div>
        </div>
        
        
    </section>
