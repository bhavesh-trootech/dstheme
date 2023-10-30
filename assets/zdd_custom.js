jQuery(document).ready(function () {

 jQuery('.main_header').hide();
 jQuery('.esp_btn').hide();
 jQuery('.bo_txt').hide();

  jQuery(window).scroll(function() {
  var theta = (jQuery(window).scrollTop() / 200) % Math.PI;
  jQuery(".rotate-text").css({ transform: "rotate(" + theta + "rad)" });
});

  // direct browser to top right away
if (window.location.hash){
    scroll(0,0);
// takes care of some browsers issue
setTimeout(function(){scroll(0,0);},1);
}

  /*******/
initOwlSlider();

function initOwlSlider() {
  jQuery(".real_slider").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    navigation: true,
    nav: true,
    dots: false,
    onInitialized: startProgressBar,
    onTranslate: resetProgressBar,
    onTranslated: startProgressBar
  });

    /*******/
  jQuery('.testi_slider').owlCarousel({
    items: 1,
    loop: true,
    margin:10,
    autoWidth: false,
    autoplay: true,
    autoplayHoverPause: false,
    pagination: true,
    dots: false,
    navigation: true,
    nav: true,
    onInitialized: startProgressBar,
    onTranslate: resetProgressBar,
    onTranslated: startProgressBar
  });
  /*******/

}

function startProgressBar() {
  // apply keyframe animation
  jQuery(".slide-progress").css({
    width: "100%",
    transition: "width 5000ms"
  });
}

function resetProgressBar() {
 jQuery(".slide-progress").css({
    width: 0,
    transition: "width 0s"
  });
}

  /*******/
  jQuery('.realise-slider').owlCarousel({
    items: 1,
    loop: true,
    margin:0,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    pagination: true,
    dots: true,
    navigation: true,
    nav: true
  });
  /*******/

  jQuery('.nos-projets-slider').owlCarousel({
    items: 3,
    loop: true,
    margin:0,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    pagination: false,
    dots: false,
    navigation: true,
    margin: 10,
    nav: true
  });

  /*******/
  jQuery('.parternerListCls .pein_list').owlCarousel({
    items: 1,
    loop: true,
    autoWidth: false,
    autoplay: true,
    mouseDrag: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    transitionStyle: "fade",
    pagination: false,
    dots: false,
    navigation: true,
    nav: true
  });

  /*******/
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 18) {
        jQuery('.main_header').addClass('sticky');
    } else {
        jQuery('.main_header').removeClass('sticky');
    }
  });

  /*******/

  /**** Add scroll class for Rotate button **/
  jQuery(window).bind('scroll', function () {
    if (jQuery(window).scrollTop() > 18) {
        jQuery("body").addClass('rotateBtnInvert');
        jQuery(".scroll_down").fadeOut('slow');
    } else {
        jQuery("body").removeClass('rotateBtnInvert');
        jQuery(".scroll_down").fadeIn('slow');
    }
});

/****End Add scroll class for Rotate button **/

/*** hide bottom rotate button **/
jQuery(window).scroll(function(){
  var threshold = 200; // number of pixels before bottom of page that you want to start fading
  var op = ((jQuery(document).height() - jQuery(window).height()) - jQuery(window).scrollTop()) / threshold;
  if( op <= 0.85 ){
    jQuery(".comm-button").hide();
  } else {
    jQuery(".comm-button").show();
  }
  jQuery(".comm-button").css("opacity", op );
});
/*** hide bottom rotate button **/

  /***Submenu toggle start***/
  jQuery(".menu_toggle").click(function () {
      jQuery("body").toggleClass("toggled_open");
      jQuery('.main_menu .menu-main-menu-container').addClass("menuload");
  });
  /***Submenu toggle close***/

  /***Submenu toggle start***/
  jQuery(".arrow_submenu").click(function () {
      jQuery(this).next(".sub-menu").slideToggle('slow');
      jQuery(this).parent().toggleClass("on");
  });
  /***Submenu toggle close***/

  /***parallax start***/
  jQuery(window).on("load scroll", function() {
     if( jQuery( window ).width() > 1023 ) {
         var parallaxElement = jQuery(".parallax_scroll"),
         parallaxQuantity = parallaxElement.length;
         window.requestAnimationFrame(function() {
           for (var i = 0; i < parallaxQuantity; i++) {
             var currentElement = parallaxElement.eq(i),
               windowTop = jQuery(window).scrollTop(),
               elementTop = currentElement.offset().top,
               elementHeight = currentElement.height(),
               viewPortHeight = window.innerHeight * 1 - elementHeight * 1,
               scrolled = windowTop - elementTop + viewPortHeight;
                 currentElement.css({
                   transform: "translate3d(0," + scrolled * -0.10 + "px, 0)"
                 });
           }
         });
     }
     else {
         jQuery('.parallax_scroll').css('transform','none');
     }
  });
  /***parallax close***/

  /*******/
  jQuery('.accord .accord_content').hide();
  jQuery('.accord .accord_heading').click(function(){
      jQuery(this).siblings('.accord .accord_content').slideToggle('fast');
      jQuery(this).parent().toggleClass('acc_act');
      jQuery(this).parent().siblings().children('.accord_content:visible').slideUp('fast');
      jQuery(this).parent().siblings().children('.accord_content:visible').parent().removeClass('acc_act');
  });
  /*******/

    /***Smooth sroll to anchor id****/


  jQuery(".portfolio-filter-type li a").click(function() {
    jQuery('.portfolio-filter-submenu ul').slideUp();
    var submenu_id=jQuery(this).attr('sub_id');

    if(jQuery(this).parent('li').hasClass('active')){
        jQuery(this).parent('li').removeClass('active');
    }else{
        jQuery(".portfolio-filter-type li").removeClass('active');
        jQuery(this).parent('li').toggleClass('active')
    }

    if (jQuery('#'+submenu_id).is(':visible')){
        jQuery('#'+submenu_id).slideUp();
        jQuery('.portfolio-filter-menu').removeClass('active');
    }else{
        jQuery('#'+submenu_id).slideToggle();
        jQuery('.portfolio-filter-menu').addClass('active');
    }
  });

  /** home video popup  js **/
  jQuery('.video1').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });
  /**End home video popup  js **/

});

