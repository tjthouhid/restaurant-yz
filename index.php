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
    <!-- ****************************************** -->
    <!-- ************ Side Menu  ************** -->
    <!-- ****************************************** -->

    <div id="menu-sideBar" class="sidenav">
         <a href="javascript:void(0)" class="menu-closebtn">&times;</a>
         <div class="clearfix"></div>
        <ul class="menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="landing-page.html">Landing Page</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
     

    </div>

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
                        <a href="index.html">Mangiamo</a>
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
                                    <li><a href="index.html">Arabic</a></li>
                                    <li><a href="en/index.html">English</a></li>
                                </ul>
                            </li>
                        </ul>

                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="header-slider">
                <div class="row">
                    <div class="col-md-2 slider-st">
                        <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                  <li data-target="#head-text-slide" data-slide-to="0" class="active"></li>
                                  <!-- <li data-target="#head-text-slide" data-slide-to="1"></li>
                                  <li data-target="#head-text-slide" data-slide-to="2"></li> -->
                                </ol> 

                    </div>
                    <div class="col-md-8 slider-st">
                        <div id="head-text-slide" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <h1 class="header-1">أهلا بكم في منجيامو</h1>
                                    <h3 class="header-3">حجز طاولتك الآن واحصل على خصم بقيمة 15 %</h3>
                                </div>
                                
                                <div class="video-play-div" id="play-btn2" data-toggle="modal" data-target="#video_modal">
                                    <a href="javascript:void()"></a>
                                </div>
                                <span class="video-btn-sub">مشاهدة الفيديو</span>
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

    <!-- ****************************************** -->
    <!-- ************  Story Section  ************** -->
    <!-- ****************************************** -->
    <section class="story_section" id="our_story">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-md-2 left-img"></div> -->
                    <div class="col-md-12">
                        <div class="story_div">
                            <h2 class="header-2 text-center" data-anijs="if: mouseover, do: swing animated">عن المطعم</h2>
                            <p class="p-text-1 text-center">
                               مستوحى من عالم التذوق والإبداع, من منجيامو نجمع لكم كل نكهات وأطباق العالم ونضعها في كل طبق من أطباقنا<br/><br/>منجيامو بحلته وإطلاقته الجديدة يقدم لكم افضل الأطباق العالمية<br/><br/>هنا من نادي القوات المسلحة في أبوظبي, فن الطهو العالمي يلتقي عراقة المطبخ العربي

                            </p>
                        </div>
                         

                    </div>
                    <!-- <div class="col-md-2 right-img"></div> -->
                </div>
            </div>
    </section>

     <!-- ****************************************** -->
    <!-- ************  Menu Section  ************** -->
    <!-- ****************************************** -->
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
                       <ul class="nav nav-tabs" role="tablist">
                         <li role="presentation" class="active"><a href="#lunch" aria-controls="lunch" role="tab" data-toggle="tab">Lunch                                             </a></li>
                         <li role="presentation"><a href="#evening" aria-controls="evening" role="tab" data-toggle="tab">Evening</a></li>
                         <li role="presentation"><a href="#drink" aria-controls="drink" role="tab" data-toggle="tab">Drink</a></li>
                         <li role="presentation"><a href="#dinner" aria-controls="dinner" role="tab" data-toggle="tab">Dinner</a></li>
                       </ul>

                       <!-- Tab panes -->
                       <div class="tab-content">
                         <div role="tabpanel" class="tab-pane fade in active" id="lunch">
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food1.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food2.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            
                         </div>
                         <div role="tabpanel" class="tab-pane fade" id="evening">
                             <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food1.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food2.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div role="tabpanel" class="tab-pane fade" id="drink">
                             <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food1.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food2.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div role="tabpanel" class="tab-pane fade" id="dinner">
                             <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food1.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food2.jpg">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="img-crcl">
                                        <img src="img/food3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6 set-full">
                                    <h3 class="header-3">Fried Chicken</h3>
                                    <p class="p-text-1">
                                        If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-3 set-full">
                                    <div class="price-box">
                                        $25
                                    </div>
                                </div>
                            </div>
                         </div>
                       </div>

                     </div>
                     <a href="menu.html" class="view-more-btn">View More</a>
                </div>
                <div class="col-md-1">&nbsp;</div>
            </div>
        </div>
        
        
    </section>


    <!-- ************************************************* -->
    <!-- ************  Reservation Section  ************** -->
    <!-- ************************************************* -->
    <section class="reservation-sec" id="reservation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="reserv_div">
                        <h2 class="header-2 text-center" data-anijs="if: mouseover, do: swing animated">للحجوزات</h2>
                        <div class="reserv_div_text">
                            <p class="p-text-1 text-center">
                            تفضلوا بزيارة مطعمنا لاستكشاف نكهات العالم, احجزوا طاولتكم الآن واحصلوا على خصم بقيمة 15 %
                        </p>
                        </div>
                        <div class="reserv_div_text_2">
                            <a href="#" class="contact-no"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; 097124974010</a> &nbsp; Or
                            <br>
                            <a href="#" class="book-btn-2" data-toggle="modal" data-target="#book_now_modal">حجز طاولة</a>
                            <div class="book-date-text">
                                <span>Mon-Fri -</span> 10am - 12pm  <span>Sat-Sun -</span>  10am - 12pm
                            </div>
                        </div>
                        
                    </div>
                     

                </div>
                <!-- <div class="col-md-2 right-img"></div> -->
            </div>
        </div>
    </section>

    <!-- ************************************************* -->
    <!-- ************  Testimonial Section  ************** -->
    <!-- ************************************************* -->
    <section class="testimonial_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="testi_div">
                        <h2 class="header-2 text-center" data-anijs="if: mouseover, do: swing animated">آراء عملائنا</h2>
                        <div class="row">
                            <div class="col-md-2">
                                <!-- Indicators -->
                                          <ol class="test-carousel-indicators">
                                          <li data-target="#testimonial_slide" data-slide-to="0" class="active"></li>
                                          <li data-target="#testimonial_slide" data-slide-to="1"></li>
                                          <li data-target="#testimonial_slide" data-slide-to="2"></li>
                                        </ol>
                                
                            </div>
                            <div class="col-md-8">
                                <div id="testimonial_slide" class="carousel slide testimonial-slide" data-ride="carousel">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="testimonial-box">
                                                <div class="row">
                                                    <!-- <div class="col-md-2">
                                                        <div class="user-pic">
                                                            <img src="img/user1.jpg">
                                                        </div>
                                                        
                                                    </div> -->
                                                    <div class="col-md-12">
                                                        <h4 class="header-4">Leanna Abdelmaged</h4>
                                                        <div class="rattings">
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>

                                                        </div>
                                                        <p class="p-text-1">
                                                            The food was fresh and prepared well. The chef greeted us at the table and was kind enough to give us background on the ingredients and recipes. The wait staff was extremely pleasant and attentive. The atmosphere is great as it wasn't terribly crowded and no blurring music. Lastly, I find the prices very reasonable for the huge portions. I highly recommend this restaurant.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimonial-box">
                                                <div class="row">
                                                   
                                                    <div class="col-md-12">
                                                        <h4 class="header-4">Maya Cheaib</h4>
                                                        <div class="rattings">
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>

                                                        </div>
                                                        <p class="p-text-1">
                                                           One of my favorite restaurants in Abu dhabi. Whenever I invite people, the restaurant will never fail me.I am always pleased with the service and the quality of food that is always customized to meet any need. The chef is very creative and everytime I visit the restaurant I would have the chance to try something new. It is must to try: the risotto ( my favorites the vegetable, spinach and the seafood risotto), the burrata, the CHOCOLATE FONDANT which tastes like heaven, the vegetable pizza, the mocktails (my favorites rossini and bellini), the grilled seafood selection, the risotto with edible gold and truffle,etc.. The restaurant gave me a chance to throw several events in their private rooms (baby shower, graduation, birthdays, and bridal shower) I can guarantee that you will have the best meals and experience of your life. Thank you MANGIAMO.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="testimonial-box">
                                                <div class="row">
                                                   
                                                    <div class="col-md-12">
                                                        <h4 class="header-4">Jenny Parsons</h4>
                                                        <div class="rattings">
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>
                                                            <svg class="ratting rated" xmlns="" width="19.875" height="20" viewBox="0 0 19.875 20">
                                                                <circle class="rcircle" cx="9.938" cy="10" r="8.438"/>
                                                              <ellipse class="rdot" cx="9.938" cy="10.005" rx="2.625" ry="2.625"/>
                                                            </svg>

                                                        </div>
                                                        <p class="p-text-1">
                                                          Oh my word...the best food in Abu Dhabi! The staff are so warm and friendly. Everything was fresh and SO delicious. The pasta melted in my mouth , I thought I had no room for desert till it arrived!!! Home made chocolate fondant..to die for. Well done chef!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                                                               
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                     

                </div>
            </div>
            <div class="test-left-side-img"></div>
            <div class="test-right-side-img"></div>
    </section>

    <!-- ******************************************************* -->
    <!-- ************  Restaurant Inside Section  ************** -->
    <!-- ******************************************************* -->
    <section class="inside_rest_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="inside_div">
                        <h2 class="header-2 text-center">داخل مانجيامو</h2>
                        <p class="p-text-1 text-center">ألقي نظرة على مطعمنا, هنا حيث تجد الأناقة وفخامة المكان, مع الموظفين السعيدين بخدمتك
