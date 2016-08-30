$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});

$(document).ready(function(){
	$("#menu").on("click","a", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = ($(id).offset().top) - 15;
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});

	$(".myWork").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = ($(id).offset().top) - 15;
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});

	$(".feedback").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
		top = ($(id).offset().top) - 15;
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});


	//MODAL
	$("#siteOrder").click(function () {
		$("#myModalBox").modal('show');
	});

	//SCROLL TO TOP
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0}, 1500);
		return false;
	});

	//SITE ORDER FIXED
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.siteOrderFixed').fadeIn();
		} else {
			$('.siteOrderFixed').fadeOut();
		}
	});
	//Click event to scroll to top
	$('.siteOrderFixed').click(function(){
		$("#myModalBox").modal('show');
		return false;
	});

	//BXSLIDER
	$('.bxslider').bxSlider({
		auto: true
	});

	//ANIMATE
	new WOW({
		live: false,
		mobile: false
	}).init();

	//TYPEJS
	$(function(){
      $(".element").typed({
        strings: ["Привет, меня зовут Виктория Скачкова"],
        typeSpeed: 30,
        showCursor: false,
        startDelay: 1000
      });
  });
});