// JavaScript Document

$(function(){
	'use strict';
	$('#toggle-menu').click(function(){
		$(this).toggleClass('xoay');
		$('nav#the-menu, #overlay-page').toggleClass('show');
		$('#searchgia').slideUp(250);
	});
	$('#overlay-page').click(function(){
		$('#toggle-menu').removeClass('xoay');
		$('nav#the-menu, #overlay-page').removeClass('show');
	});
});

$(function(){
	'use strict';
	$('.fa-history').click(function(){
		$('.sho-bag').addClass('hidden');
		$('.history').removeClass('hidden');
	});
});

$(function(){
	'use strict';
	$('.fa-shopping-bag').click(function(){
		$('.sho-bag').removeClass('hidden');
		$('.history').addClass('hidden');
	});
});

$(function(){
	'use strict';
	$('#edit, #add').click(function(){
		$('#inner-add').removeClass('hidden');
	});
	$('#inner-overlay').click(function(){
		$('#inner-add').addClass('hidden');
	});
});

$(function(){
	'use strict';
	$('#srch').click(function(){
		$('#searchgia').slideToggle(300);
		$('#m').slideUp(250);
		$('#w').slideUp(250);
		$('#c').slideUp(250);
		$('#toggle-menu').removeClass('xoay');
		$('nav#the-menu, #overlay-page').removeClass('show');
	});
});

$(function(){
	'use strict';
	$('#men').click(function(){
		$('#m').slideToggle(300);
		$('#w').slideUp(250);
		$('#c').slideUp(250);
		$('#searchgia').slideUp(250);
	});
	$('#woman').click(function(){
		$('#w').slideToggle(300);
		$('#m').slideUp(250);
		$('#c').slideUp(250);
		$('#searchgia').slideUp(250);
	});
	$('#col').click(function(){
		$('#c').slideToggle(300);
		$('#m').slideUp(250);
		$('#w').slideUp(250);
		$('#searchgia').slideUp(250);
	});
	$('#up, #user').click(function(){
		$('#c,#m,#w,#searchgia').slideUp(250);
	});
});

$(function(){
	'use strict';
	$('.banner').slick({
		dots: true,
		arrows: false,
		autoplay:true,
		speed:1000,
		easing: 'easeOutElastic',
	});
});