يقع مانجيامو في نادي القوات المسلحة في قلب أبوظبي ويقدم لكم أجواء فريدة ستجعلك تعود اليها مرارا وتكرارا
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fix">
            <!-- Slider here -->
            <div class="row fix">
                <div class="col-md-12 fix">
                   <div id="inside_slider" class="carousel slide inside-slider" data-ride="carousel">

                       <!-- Wrapper for slides -->
                       <div class="carousel-inner" role="listbox">
                           <div class="item active">
                                <div class="slider-content">
                                    <img src="img/inside-slider-bg-1.jpg">
                                    <h5 class="header-5">Kitchen</h5>
                                </div>
                               
                           </div>
                           <div class="item">
                                <div class="slider-content">
                                    <img src="img/inside-slider-bg-1.jpg">
                                    <h5 class="header-5">Dining</h5>
                                </div>
                               
                           </div>
                           <div class="item">
                                <div class="slider-content">
                                    <img src="img/inside-slider-bg-1.jpg">
                                    <h5 class="header-5">Hotel</h5>
                                </div>
                               
                           </div>
                           
                          
                       </div>
                       <!-- Indicators -->
                            <ol class="inside-carousel-indicators">
                                <li data-target="#inside_slider" data-slide-to="0" class="active"></li>
                                <li data-target="#inside_slider" data-slide-to="1"></li>
                                <li data-target="#inside_slider" data-slide-to="2"></li>
                            </ol> 
                   </div>
                    
                </div>
            
            </div>
            <!-- Slider End -->
        </div>
            
    </section>

     <!-- ******************************************************* -->
    <!-- ************  Instagram Section  ************** -->
    <!-- ******************************************************* -->
    <section class="instagram_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="instagram_div">
                        <h2 class="header-2 text-center">الانستقرام</h2>
                        <p class="p-text-1">
                            تابعوا حسابنا على الانستقرام حتى تبقوا على علم دائم بآخر أطباقنا الشهية
                        </p>
                        <div class="row instra-images">
                            <div class="col-md-3 col-xs-6">
                                <div class="instra-img-show">
                                    <a href="#"><img src="img/instra-img.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="instra-img-show">
                                    <a href="#"><img src="img/instra-img.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="instra-img-show">
                                   <a href="#"><img src="img/instra-img.jpg"></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="instra-img-show">
                                   <a href="#"><img src="img/instra-img.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
    </section>


     <!-- ******************************************************* -->
    <!-- ************  Location Section  ************** -->
    <!-- ******************************************************* -->
    <section class="location_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="location_div">
                        <h2 class="header-2 text-center">موقع المطعم</h2>
                        <div class="map-div">
                            <div id="map"></div>
                            <div class="order-form" id="contact">
                                <form action="" method="post">
                                    <h6>احجز طاولتك الآن</h6>
                                
                                    <input type="text" name="name" class="booking-input" placeholder="الاسم">
                                    <input type="text" name="number" class="booking-input" placeholder="رقم الهاتف">
                                    <input type="text" name="date" class="booking-input date-picker" placeholder="تاريخ الحجز">
                                    <select class="booking-select">
                                        <option value="0">عدد الحاضرين</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    
                                    <button type="submit" class="booking-submit">احجز</button>
                                </form>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
            
    </section>
    
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
                            <li><a href="index.html">لقائمة الرئيسية</a></li>
                            <li><a href="#our_story">قصتنا</a></li>
                            <li><a href="#reservation">لحجوزات</a></li>
                            <li><a href="#menu">قائمة الطعام</a></li>
                            <li><a href="#contact">للتواصل</a></li>
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
    <script src="js/jquery.min.js"></script> <!-- jQuery v3.1.1 -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- Bootstrap v3.3.7 -->
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script> <!-- Bootstrap v3.3.7 -->
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnQhOKfphc09FeAYL9ilJ3SE6idKWlT6M&callback=initMap">
    </script>
    <!--=== Scroll Effects js ===-->
    <script type="text/javascript" src="js/anijs-min.js"></script>
    <script type="text/javascript" src="js/anijs-helper-scrollreveal.min.js"></script>
    
    <!--=== Jquery validator js ===-->
    <script src="js/jquery.validate.min.js"></script>

    <!--=== custom js ===-->
    <script type="text/javascript" src="js/custom.js"></script>
    <!--=== map js ===-->
    <script type="text/javascript" src="js/map.js"></script>
</body>
</html>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#book_now_modal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="book_now_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="order-form">
            <form action="" method="post" id="contact_form">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h6>حجز طاولتك الآن</h6>
            
                <input type="text" name="name" class="booking-input" placeholder="الاسم">
                <input type="text" name="number" class="booking-input" placeholder="رقم الهاتف">
                <input type="text" name="date" class="booking-input date-picker2" placeholder="تاريخ الحجز">
                <select class="booking-select">
                    <option value="0">عدد الحاضرين</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <button type="submit" class="booking-submit" data-dismiss="modal">احجز</button>
            </form>
            <script type="text/javascript">
                $('.date-picker2').datepicker({
                    autoclose: true,
                    todayHighlight: true
                });
            </script>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2ll4IA146YI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
      
    </div>
  </div>
</div>


