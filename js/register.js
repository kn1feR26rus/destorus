$(document).ready(function () {
  $('.register__show-pass').click(function() {
    $(this).toggleClass('show')
    if ($(this).hasClass('show')) {
      $('.register__pass-input').attr('type', 'text');
    } else {
      $('.register__pass-input').attr('type', 'password');
    }
  })
  var style = "easeOutExpo";
  $("#register-next").on("click", function () {
    var nextBlock = $(".register__step.active").next("").eq(0).get(0);
    var prevBlock = $(".register__step")
      .prev(".register__step.active")
      .eq(0)
      .get(0);
    $(nextBlock).addClass("active").show();
    $(prevBlock).removeClass("active").hide();
    var currentBlock = $(nextBlock).get(0);
    var bonusItem = $(".register__bonus-item");

    if ($(currentBlock).hasClass("register__step2")) {
      $(".register__stepts-line").addClass("active");
      $(".register__stepts-item2").addClass("active");
      $("#registr-back").removeClass("disabled");
      $("#registr-back").addClass("active");
      for (let i = 0; i < bonusItem.length - 2; i++) {
        var item = bonusItem[i];
        $(item).removeClass("locked");
      }
    } else if ($(currentBlock).hasClass("register__step3")) {
      $("#register-next").addClass("disabled");
      $("#register-next").prop("disabled",true);
      for (let i = 0; i < bonusItem.length; i++) {
        var item = bonusItem[i];
        $(item).removeClass("locked");
      }
      $(".register__stepts-item").addClass("active");
    } else {
      $(".register__stepts-line").removeClass("active");
      $(".register__stepts-item2").removeClass("active");
      $("#registr-back").addClass("disabled");
    }

    var default_left = Math.round(
      $(".menu ul li.active").offset().left - $(".menu ul").offset().left
    );
    var default_top =
      $(".menu ul li.active").height() + 17; /* 30 - отступ от пункта меню */
    var default_width = $(".menu ul li.active").outerWidth();
    $("#border").css({
      left: default_left,
      top: default_top,
      width: default_width,
    });
    $(".menu ul li")
      .click(function () {
        left = Math.round($(this).offset().left - $(".menu ul").offset().left);
        width = $(this).outerWidth();
        $(".menu ul li").removeClass("active");
        $(this).addClass("active");
        $("#border")
          .stop(false, true)
          .animate(
            { left: left, width: width },
            { duration: 500, easing: style }
          );
      })
  });

  $('#registr-back').on('click', function() {
    var prevBlock = $(".register__step.active").prev("").eq(0).get(0);
    var currentBlock = $(".register__step.active")

      var bonusItem = $(".register__bonus-item");
      $(prevBlock).addClass('active').show();
      $(currentBlock).removeClass('active').hide();
    console.log($(prevBlock))
    console.log($(currentBlock))
     if ($(currentBlock).hasClass("register__step3")) {
      $(".register__stepts-line2").removeClass("active");
      $(".register__stepts-item3").removeClass("active");
      $('#register-next').removeClass("disabled");
      $("#register-next").addClass("active");
      for (let i = 0; i < bonusItem.length; i++) {
        var item = bonusItem[i];
        $(item).addClass("locked");
      }
      for (let i = 0; i < bonusItem.length - 2; i++) {
        var item = bonusItem[i];
        $(item).removeClass("locked");
      }
    }  

    else if ($(currentBlock).hasClass("register__step2")) {
      $(".register__stepts-line").removeClass("active");
      $(".register__stepts-item2").removeClass("active");
      $("#registr-back").addClass("disabled");
      $("#registr-back").removeClass("active");
      $('#register-next').removeClass("disabled");
      $("#register-next").addClass("active");
      for (let i = 0; i < bonusItem.length; i++) {
        var item = bonusItem[i];
        $(item).addClass("locked");
      }
      for (let i = 0; i < bonusItem.length - 5; i++) {
        var item = bonusItem[i];
        $(item).removeClass("locked");
      }
    }

    var default_left = Math.round(
      $(".menu ul li.active").offset().left - $(".menu ul").offset().left
    );
    var default_top =
      $(".menu ul li.active").height() + 17; /* 30 - отступ от пункта меню */
    var default_width = $(".menu ul li.active").outerWidth();
    $("#border").css({
      left: default_left,
      top: default_top,
      width: default_width,
    });
    $(".menu ul li")
      .click(function () {
        left = Math.round($(this).offset().left - $(".menu ul").offset().left);
        width = $(this).outerWidth();
        $(".menu ul li").removeClass("active");
        $(this).addClass("active");
        $("#border")
          .stop(false, true)
          .animate(
            { left: left, width: width },
            { duration: 1000, easing: style }
          );
      })
  });
});
