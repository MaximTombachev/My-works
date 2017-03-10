$(document).ready(function () {
  $('.bx-slider').bxSlider({
  nextText: '',
  prevText: '',
  nextSelector: '.bx-nav__next',
  prevSelector: '.bx-nav__prev',
  pagerCustom: '.bx-dots'
  });
    $('.slider-goods').bxSlider({
        controls: false,
        pagerCustom: '.color-pager',
        mode: 'fade'
    });
     $('.content-tabs li').click(function () {
        var tabName = $(this).attr('show-tab');
        $(this).addClass('active').siblings().removeClass('active');
        $('.content-tabs__item.' + tabName).addClass('active').siblings().removeClass('active');
    }); 
      function sandwich(clickEl, openEl) {
        $(document).on('click', clickEl, function () {
            $(this).toggleClass('active');
            if ($(openEl).is(':visible')) {
                $(openEl).slideUp();
            } else {
                $(openEl).slideDown();
            }
        });
    }
    sandwich('.menu-wrapper .menu-sandwich', '.menu-list');
    sandwich('main .menu-sandwich', 'aside');
    sandwich('footer .menu-sandwich', '.footer-nav');
    $(document).on('click', '.aside-menu .title', function () {
            var a = $(this).parent().find('.aside-menu__block');
            if ($(a).is(':visible')) {
                $(a).slideUp();
            } else {
                $(a).slideDown();
            }
        });
   YMaps.jQuery(function () {
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);
        map.addControl(new YMaps.TypeControl());
        map.addControl(new YMaps.Zoom());
        // Создает метку в центре Москвы
        var placemark = new YMaps.Placemark(new YMaps.GeoPoint(37.609218, 55.753559));

        // Устанавливает содержимое балуна
        placemark.name = "Москва";
        placemark.description = "Столица Российской Федерации";

        // Добавляет метку на карту
        map.addOverlay(placemark); 
        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        map.setCenter(new YMaps.GeoPoint(37.64, 55.76), 10);
    });
});
