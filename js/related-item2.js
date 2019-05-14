// JavaScript Document
 $(function(){
'use strict';
$('.multi-slider2').slick({
	infinite:true,
	prevArrow:$('.youmayalsolikeslider .prevbtn'),
	nextArrow:$('.youmayalsolikeslider .nextbtn'),
	slidesToShow:3,
	slidesToScroll:3,
	responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
});