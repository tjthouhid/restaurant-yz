(function($){
	"use strict";
  var vid = document.getElementById("bgvid");



    /**
     * ----------------------------------------------
     * Nav Scroll
     * ----------------------------------------------
     */
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >=40) {
             $(".logo-nav").addClass("nav-fixed");
         } else {
             $(".logo-nav").removeClass("nav-fixed");
         }
    });
    $(".scroll-down-btn").on("click",function(e){
          e.preventDefault();
          // Getting the height of the document
          var n = $("header").height();
          
          $('html, body').animate({ scrollTop: n }, 500);
    })

	/**
    * ----------------------------------------------
    * Side Menu
    * ----------------------------------------------
    */
    
    var menuSideBar=$("#menu-sideBar");

    $(".menu-openbtn").on("click",function(){
      menuSideBar.css("width","278px");
    });

    $(".menu-closebtn").on("click",function(){
      menuSideBar.css("width","0px");
    });

    /*
    * ----------------------------------------------
    * Header Curosel
    * ----------------------------------------------
    */

    var $carousel = $('#head-text-slide');
      $carousel.carousel({
         interval: 2000
       });

  

    var handled=false;//global variable


      $carousel.bind('slide.bs.carousel', function (e) {
          var current=$(e.target).find('.item.active');
         
          var indx=$(current).index();

          if((indx+2)>$('.carousel-indicators li').length)
              indx=-1
           if(!handled)
           {
            //$(".pagin-cur h3 span").text(indx+2+"/");
              $('.carousel-indicators li').removeClass('active')
              $('.carousel-indicators li:nth-child('+(indx+2)+')').addClass('active');
           }
           else
           {
              handled=!handled;//if handled=true make it back to false to work normally.
           }
      });

       $(".carousel-indicators li").on('click',function(){
         //Click event for indicators
         $(this).addClass('active').siblings().removeClass('active');
         //remove siblings active class and add it to current clicked item
         handled=true; //set global variable to true to identify whether indicator changing was handled or not.
      });

      //Testimonial Slider 
      
      var $carousel_testi = $('#testimonial_slide');
      $carousel_testi.carousel({
         interval: 2000
       });

      var handled2=false;//global variable
      $carousel_testi.bind('slide.bs.carousel', function (e) {
          var current2=$(e.target).find('.item.active');
         
          var indx2=$(current2).index();

          if((indx2+2)>$('.test-carousel-indicators li').length)
              indx2=-1
           if(!handled2)
           {
            //$(".pagin-cur h3 span").text(indx+2+"/");
              $('.test-carousel-indicators li').removeClass('active')
              $('.test-carousel-indicators li:nth-child('+(indx2+2)+')').addClass('active');
           }
           else
           {
              handled2=!handled2;//if handled=true make it back to false to work normally.
           }
      });

     
      $(".test-carousel-indicators li").on('click',function(){
         //Click event for indicators
         $(this).addClass('active').siblings().removeClass('active');
         //remove siblings active class and add it to current clicked item
         handled2=true; //set global variable to true to identify whether indicator changing was handled or not.
      });
      
      //Inside Slider 

      var $carousel_inside = $('#inside_slider');
      $carousel_inside.carousel({
         interval: 2000
       });

      var handled3=false;//global variable
      $carousel_inside.bind('slide.bs.carousel', function (e) {
          var current3=$(e.target).find('.item.active');
         
          var indx3=$(current3).index();


          if((indx3+2)>$('.inside-carousel-indicators li').length)
              indx3=-1
           if(!handled3)
           {
            //$(".pagin-cur h3 span").text(indx+2+"/");
              $('.inside-carousel-indicators li').removeClass('active')
              $('.inside-carousel-indicators li:nth-child('+(indx3+2)+')').addClass('active');
           }
           else
           {
              handled3=!handled3;//if handled=true make it back to false to work normally.
           }
      });

     
      $(".inside-carousel-indicators li").on('click',function(){
         //Click event for indicators
         $(this).addClass('active').siblings().removeClass('active');
         //remove siblings active class and add it to current clicked item
         handled3=true; //set global variable to true to identify whether indicator changing was handled or not.
      });
      
      // $(".video-play-div").on("click",function(e){
      //   e.preventDefault();
      //   if (vid.paused) {
      //     vid.play();
      //   }else{ 
      //       vid.pause();
      //    }
         
      //   //vid.play();
      // });
      $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
      });
      $(".show-more").on("click",function(e){
        e.preventDefault();
        var dis=$(this);
        if(dis.hasClass('showed')){
          dis.closest('.single-menu-bar').find(".not-show").css("display","none");
          dis.removeClass('showed');
          $('html,body').animate({scrollTop:dis.offset().top},1000);
          dis.html("View More");

          
        }else{
          dis.closest('.single-menu-bar').find(".not-show").css("display","block");
          dis.addClass('showed');
          $('html,body').animate({scrollTop:dis.offset().top},1000);
          dis.html("View Less");
          
        }
       
        
      });


      // jQuery Validation
      $("#contact_form").validate({
        // if valid, post data via AJAX
        submitHandler: function(form) {
          $.post("send.php", { uname: $("#uname").val(), uphone: $("#uphone").val(), uselect: $("#uselect").val() }, function(data) {
            $('.send-result').html(data);
            $('.send-result').fadeIn(1000);
            $('.send-result').slideUp(3000);
            $("#contact_form")[0].reset()

          });
        },
        // all fields are required
        rules: {
          name: {
            required: true
          },
          number: {
            required: true
          },
          date: {
            required: true
          },
          uselect: {
            required: true,
            valueNotEquals :'-1'
          }
        }
      });


      
     



})(jQuery); 




