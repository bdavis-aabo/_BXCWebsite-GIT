$(document).ready(function(){
	window.onorientationchange = function() { window.location.reload(); };
	
	$(window).scroll(function(){
		if($(this).scrollTop() > 250){
			$('.scrollToTop').fadeIn(250);
		} else {
			$('.scrollToTop').fadeOut(250);
		}
	});
	
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop: 0}, 800);
		return false;
	});
	
	//Animate Connected Btn
	//var boxWidth = $('a.slide-btn').width();
	
	//console.log(boxWidth);
	$('a.slide-btn').mouseenter(function(){
		$(this).animate({
			width: 200
		},200);
	}).mouseleave(function(){
		$(this).animate({
			width: 50
		});
	});
	
	//Scroll to Anchor
	$('a.slide-btn[href^="#"]').on('click',function(e){
		e.preventDefault();
		
		var target	=	this.hash;
		var $target	=	$(target);
		
		$('html, body').stop().animate({
			'scrollTop' : $target.offset().top
		}, 800, 'swing');
	});
	
	
	
	var winW = $(window).width();
	var wrapperW = $('.wrapper').width();
	var navRightPos = ((winW - wrapperW)/2) -15;
	$('.navbar-right').css('right',navRightPos);
	
	$(window).resize(function(){
		var winW = $(window).width();
		var wrapperW = $('.wrapper').width();
		var navRightPos = ((winW - wrapperW)/2) -15;
		$('.navbar-right').css('right',navRightPos);
	});
	
	
	var subpageW	= 	$('.subpage-section').width();
	var logomarkW	=	$('.subpage-section .logomark').width();
	
	$('.page-hero').css({'height':($('.hero-image img').height() - 151)});
	$('.subpage-section .logomark').css({'left':((subpageW - logomarkW)/2)});
	$('.footer .green-bg').css({'height':($('.footer .darkgray-bg').height())});
	
	if(winW <= 667){
		$('nav.navbar').removeClass('navbar-right');
	}
});