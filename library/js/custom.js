jQuery(document).ready(function($) {
	// var select = $( "#minbeds" );
	// var slider = $( "<div id='slider'></div>" ).insertAfter( select ).slider({
	//   min: 1,
	//   max: 6,
	//   range: "min",
	//   value: select[ 0 ].selectedIndex + 1,
	//   slide: function( event, ui ) {
	//     select[ 0 ].selectedIndex = ui.value - 1;
	//   }
	// });

	// console.log(slider);
	// $( "#minbeds" ).on( "change", function() {
	//   slider.slider( "value", this.selectedIndex + 1 );
	// });
	
	var slideNum = 1;

	$("#slider").slider({
	  animate: "fast",
	  min: 1,
	  max: 6,
	  range: "min",
	  // value: select[ 0 ].selectedIndex + 1,
	  slide: function( event, ui ) {
	    // select[ 0 ].selectedIndex = ui.value - 1;
	    var dir;
	    if (ui.value > slideNum) {
	    	dir = 'next';
	    	changeSlide(dir);
	    	slideNum = ui.value ;
	    } else if(ui.value < slideNum){
	    	dir = 'prev';
	    	changeSlide(dir);
	    	slideNum = ui.value ;
	    }
	    // console.log(ui);
	    // console.log(event);
	  }
	});

	function changeSlide(dir){
		console.log(dir);
	}
	console.log('test1'); 

	// $('.content > form > #recaptcha_div').appendTo('.supporterInfo');
	// $('#socializeWidget').prependTo('.supporterInfo-wapper');

	// $('.unslider-arrow.next').prependTo('.unslider-nav');
	// $('.unslider-arrow.prev').appendTo('.unslider-nav');
	// unslider-arrow next
	// unslider-arrow prev
	// unslider-nav

	// Chat bubble
  // var $bubble = $("<div/>");
  // $bubble.addClass('slider-nav-wrapper');
 


  //Owl Carousel
  console.log('Carousel');  
  // var c = $(".full-slider-section ul").owlCarousel();
  var c = $(".main-post-slider").owlCarousel({
		// nav: true,
		// dots: true,
		// loop: true,
		responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	        },
	        992:{
	            items:2,
	        },
	        1200:{
	            items:3,
	        }
	    },
	});

  $('.collapser').click(function(){
  	$('#inner-header nav').slideToggle()
  });
 

});