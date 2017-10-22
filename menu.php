<?php include "includes/header.php";?>
<?php  
require_once 'functions/config.php';
$query = "SELECT * FROM category where is_img='1'";
$result = $db->query($query);

?>
            <div class="header-slider">
                <div class="row">
                    <div class="col-md-2 slider-st">
                        <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                 <!--  <li data-target="#head-text-slide" data-slide-to="0" class="active"></li>
                                   -->
                                </ol> 

                    </div>
                    <div class="col-md-8 slider-st">
                        <div id="head-text-slide" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <h1 class="header-1">أهلا بكم في منجيامو</h1>
                                    <h6 class="header-6">% حجز طاولتك الآن واحصل على خصم بقيمة 15</h6>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div> <!-- End of slider col-md-8 -->

                    <div class="col-md-2 slider-st">
                        <div class="scroll-down-btn">
                            Scroll Down
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
    </header> 

    
     <!-- ******************************************************* -->
    <!-- ************  Menu Section  ************** -->
    <!-- ******************************************************* -->
    <?php $i=0;while ($row = $result->fetch_object()) {
        $cat_id=$row->id;
        $query2 = "SELECT * FROM foods where cat_id='$cat_id'";
        $result2 = $db->query($query2);
        if($i%2==0){ 
           
            ?>
            <section class="single-menu-sec">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-bar">
                                <img src="img/<?php echo $row->img;?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-menu-bar">
                                <h3 class="header-3V2"><?php echo $row->arabic;?></h3>
                                <ul>
                                    <?php $j=0;while ($row2 = $result2->fetch_object()){ if($j>2){ $cls="not-show";}else{ $cls="";} 
                                    ?>
                                    <li class="single-menu-item <?php echo $cls;?>">
                                        <div class="row">
                                            <div class="col-md-8 col-xs-8">
                                                <h2 class="single-menu-header"><?php echo $row2->title;?></h2>
                                            </div>
                                            <div class="col-md-4 col-xs-4 price">
                                                <?php echo $row2->price;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="p-text-1">
                                                    <?php echo $row2->detail;?> 
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php $j++; } ?>
                                    
                                    
                                </ul>
                                <?php if($j>3){ ?>
                                <a href="javascript:void(0);" class="view-more-btn show-more">View More</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } else { ?>
               <section class="single-menu-sec">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 visible-xs-* visible-sm-* hidden-md hidden-lg">
                                <div class="img-bar">
                                    <img src="img/<?php echo $row->img;?>">
                                </div>
                            </div>
                            <div class="col-md-1">&nbsp;</div>
                            <div class="col-md-4">
                            <div class="single-menu-bar">
                                <h3 class="header-3V2"><?php echo $row->arabic;?></h3>
                                <ul>
                                    <?php $j=0;while ($row2 = $result2->fetch_object()){ if($j>2){ $cls="not-show";}else{ $cls="";} 
                                    ?>
                                    <li class="single-menu-item <?php echo $cls;?>">
                                        <div class="row">
                                            <div class="col-md-8 col-xs-8">
                                                <h2 class="single-menu-header"><?php echo $row2->title;?></h2>
                                            </div>
                                            <div class="col-md-4 col-xs-4 price">
                                                <?php echo $row2->price;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="p-text-1">
                                                    <?php echo $row2->detail;?> 
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <?php $j++; } ?>
                                    
                                    
                                </ul>
                                <?php if($j>3){ ?>
                                <a href="javascript:void(0);" class="view-more-btn show-more">View More</a>
                                <?php } ?>
                            </div>
                        </div>
                            <div class="col-md-6 hidden-xs hidden-sm visible-md-* visible-lg-*">
                                <div class="img-bar">
                                    <img src="img/<?php echo $row->img;?>">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
        <?php } ?>            
   
    <?php $i++;} ?> 

   
     <!-- ******************************************************* -->
    <!-- ************  Double row menu Section  ************** -->
    <!-- ******************************************************* -->
    <?php 
        $queryd = "SELECT * FROM category where is_img='0'";
        $resultd = $db->query($queryd);
    ?>
    
    <section class="single-menu-sec double-row-menu">
        <div class="container-fluid fix">
            <div class="row">
                <?php $i=0;while ($rowd = $resultd->fetch_object()) {
                    $catd_id=$rowd->id;
                    $queryd2 = "SELECT * FROM foods where cat_id='$catd_id'";
                    $resultd2 = $db->query($queryd2);
                    if($i%2==0){ ?>
                            </div>
                        </div>
                    </section>
                    <section class="single-menu-sec double-row-menu">
                        <div class="container-fluid fix">
                            <div class="row">
                    <?php } ?>
                <div class="col-md-6">
                    <div class="single-menu-bar">
                        <h3 class="header-3V2"><?php echo $rowd->arabic;?></h3>
                        <ul>
                            <?php $j=0;while ($rowd2 = $resultd2->fetch_object()){ if($j>2){ $cls="not-show";}else{ $cls="";} 
                            ?>
                            <li class="single-menu-item <?php echo $cls;?>">
                                <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                        <h2 class="single-menu-header"><?php echo $rowd2->title;?></h2>
                                    </div>
                                    <div class="col-md-4 col-xs-4 price">
                                        <?php echo $rowd2->price;?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="p-text-1">
                                            <?php echo $rowd2->detail;?> 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <?php $j++; } ?>
                            
                            
                        </ul>
                        <?php if($j>3){ ?>
                        <a href="javascript:void(0);" class="view-more-btn show-more">View More</a>
                        <?php } ?>
                    </div>
                </div>

                <?php $i++;} ?> 
                
            </div>
        </div>
    </section>
    

<?php include "includes/footer.php"; ?>