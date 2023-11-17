$(document).ready(function () {

  $(function () {
    $("#accordion").accordion({
      heightStyle: "content",
      active: false, 
      collapsible: true
    });
  });

  $(".register__steps-btn.disabled").prop("disabled", true);
  $(".mobile-burger").click(function () {
    $(".mobile__menu").addClass("opened");
    $("html, body").removeClass("overflowed");
  });
  $(".mobile__close").click(function () {
    $(".mobile__menu").removeClass("opened");
    $("html, body").removeClass("overflowed");
  });

  $(".header__lang").click(function () {
    $(".modal__bg").addClass("active");
    $(".modal__lang").addClass("active");
    $("html, body").addClass("overflowed");
  });

  $(".modal__close, .modal__bg").click(function () {
    $(".modal__bg").removeClass("active");
    $(".modal__lang").removeClass("active");
    $("html, body").removeClass("overflowed");
  });

  $(".modal__lang-item").click(function () {
    $(".modal__lang-item").removeClass("active");
    $(this).addClass("active");
  });

  $('.kits__pack-item').mouseenter(function(e){
    var video = $(this).find('.player')
    $(video).get(0).play();
  });
  $('.kits__pack-item').mouseleave(function(e){
    var video = $(this).find('.player')
    $(video).get(0).pause();
  });


  $(".world__slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: true,
        },
      },
      {
        breakpoint: 500,
        settings: {
          arrows: false,
          dots: true,
        },
      },
    ],
  });
  $("#kits__slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".world__text-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 800,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $(".social__fb-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    draggable: false,
    speed: 800,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: "140px",
          slidesToShow: 1,
          dots: true,
          adaptiveHeight: true,
          autoplay: true,
          autoplaySpeed: 1500,
        },
      },
      {
        breakpoint: 500,
        settings: {
          centerMode: false,
          slidesToShow: 1,
          arrows: true,
          dots: true,
          adaptiveHeight: true
        },
      },
    ],
  });

      $(".social__inst-slider")
      .not(".slick-initialized")
      .slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        draggable: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              centerMode: true,
              autoplay: true,
              autoplaySpeed: 1500,
              speed: 800,
              centerPadding: "140px",
              slidesToShow: 1,
              dots: true,
              arrows: true,
            },
          },
          {
            breakpoint: 500,
            settings: {
              centerMode: false,
              slidesToShow: 1,
              arrows: true,
              dots: true,
            },
          },
        ],
      });

  
  $(".social__nav-tg").click(function () {
    $(".social__slider").removeClass('active');
    $(".social__tg-slider").addClass('active');
    var tikTok = $('.tiktok-embed').find('iframe')
    $(tikTok).on("load", () => {
      let iframeHead = $(tikTok).find("#embed-profile-container");
      console.log($(iframeHead))
      $(iframeHead).addClass('SUKA')
      $(iframeHead).css('width', '100%')
  });
  });

  $(".social__nav-fb").click(function () {
    $(".social__slider").removeClass('active');
    $(".social__fb-slider").slick('refresh');
    $(".social__fb-slider").addClass('active');
  });

  $(".social__nav-inst").click(function () {
    $(".social__slider").removeClass('active');
    $(".social__inst-slider").slick('refresh');
    $(".social__inst-slider").addClass('active');
  });

  var style = "easeOutExpo";

  $(".social__item-url").click(function () {
    $(".social__item-url").removeClass("active");
    $(this).addClass("active");
  });

  var default_left = Math.round(
    $(".social__nav ul li.active").offset().left -
      $(".social__nav").offset().left
  );
  var default_top = $(".social__nav ul li.active").height() + 17;
  var default_width = $(".social__nav ul li.active").outerWidth();
  $("#animate-block").css({
    left: default_left,
    top: default_top,
    width: default_width,
  });
  $(".social__nav ul li")
    .click(function () {
      $(".social__nav ul li").removeClass("active");
      $(this).addClass("active");
      left = Math.round(
        $(this).offset().left - $(".social__nav").offset().left
      );
      width = $(this).outerWidth();
      $("#animate-block")
        .stop(false, true)
        .animate(
          { left: left, width: width },
          { duration: 700, easing: style }
        );
    })
  $(".social__nav").mouseleave(function () {
    default_left = Math.round(
      $(".social__nav ul li.active").offset().left -
        $(".social__nav").offset().left
    );
    default_width = $(".social__nav ul li.active").outerWidth();
    $("#animate-block")
      .stop(false, true)
      .animate(
        { left: default_left, width: default_width },
        { duration: 1500, easing: style }
      );
  });
});
