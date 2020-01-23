$(document).ready(function(){
	$('.menupweb li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
			$('.test2web').css('display','none');
			$('.test1web').css('display','block');
			

		} else {
			$('.menupweb li ul').slideUp();
			$('.menupweb li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
			$('.test2web').css('display','block');
			$('.test1web').css('display','none');
		}
	});

});