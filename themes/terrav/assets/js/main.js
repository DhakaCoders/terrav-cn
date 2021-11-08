(function($) {
var windowWidth = $(window).width();
var windowWidth_1920 = $('.page-body-cntlr').width();


$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});





	
if($("ul.slick-dots li").length == 1){
   $("ul.slick-dots").hide();
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();




if( $('.contact-form-wrp').length ){
  $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}

if (windowWidth <= 767){
    if( $('.gallerySlider').length ){
      $('.gallerySlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }

if (windowWidth <= 767){
    if( $('.gallerySlider2').length ){
      $('.gallerySlider2').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 2,
        slidesToScroll: 1
      });
    }
  }

if (windowWidth <= 767){
    if( $('.PdctPgniSlider2').length ){
      $('.PdctPgniSlider2').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }


if (windowWidth <=768){
  if( $('.dienstDetailsSlider').length ){
      $('.dienstDetailsSlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }
if( $('.scrollto2').length ){
  $('.scrollto2').on('click', function(e){
    e.preventDefault();
    var togo = $(this).data('to');
    goToByScroll(togo, 100);
  });
}
function goToByScroll(id, offset){
  if(id){
    // Remove "link" from the ID
    id = id.replace("link", "");
    // Scroll
    $('html,body').animate(
      {scrollTop: $(id).offset().top - offset},
      500);
  }
}

/* custom sidebar */
if( $('#customSidebar').length ){
    var windowWidth_1920 = $('.page-body-cntlr').outerWidth();
    var containerRightWidth = $('#customSidebarWrap').offset().left;
    var col2inw = $('#customSidebarWrap').innerWidth();
    //$('#customSidebar').css("left", containerRightWidth);
    $('#customSidebar').css("max-width", col2inw);
    
    function containerRightWidthCal(){
      var windowWidth_1920 = $(window).width();
      var containerWidth = $('.page-body-cntlr').outerWidth();
        var containerRightWidth = $('#customSidebarWrap').offset().left;
        var col2inw = $('#customSidebarWrap').innerWidth();
        // $('#customSidebar').css("left", containerRightWidth);
        $('#customSidebar').css("max-width", col2inw);
    }
    containerRightWidthCal();
    $(window).on('resize', function(){
      containerRightWidthCal();
    });
    
    if( windowWidth_1920 > 767 ){
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            if( $('#customSidebar').length ){

                var boxh = $('#customSidebar').height();
                var ftrtop = $(".footer-wrp").offset().top;
                var ftrx = (ftrtop - boxh) -200 ;
                if( scroll < ftrx ){
                    $('#customSidebar').css('top', scroll);
                    $('#customSidebar').addClass('customSidebar-position');
                }
                if( scroll <= 100){
                  $('#customSidebar').removeClass('customSidebar-position');
                }
            }
        });
    }
}
  
  

 $(window).scroll(function() { 
    var scroll = $(window).scrollTop();   
    if (scroll >= 100) {
        $('.header-sticky').addClass('fixed-hdr');
    } else {
        $('.header-sticky').removeClass('fixed-hdr');
    }  
});

 if( $('.hamburgar-cntlr').length ){
  $('.hamburgar-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if(windowWidth <=1199){
    if( $('li.menu-item-has-children').length ){
      $('li.menu-item-has-children').click(function(){
       $(this).find('.sub-menu').slideToggle(300);
       $(this).toggleClass('sub-menu-arrow');
     });
    }
}



if( $('.scrollto').length ){
  $('.scrollto').on('click', function(e){
    e.preventDefault();
    var togo = $(this).data('to');
    goToByScroll(togo, 0);
  });
}
function goToByScroll(id, offset){
  if(id){
    // Remove "link" from the ID
    id = id.replace("link", "");
    // Scroll
    $('html,body').animate(
      {scrollTop: $(id).offset().top - offset},
      500);
  }
}

  function bannerheight(){
      var windowWidth = $(window).width();
      var windowHeight = $(window).height();
      var headerHight = $('.header').height();
      var bnrHeight = (windowHeight - headerHight);
      if (windowWidth > 1199){
        $('.hm-banner-desc-cntlr').css('height', bnrHeight);
      }
}
  bannerheight();
  $(window).resize(function(){
    bannerheight();
  });


 // if (windowWidth >= 767) {
function leftWidth(){
    var windowWidth = $(window).width();
    var containerwidth = $(".container").width();
    var lefttoconWidth = ((windowWidth-containerwidth)/2);
    var mradd = lefttoconWidth+1;
    $(".lft-grey-bg").css({
      "width":mradd,
    });
  }
  leftWidth();
  $(window).resize(function(){
    leftWidth();
  });

  if (windowWidth <= 767) {
  if( $('.hmProcessSlider').length ){
      $('.hmProcessSlider').slick({
        dots: false,
        arrows:false,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
  }
}


$('.tv-select select').select2();
$('.select-2-cntlr').select2();




 if (windowWidth <= 767) {
  if( $('.FlProductSlider').length ){
      $('.FlProductSlider').slick({
        dots: false,
        arrows:false,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: true
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
        ]
      });
  }
}

 if (windowWidth <= 767) {
  if( $('.PdctPgniSlider').length ){
      $('.PdctPgniSlider').slick({
        dots: false,
        arrows:false,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: true
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
        ]
      });
  }
}


$(".dft-fl-btn" ).each(function( index ) {
  var color = $(this).data('color');
  var bg = $(this).data('bg');
  var border = $(this).data('border');
  $(this).css('color', color);
  $(this).css('background', bg);
  $(this).css('border-color', border);
  $(this).on('mouseenter', function(){
    if( bg != ''){
      $(this).css('background', 'transparent');
      $(this).css('color', bg);
    }
    if( bg == ''){
      $(this).css('background', border);
      $(this).css('color', '#fff');
    }
  });
  $(this).on('mouseleave', function(){
    if( bg != ''){
      $(this).css('background', bg);
      $(this).css('color', color);
    }
    if( bg == ''){
      $(this).css('background', 'transparent');
      $(this).css('color', border);
    }
  });
});



new WOW().init();

})(jQuery);