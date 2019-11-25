$(document).ready(function(){
	$('.menuv li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
			$('.test2').css('display','none');
			$('.test1').css('display','block');
			

		} else {
			$('.menuv li ul').slideUp();
			$('.menuv li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
			$('.test2').css('display','block');
			$('.test1').css('display','none');
		}
	});
 	
 	/*inicion js slider carrusel*/
$('.post-wrapper').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 6000,
  nextArrow: $('.next'),
  prevArrow: $('.prev'),
  speed: 800,
});

/*FIn js slider carrusel*/
});

/*$(document).ready(main);

	var contador = 1;

	function main(){
		$('#btn-carcompra').click(function(){
			if(contador == 1){
				$('.car-compra').animate({
					right: '-100%'
				});
			} else {
				contador = 1;
				$('.car-compra').animate({
					right: '0'
				});
			}
		});
	};*/