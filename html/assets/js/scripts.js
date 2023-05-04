var app = app || {};
var spBreak = 767;

app.init = function () {

  app.mvTop();
  app.videoClip();
  app.serviceSlide();
  app.docSlide();
  app.cusSlide();
  app.paperSlide();
  app.mHeight();
  app.spMenu();
  app.headerFix();
  app.smoothScroll();
  app.showBox();
  app.slideCer();

};

app.isMobile = function () {

  return window.matchMedia('(max-width: ' + spBreak + 'px)').matches;

};

app.spMenu = function () {
  if($(window).width() <= 767) {
    $('.js-menu').click(function() {
      $(this).toggleClass('open');
      $('.c-header_nav').slideToggle();
    })
    $('header .nav-menu > li.has-menu').click(function(){
      var _this = $(this);
      _this.toggleClass('is-active');
      if(_this.hasClass('is-active')) {
        _this.children('.sub-menu').slideDown();
      } else {
        _this.children('.sub-menu').slideUp();
      }
    })
  }
  $('.btn-search').click(function() {
    $(this).stop().toggleClass('is-active');
  })
}

app.mvTop = function () {
  if ($('.js-mv').length) {
    $('.js-mv').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      dots: false,
      arrows: false
    });
  }
}

app.headerFix = function () {
  $(window).on('load resize', function() {
    var headHeight = $('header').outerHeight();
    $('main').css('padding-top', headHeight);
  })
}

app.serviceSlide = function () {
  if ($('.js-service-slide').length) {
    $('.js-service-slide').slick({
      // slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 500,
      dots: false,
      centerMode: true,
    });
  }
}

app.videoClip = function () {
  $(".vidplay").magnificPopup({
    type: 'iframe',
    iframe: {
      markup: '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        '</div>',

      patterns: {
        youtube: {
          index: 'youtube.com/',

          id: 'v=',
          src: '//www.youtube.com/embed/%id%?autoplay=1'
        },
        vimeo: {
          index: 'vimeo.com/',
          id: '/',
          src: '//player.vimeo.com/video/%id%?autoplay=1'
        },
        gmaps: {
          index: '//maps.google.',
          src: '%id%&output=embed'
        }
      },
      srcAction: 'iframe_src',
    }
  });
}

app.docSlide = function () {
  $('.js-doc-slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    swipe: false,
    asNavFor: '.js-doc-slide-thumb'
  });
  $('.js-doc-slide-thumb').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.js-doc-slide',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
    ]
  });
}

app.cusSlide = function () {
  if($('.js-cus-slide').length) {
    $('.js-cus-slide').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 960,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          }
        },
      ]
    });
  }
}

app.paperSlide = function () {
  if($('.js-paper-slide').length) {
    $('.js-paper-slide').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
          }
        },
      ]
    });
  }
}

app.mHeight = function () {
  if($('.js-height').length) {
    $('.js-height').matchHeight();
  }
}

app.smoothScroll = function () {
  $('a[href*=\\#]:not([href=\\#])').click(function() {
    var headerHeight = $('header').outerHeight();
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - headerHeight
        }, 0);
        return false;
      }
    }
  });
}

app.showBox = function () {
  if($('.js-box').length) {
    $('.js-box .btn-hide').click(function(){
      $(this).stop().toggleClass('is-active');
      if($(this).hasClass('is-active')) {
        $(this).parent().next('.l-anchors').slideDown();
        $(this).children('span').text('Ẩn');
      } else {
        $(this).parent().next('.l-anchors').slideUp();
        $(this).children('span').text('Hiện');
      }
    })
  }
}

app.slideCer = function () {
  if($('.js-slide-cer').length) {
    var swiper = new Swiper(".js-slide-cer", {
      slidesPerView: "auto",
      spaceBetween: 14,
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev'
      }
    });
  }
}

$(function () {

  app.init();

});