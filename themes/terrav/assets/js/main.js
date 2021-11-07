(function($) {
var windowWidth = $(window).width();
var windowWidth_1920 = $('.page-body-cntlr').width();


$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

if( $('.hamburger-cntlr').length ){
  $('.hamburger-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if(windowWidth <=767){
    if( $('li.menu-item-has-children > a').length ){
      $('li.menu-item-has-children > a').click(function(e){
       event.preventDefault();
       $(this).next().slideToggle(300);
       $(this).parent().toggleClass('sub-menu-arrow');
     });
    }
}


	
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


/*start of Rannojit*/



/*start of kashob*/

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

// if (windowWidth <= 767){
//     if( $('.DienstDetailsSlider').length ){
//       $('.DienstDetailsSlider').slick({
//         dots: true,
//         arrows: false,
//         infinite: false,
//         autoplay: false,
//         autoplaySpeed: 4000,
//         speed: 700,
//         slidesToShow: 1,
//         slidesToScroll: 1
//       });
//     }
//   }

if (windowWidth <=768){
  if( $('.DienstDetailsSlider').length ){
      $('.DienstDetailsSlider').slick({
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
  

/*start of noyon*/
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

/*start of shariful*/



/*start of momin*/
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

/*start of johir*/
$('.tv-select select').select2();
$('.select-2-cntlr').select2();

// start of niaz

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

new WOW().init();

})(jQuery);