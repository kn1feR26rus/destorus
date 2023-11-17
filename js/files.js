$(document).ready(function () {
    var style = 'easeOutExpo';
    var default_left = Math.round($('.menu ul li.active').offset().left - $('.menu ul').offset().left);
    var default_top = $('.menu ul li.active').height()+17; /* 30 - отступ от пункта меню */
    var default_width = $('.menu ul li.active').outerWidth();
    $('#border').css({left: default_left, top: default_top, width: default_width});	
    $('.menu ul li').click(function () {
        left = Math.round($(this).offset().left - $('.menu ul').offset().left);
        width = $(this).outerWidth();
        $('#border').stop(false, true).animate({left: left, width: width},{duration:500, easing: style});	
        $('.menu ul li').removeClass('active');	
        $(this).addClass('active');
    })
    $('.menu ul').mouseleave(function () {
        default_left = Math.round($('.menu ul li.active').offset().left - $('.menu ul').offset().left);
        default_width = $('.menu ul li.active').outerWidth();
        $('#border').stop(false, true).animate({left: default_left, width: default_width},{duration:1500, easing: style});	
    });

    $('#client').click(function() {
       $('#world__title').remove();
       $('.files__window').prepend(`<h2 class="world__title" id="world__title">
       <span class="world__title-decor title-decor">Загрузите</span><br>
       КЛИЕНТ ИГРЫ
     </h2>`)
    });
    $('#updater').click(function() {
        $('#world__title').remove();
        $('.files__window').prepend(`<h2 class="world__title" id="world__title">
        <span class="world__title-decor title-decor">Загрузите</span><br>
        Лаунчер (Updater)
      </h2>`)
    });

    $('.files__choose').click(function() {
        $('.files__btn').not('.active').toggleClass('opened');
        $('.files__btn').click(function() {
            $('.files__btn').removeClass('active');
            $(this).addClass('active');
            $(this).removeClass('opened')
        })
    })
});