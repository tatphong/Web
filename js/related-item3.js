// JavaScript Document
 $(function(){
'use strict';
$('.multi-slider3').slick({
	infinite:true,
	prevArrow:$('.recentlyviewedsklider .prevbtn'),
	nextArrow:$('.recentlyviewedsklider .nextbtn'),
	slidesToShow:4,
	slidesToScroll:4,
	responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
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