/** mobile menu **/
function langmobile(){
if(jQuery(window).width() < 768 ){
jQuery('.lan_esp').appendTo('#site-navigation > div');
}else{
jQuery('.lan_esp').insertAfter('#site-navigation');
}
}
jQuery(document).ready(function(){
langmobile();
parallaxBandMobile();
});
jQuery(window).resize(function() {
  langmobile();
  parallaxBandMobile();
});
/** end mobile menu **/

/*** Devlopment ***/
var page = 2;
jQuery(function($) {
    $('body').on('click', '.load_painting_btn', function() {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': paintData.security
        };

        var maxp = $(this).data('maxp');
        $.post(paintData.ajaxurl, data, function(response) {

            if($.trim(response) != '') {
              $('.pein_list').append(response);

               if(maxp === page)  {
                  $('.painterListMore').hide();
               }
               page++;

            }/* else {
                $('.load_painting_btn').hide();
            }*/
        });
    });
});

var pageCaramic = 2;
jQuery(function($) {
    $('body').on('click', '.load_caramics_btn', function() {
        var data = {
            'action': 'load_ceramiques_posts_by_ajax',
            'page': pageCaramic,
            'security': ceramiquesData.security
        };

       var maxp = $(this).data('maxpcaramics');
        $.post(ceramiquesData.ajaxurl, data, function(response) {
            if($.trim(response) != '') {
                $('.caramic_list').append(response);

                if(maxp === pageCaramic)  {
                  $('.caramicsListMore').hide();
               }
                pageCaramic++;
            }
        });
    });
});

var pagepdfs = 2;
jQuery(function($) {
    $('body').on('click', '.load_pdfs_btn', function() {
        var data = {
            'action': 'load_pdfs_posts_by_ajax',
            'page': pagepdfs,
            'security': pdfsData.security
        };

        var maxp = $(this).data('maxp');

        $.post(pdfsData.ajaxurl, data, function(response) {
            if($.trim(response) != '') {
                $('.fiches-techniques-main').append(response);
                if(maxp === pagepdfs)  {
                  $('.load_pdfs_btn').hide();
               }
                pagepdfs++;
            }
        });
    });
});

//par style category load portfolio ajax script
jQuery(function($) {

  jQuery('.portfolio_category_click1').click(function(event){
    event.preventDefault();
      jQuery('.portfolio_category_click1').removeClass('act');
    jQuery(this).addClass('act');
  var ps = jQuery(this).data('id');
    var current = $('.portfoliopagelink').data('href');
    var action = current.split('?')[0];
    if(jQuery('.portfolio_category_click').hasClass('act')){
    var pp = jQuery('.portfolio_category_click.act').data('id');
    }else{
      var pp = "";
    }

     if(ps !="" || pp !=""){
              var actions = action+'?pp='+pp+'&ps='+ps;
               }else{
                   var actions = action;
               }


              window.history.pushState({href: actions}, '', actions);
              jQuery.ajax({
                  url: actions,
                  type :'GET',
                  beforeSend: function(){

             },
                  success: function (result) {
                      var rs= $(result).find(".portfolio-list-container");
                    $("body .portfolio-list-container").replaceWith(rs);
                  },
                  error: function(err){
                      console.log(err);
                  }
              });
     });

  jQuery('.portfolio_category_click').click(function(event){
    event.preventDefault();
      jQuery('.portfolio_category_click').removeClass('act');
    jQuery(this).addClass('act');

  var pp = jQuery(this).data('id');
  var current = $('.portfoliopagelink').data('href');
    var action = current.split('?')[0];
    if(jQuery('.portfolio_category_click1').hasClass('act')){
    var ps = jQuery('.portfolio_category_click1.act').data('id');
    }else{
      var ps = "";
    }
     if(pp !="" || ps !=""){
              var actions = action+'?pp='+pp+'&ps='+ps;
               }else{
                   var actions = action;
               }


              window.history.pushState({href: actions}, '', actions);
              jQuery.ajax({
                  url: actions,
                  type :'GET',
                  beforeSend: function(){

             },
                  success: function (result) {
                      var rs= $(result).find(".portfolio-list-container");
                    $("body .portfolio-list-container").replaceWith(rs);
                  },
                  error: function(err){
                      console.log(err);
                  }
              });
     });

});
  //End style category load portfolio ajax script
  /***End Devlopment ***/

