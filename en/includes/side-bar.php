  <!-- ****************************************** -->
    <!-- ************ Side Menu  ************** -->
    <!-- ****************************************** -->

    <div id="menu-sideBar" class="sidenav">
         <a href="javascript:void(0)" class="menu-closebtn">&times;</a>
         <div class="clearfix"></div>
        <ul class="menu">
            <li <?php if($current_url=="index.php"){ ?> class="active" <?php } ?>><a href="index.php">Home</a></li>
            <li <?php if($current_url=="landing-page.php"){ ?> class="active" <?php } ?>><a href="landing-page.php">Landing Page</a></li>
            <li <?php if($current_url=="menu.php"){ ?> class="active" <?php } ?>><a href="menu.php">Menu</a></li>
            <li <?php if($current_url=="blog.php"){ ?> class="active" <?php } ?>><a href="blog.php">Blog</a></li>
        </ul>
     

    </div>