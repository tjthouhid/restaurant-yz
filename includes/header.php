<?php 
function get_current_path(){
 $complete_path = $_SERVER['SCRIPT_FILENAME'];
 $url_arry=array_reverse(explode("/", $complete_path)); 
 return $url_arry[0];
}
function get_server_url($dev=false){
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
   if($dev==true){
    $folder="restaurant-yz/";
   }else{
    $folder="";
   }
  $url = $protocol . $_SERVER['HTTP_HOST'] ."/".$folder;
  return $url; // Outputs: Full URL
}


$current_url=get_current_path();
$site_url=get_server_url(true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--=== meta ===-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f4e488" />

    <title>Home - Mangiamo</title>

    <!--=== css fixed ===-->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap v3.3.7 -->
    <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css"> <!-- Bootstrap v3.3.7 -->
    <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font Awesome V4.7.0 -->
   
   <!-- AniCollection.css library -->
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">

    <!--=== custom css ===-->
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
  <?php include "includes/side-bar.php"; ?>

    <!-- ****************************************** -->
    <!-- ************ Header Start  ************** -->
    <!-- ****************************************** -->

    <header class="header-with-bg">
        <!-- <video poster="../img/header-bg.jpg" id="bgvid" playsinline autoplay muted loop>
          <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -/->
        <source src="video/bg-video.webm" type="video/webm">
        <source src="video/bg-video.mp4" type="video/mp4">
        </video> -->
        <div class="container-fluid">
            <div class="row fix logo-nav">
                <div class="col-md-6 col-xs-6 left-bar">
                    <div class="logo">
                        <a href="<?php echo $site_url;?>">Mangiamo</a>
                    </div>
                </div>
                <div class="col-md-2 call-now">
                    <i class="fa fa-phone" aria-hidden="true"></i> اتصل الآن :  <a href="tel:097124974010">097124974010</a>
                    
                </div>
                <div class="col-md-4 right-bar">
                    <div class="row">
                        <div class="col-md-8 col-xs-4 book-btn-bar">
                            <a href="javascript:void(0);" class="book-btn-1" data-toggle="modal" data-target="#book_now_modal">حجز طاولة</a>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="javascript:void(0);" class="menu-openbtn">
                           <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                             <metadata>
                           <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01        ">
                              <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                 <rdf:Description rdf:about=""/>
                              </rdf:RDF>
                           </x:xmpmeta></metadata>
                           <defs>
                               
                             </defs>
                             <path data-name="Menu Icon" class="menu_icon" d="M1260.16,41a4.156,4.156,0,1,1-4.16,4.156A4.155,4.155,0,0,1,1260.16,41ZM1274,41a4.156,4.156,0,1,1-4.16,4.156A4.157,4.157,0,0,1,1274,41Zm13.84,0a4.156,4.156,0,1,1-4.15,4.156A4.157,4.157,0,0,1,1287.84,41Zm-27.68,13.844A4.156,4.156,0,1,1,1256,59,4.155,4.155,0,0,1,1260.16,54.844Zm13.84,0A4.156,4.156,0,1,1,1269.84,59,4.157,4.157,0,0,1,1274,54.844Zm13.84,0A4.156,4.156,0,1,1,1283.69,59,4.157,4.157,0,0,1,1287.84,54.844Zm-27.68,13.844a4.156,4.156,0,1,1-4.16,4.156A4.155,4.155,0,0,1,1260.16,68.688Zm13.84,0a4.156,4.156,0,1,1-4.16,4.156A4.157,4.157,0,0,1,1274,68.688Zm13.84,0a4.156,4.156,0,1,1-4.15,4.156A4.157,4.157,0,0,1,1287.84,68.688Z" transform="translate(-1256 -41)"/>
                           </svg>

                        </a>
                        <ul class="nav navbar-nav language-bar">
                            <li class="dropdown">
                              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Arabic <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $site_url.$current_url;?>">Arabic</a></li>
                                    <li><a href="<?php echo $site_url;?>en/<?php echo $current_url;?>">English</a></li>
                                </ul>
                            </li>
                        </ul>

                        </div>
                    </div>
                    
                    
                </div>
            </div>