/****/
jQuery(window).load(function() {


});
/******/

/****home page loader start****/
var element = document.querySelector("body");

  setTimeout(function() {
  element.classList.add("loaded");

 jQuery('.main_header').show(100);
 jQuery('.esp_btn').show(50);
 jQuery('.bo_txt').show(50);

jQuery(function(){
// if we have anchor on the url (calling from other page)
if(window.location.hash){
    // smooth scroll to the anchor id
   jQuery('html,body').animate({
        scrollTop:jQuery(window.location.hash).offset().top + 'px'
        },1000,'swing');
    }
});

  jQuery('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: target.offset().top-90
            }, 1000);
            return false;
        }
    });
  /*******/

        var current = 0;
        jQuery("#primary-menu > li.menu-item").each(function() {
            jQuery(this).addClass("wow fadeInUp").attr("data-wow-delay", current + "00ms");
            current++;
        });
        jQuery('.lan_option').addClass("wow fadeInUp").attr("data-wow-delay", "600ms");
        jQuery('.esp_btn').addClass("wow fadeInUp").attr("data-wow-delay", "700ms");

  jQuery(document).scroll(function() {
        if ( jQuery(document).scrollTop() >= 20 ) {
         jQuery("#primary-menu > li.menu-item").attr('style', 'visibility: visible !important');
         jQuery('.lan_option').attr('style', 'visibility: visible !important');
         jQuery('.esp_btn').attr('style', 'visibility: visible !important');
        }
    });

   /*Wow js*/
  new WOW().init();
  /*Wow js*/
  /** Aos **/
  AOS.init({
  duration: 1200,
  //disable: 'mobile'
});
  /** Aos **/

  }, 5000);

  document.addEventListener("DOMContentLoaded", function(event) {
  window.addEventListener("load", function() {

    // in
    TweenMax.fromTo(".logo_loading_class", 2, { ease: Power2.easeOut, opacity: 0,scale: 1.2 }, { ease: Power2.easeOut, opacity: 1,scale: 1});
    TweenMax.fromTo(".logo_loading_class rect", 2, { ease: Power2.easeOut, y:"100px" }, { ease: Power2.easeOut,  y:"0",    delay: .5});
    TweenMax.fromTo(".erase ", 0, { opacity: 0 }, { opacity: 1,  delay: 1.5});
    TweenMax.fromTo(".erase span", 2.5, { ease: Power2.easeOut, x:"-110%" }, { ease: Power2.easeOut,  x:"110%",  delay: 1.5});

    // out
    TweenMax.to(".logo_loading_class", 0, {
      ease: Power2.easeOut,

      opacity: 0,
      delay: 2
    });
    TweenMax.to(".loader-section", 1, {
      ease: Power1.easeInOut,
      scaleY: 0,
      delay: 2.8
    });

    TweenMax.to(".loader-section-behind", 1, {
      ease: Power1.easeInOut,
      scaleY: 0,
      delay: 3
    });
});

});
/****home page loader close****/

/****inner page loader start****/
var element01 = document.querySelector("body");
 setTimeout(function() {
  element01.classList.add("loaded01");
  }, 3800);

  document.addEventListener("DOMContentLoaded", function(event) {
  window.addEventListener("load", function() {
    TweenMax.to(".loader-section01", 1, {
      ease: Power1.easeInOut,
      scaleY: 0,
      delay: 1
    });

    TweenMax.to(".loader-section-behind01", 1, {
      ease: Power1.easeInOut,
      scaleY: 0,
      delay: 2
    });
    TweenMax.to(".logo_loading_class01", 0, {
      ease: Power2.easeOut,
      opacity:0,
      delay: 2.5
    });
});

});

/****inner page loader close****/


  /*******/
  function parallaxBandMobile(){
  if( jQuery( window ).width() > 1239 ) {
  jQuery('.parallax').jarallax({
    speed: 0.1,
    imgRepeat:'no-repeat'
  });
}
}
  /*******/
