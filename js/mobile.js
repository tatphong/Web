// JavaScript Document

$(function(){
	'use strict';
	$('#toggle-menu').click(function(){
		$(this).toggleClass('xoay');
		$('nav#the-menu, #overlay-page').toggleClass('show');
	});
	$('#overlay-page').click(function(){
		$('#toggle-menu').removeClass('xoay');
		$('nav#the-menu, #overlay-page').removeClass('show');
	});
});

$(function(){
	'use strict';
	$('#srch').click(function(){
		$('#searchgia').slideToggle(300);
	});
});

$(function(){
	'use strict';
	$('#sp').click(function(){
		$('.the-menu ul ul').slideToggle(300);
	});
});

$(function(){
	'use strict';
	$('.banner').slick({
	dots: true,
	arrows: false,
	
	});
});
