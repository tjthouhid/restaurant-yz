  <?php if($current_url!=="index.php"){
    $s_url=$site_url;
 }else{
    $s_url="";
 }
 ?>  
     <!-- ******************************************************* -->
    <!-- ************  Footer Section  ************** -->
    <!-- ******************************************************* -->
    <footer>
        
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icon">
                        <ul>
                            <li><a href="https://www.facebook.com/mangiamouae/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/mangiamo.restaurant/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/mangiamo" target="_blank"><i class="fa fa-snapchat"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-nav">
                        <ul>
                            <li><a href="<?php echo $site_url;?>">Home</a></li>
                            <li><a href="<?php echo $s_url;?>#our_story">Our Story</a></li>
                            <li><a href="<?php echo $s_url;?>#reservation">Reservation</a></li>
                            <li><a href="<?php echo $s_url;?>#menu">Menu</a></li>
                            <li><a href="<?php echo $s_url;?>#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-sign" >
                        <p>mangiamo @Allrightreserved-2017</p>
                        <!-- <p>Developed By <a href="https://www.frndzit.org" target="_blank">Frndzit</a></p> -->
                        
                    </div>
                    
                </div>
            </div>
       
    </footer>

    <!--=== fixed js ===-->
    <script src="../js/jquery.min.js"></script> <!-- jQuery v3.1.1 -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script> <!-- Bootstrap v3.3.7 -->
    <script type="text/javascript" src="../js/bootstrap-datepicker.min.js"></script> <!-- Bootstrap v3.3.7 -->
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnQhOKfphc09FeAYL9ilJ3SE6idKWlT6M&callback=initMap">
    </script>
    <!--=== Scroll Effects js ===-->
    <script type="text/javascript" src="../js/anijs-min.js"></script>
    <script type="text/javascript" src="../js/anijs-helper-scrollreveal.min.js"></script>

    <!--=== Jquery validator js ===-->
    <script src="../js/jquery.validate.min.js"></script>
     <script type="text/javascript">
        var burl="<?php echo get_server_url(true);?>";
    </script>
    <!--=== custom js ===-->
    <script type="text/javascript" src="../js/custom.js"></script>
    <!--=== map js ===-->
    <script type="text/javascript" src="../js/map.js"></script>
</body>
</html>

<?php include "template-parts/pop-up-form.php" ?>

<?php include "template-parts/pop-up-video.php" ?>



