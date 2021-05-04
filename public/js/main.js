/*global $, jquery, alert, console*/
$(document).ready(function () {
    
    'use strict';
    
    
    //FOR NAVBAR RESPONSIVE
    if($(window).width() <= 990 ){
        
    $('.nav .icon-nav, .nav_a ').click(function () {
            $('.nav-links').animate({
                "height" : "toggle"
    
            });
        });
    }
    ///////////////////////////////////
    //FOR NAVBAR ICON ANIMATION
    var counter = 1;
    $('.nav .icon-nav , .nav ul li a').click(function(){
        counter++;
        if( counter %2 == 0 ){
            $('.nav .icon-nav .inSecond').css({
                "transform" : "rotateY(90deg)"
            });
            $('.nav .icon-nav .inFerst').css({
                "marginBottom" : "-9px",
                "transform" : "rotate(-45deg)"
            });
            $('.nav .icon-nav .inThird').css({
                "marginTop" : "-9px",
                "transform" : "rotate(45deg)"   
            });
            
        }else{
            $('.nav .icon-nav .inSecond').css({
                "transform" : "rotateY(0deg)"
            });
            $('.nav .icon-nav .inFerst').css({
                "margin" : "6px 0",
                "transform" : "rotate(0deg)"
            });
            $('.nav .icon-nav .inThird').css({
                "margin" : "6px 0",
                "transform" : "rotate(0deg)"   
            });
        }
    })
    /////////////////////////////////////////////
    //FOR ANIMATION NAVNAR
    
    $(window).on("scroll",function(){
        if( $(window).scrollTop() == 0  && $(window).width() < 990) {
            
            $('.nav').css({
                "height":"70px",
            })
            $('.nav .nav-links').css({
                "top":"70px",
            })
        }else{
            $('.nav').css({
                "height":"60px",
            });
            $('.nav .nav-links').css({
                "top":"60px",
            })
        }
    });
    $(window).on("scroll",function(){
        if( $(window).scrollTop() == 0  && $(window).width() > 990) {
            $('.nav').css({
                "paddingTop":"40px",
                "paddingBottom":"250px",
                "background": "transparent" ,
                "height":"70px",
            });
            $('.nav ul li a').css({
                "color":"#fff",
            });
            $('.nav .ulNotindex li a').css({
                "color":"#000",
            });
            $('.nav .notIndex img ').attr("src", "https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Jevelin_logo_dark.png");
        }else{
            $('.nav').css({
                "paddingTop":"10px",
                "paddingBottom":"0px",
                "background": "#161719" ,
                "height":"60px !important",
            });
            $('.nav ul li a').css({
                "color":"#fff",
            })
            $('.nav .logo img').attr("src", "https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Jevelin_logo.png");
            
        }
    });
    if($(window).width() < 990){
        $('.nav ul li a').css({
            "color":"#fff",
        })
        $('.nav .logo img').attr("src", "https://cdn.jevelin.shufflehound.com/wp-content/uploads/sites/44/2020/09/Jevelin_logo.png");
    }
   
    /////////////////////////////////////////
    //FOR TEAM SECTION
    var count = 0;
    
    $('.moreButton').click(function() {
        
        $('.more').slideToggle();
        
        count++;
        if ( count %2 == 0 ){
            
            $('.team .content button i').css({
                "transform" : "rotate(0deg)"
            });
            
        }else{
            
            $('.team .content button i').css({
                "transform" : "rotate(135deg)"
            });
        }
    })
    
    /*************************************************SCROLL TO ELEMNT**************/
    $('.nav_a ').click(function(e){
        e.preventDefault();
        $('html ,body').animate({
                scrollTop:$('#'+$(this).data('scroll')).offset().top 
            },2000);
        
    });
        
   /*************************************************SCROLL TO ELEMNT**************/
   /*************************************************SCROLL_TO_TOP**************/
    $(window).on("scroll",function(){
        if($(window).scrollTop() > 900){
            $('.scrollToTop').fadeIn(1000)
        }else{
            $('.scrollToTop').fadeOut(1000)
        }
    })
    $('.scrollToTop').click(function(){
        $('html,body').animate({
            scrollTop : '0'
        },2000)
    })
   /*************************************************SCROLL_TO_TOP**************/

    
   jQuery('.quantity').each(function() {
    var spinner = jQuery(this),
      input     = spinner.find('input[type="number"]'),
      btnUp     = spinner.find('.quantity-up'),
      btnDown   = spinner.find('.quantity-down'),
      min       = input.attr('min'),
      max       = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue >= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });
    
    
    
$('.payMethode input').on("click",function(){

    $('.payMethode .box').slideUp(400);
    $(this).siblings('.box').slideDown(400);

})

$('.price i').on("click",function(){

    $('.your_order_product').slideToggle(400);

})
    
    
    
    
    
    
    
    
    
    
    
});