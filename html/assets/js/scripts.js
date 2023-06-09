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
  app.accordion();
  app.slideCustomer();
  app.promoDoc();
  app.loadMore();

};

app.isMobile = function () {

  return window.matchMedia('(max-width: ' + spBreak + 'px)').matches;

};

app.spMenu = function () {
  if ($(window).width() <= 767) {
    $('.js-menu').click(function () {
      $(this).toggleClass('open');
      if($(this).hasClass('open')) {
        $('.c-header_nav').addClass('show');
      } else {
        $('.c-header_nav').removeClass('show');
      }
    })
    $('header .nav-menu > li.has-menu, header .nav-menu > li.menu-item-has-children').click(function () {
      var _this = $(this);
      _this.toggleClass('is-active');
      if (_this.hasClass('is-active')) {
        _this.children('.sub-menu').slideDown();
      } else {
        _this.children('.sub-menu').slideUp();
      }
    })
  }
  $('.btn-search a').click(function () {
    $(this).parent().stop().toggleClass('is-active');
  })
  $('.js-close, .overlay').click(function () {
    $('.js-menu').removeClass('open')
    $('.c-header_nav').removeClass('show');
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
  $(window).on('load resize', function () {
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
  $(window).on('load resize', function() {
    if ($(window).width() < 768) {
      if ($('.js-service-slide').hasClass('slick-initialized'))
      $('.js-service-slide').slick('unslick');
      return
    }
  });
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
  $(".zoom-gallery").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: !0,
      navigateByImgClick: !0,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(e) {
        return e.el.attr("title")
      }
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
      opener: function(element) {
        return element.find('img');
      }
    }
  });
  $('.popup-with-form').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',

    // When elemened is focused, some mobile browsers in some cases zoom in
    // It looks not nice, so we disable it:
    callbacks: {
      beforeOpen: function() {
        if($(window).width() < 700) {
          this.st.focus = false;
        } else {
          this.st.focus = '#name';
        }
        $('body').addClass('iframe-modal');
      },
      beforeClose: function() {
        // Callback available since v0.9.0
        $('body').removeClass('iframe-modal');
      },
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
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        }
      },
    ]
  });
}

app.promoDoc = function () {
  $('.js-doctors').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    swipe: false,
    asNavFor: '.js-doc-thumb'
  });
  $('.js-doc-thumb').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.js-doctors',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        }
      },
    ]
  });
}

app.cusSlide = function () {
  if ($('.js-cus-slide').length) {
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
            dots: true,
          }
        },
      ]
    });
  }
}

app.paperSlide = function () {
  if ($('.js-paper-slide').length) {
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

app.slideCustomer = function () {
  if ($('.js-demo').length) {
    $('.js-demo').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
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
  if ($(window).width() < 768) {
    $('.js-news').slick({
      slidesToShow:1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
    });
  }
}

app.loadMore = function () {
  if ($('.js-loadmore').length) {
    $(".js-loadmore > li").slice(0, 2).show();
    $(".btn-more").on('click', function (e) {
        e.preventDefault();
        $(".js-loadmore > li:hidden").slideDown();
    });
  }
}

app.mHeight = function () {
  if ($('.js-height').length) {
    $('.js-height').matchHeight();
  }
}

app.smoothScroll = function () {
  $('a[href*=\\#]:not([href=\\#])').click(function () {
    var headerHeight = $('header').outerHeight();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - headerHeight
        }, 500);
        return false;
      }
    }
  });
}

app.showBox = function () {
  if ($('.js-box').length) {
    $('.js-box .btn-hide').click(function () {
      $(this).stop().toggleClass('is-active');
      if ($(this).hasClass('is-active')) {
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
  if ($('.js-slide-cer').length) {
    var swiper = new Swiper(".js-slide-cer", {
      slidesPerView: "auto",
      spaceBetween: 8,
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev'
      },
      breakpoints: {
        768: {
          spaceBetween: 14,
        },
      },
    });
  }
}

app.accordion = function () {
  if ($('.l-faq').length) {
    $('.l-faq .m-btn').click(function () {
      $(this).toggleClass('active');
      if ($(this).hasClass('active')) {
        $(this).children('a').text('Thu gọn');
        $(this).parent().next('.answer').stop().slideDown();
      } else {
        $(this).children('a').text('Trả lời');
        $(this).parent().next('.answer').stop().slideUp();
      }
    })
  }
}

$(function () {

  app.init();

});