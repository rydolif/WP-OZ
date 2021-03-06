$(function() {

//-------------------------------попандер---------------------------------------
  $('.modal').popup({transition: 'all 0.3s'});


//------------------------------------form-------------------------------------------
  $('input[type="tel"]').mask('+0 (000) 000 0000');

  jQuery.validator.addMethod("phoneno", function(phone_number, element) {
     return this.optional(element) || phone_number.match(/+\0\([0-9]{3}\)\s[0-9]{3} [0-9]{2}[0-9]{2}/);
  }, "Введите Ваш телефон");


//-------------------------------preloader---------------------------------------
    setTimeout(function() {
      $('#ctn-preloader').addClass('loaded');
      // Una vez haya terminado el preloader aparezca el scroll
      $('body').removeClass('no-scroll-y');

      if ($('#ctn-preloader').hasClass('loaded')) {
        // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
        $('#preloader').delay(1000).queue(function() {
          $(this).remove();
        });
      }
    }, 2000);
    
//-------------------------------hero slider---------------------------------------
	var swiper = new Swiper('.hero__slider', {
	  spaceBetween: 0,
	  effect: 'fade',
	  lazy: true,
	  pagination: {
        el: '.hero__pagination',
        clickable: true,
      },
    lazy: true,
	  autoplay: {
	    delay: 9000,
	    disableOnInteraction: false,
	  },
	});

//-------------------------------work slider---------------------------------------
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 5,
      freeMode: true,
      loopedSlides: 5,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      direction: 'vertical',
      breakpoints: {
        1600: {
          slidesPerView: 4,
          spaceBetween: 10
        },
        1240: {
          slidesPerView: 3,
          spaceBetween: 10
        }
      },
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 40,
      loopedSlides: 5,
      lazy: true,
      thumbs: {
        swiper: galleryThumbs,
      },
      navigation: {
        nextEl: '.work__next',
        prevEl: '.work__prev',
      },
 	    pagination: {
        el: '.work__pagination',
        clickable: true,
      },
    });

//-------------------------------fullpage---------------------------------------
	$('#fullpage').fullpage({
	    // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'], // фон цвет
	    anchors: ['firstPage', 'twoPage', 'threePage', 'fourPage'], // якори
	    menu: '.page', // меню
	    lazyLoad: true, // оптимизация
      scrollOverflow: true,
	    // navigation: true, // навигация
	    // navigationTooltips: ['01', '02', '03', '04'], // названия меню
	    showActiveTooltip: true, // меню
	    slidesNavigation: true, // стрелки
	});

	// стрелки
	$('#moveSectionUp').click(function(e){
	    e.preventDefault();
	    $.fn.fullpage.moveSectionUp();
	});

	$('#moveSectionDown').click(function(e){
	    e.preventDefault();
	    $.fn.fullpage.moveSectionDown();
	});

//-------------------------------lang slider---------------------------------------
	$('.nav a').each(function () {
	  var location = window.location.href;
	  var link = this.href; 
	  if(location == link) {
	      $(this).addClass('active');
	  }
	});

});

