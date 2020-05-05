require('./bootstrap');


/*==================================================

** スムーズスクロール
==================================================*/
// ここにページトップボタンのjQueryをかく
// $(document).ready(function(){
//   $('.pagetop').click(function() {
//     $(window).scrollTop(0);
//   })
// });


	$(window).load(function () {
		var topBtn = $('#pagetop');

		// Hide button first
		topBtn.hide();

		// Button shows up when window is scrolled over 200 px
		// or vice versa
		$(window).scroll(function () {
			if ($(this).scrollTop() > 200) {
				topBtn.fadeIn();
			} else {
				topBtn.fadeOut();
			}
		});

		// Go to top of window
		topBtn.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);
			return false;
		});
	});



/*==================================================

** スマホメニュー
==================================================*/
(function() {
  const body = document.querySelector('body');
  const menuBtn = document.querySelector('.menu-btn');
  const classToAssign = 'is-active-gnav';

  function toggleClass(e) {
    if (body.classList.contains(classToAssign)) {
      body.classList.remove(classToAssign);
    } else {
      body.classList.add(classToAssign);
    }

    e.stopPropagation();
	}

	function removeClass() {
		if (window.innerWidth > 1024) {
			body.classList.remove(classToAssign);
		}
	}

	menuBtn.addEventListener('click', toggleClass, false);
	window.addEventListener('resize', removeClass);
})();



/*==================================================

** Exchange images
==================================================*/



	$(window).on('load resize', function(){

		var wid = window.innerWidth;

		//pc,sp
		if( wid <= 768 ){
			$('.js-exchange_sp').each(function(){
				$(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
			});
		} else if( wid > 768 ){
			$('.js-exchange_sp').each(function(){
				$(this).attr("src",$(this).attr("src").replace('_sp', '_pc'));
			});
		}

   });


