$(document).ready(function(){

	var mySwiper = new Swiper('.swiper-container', { 
	  speed:750
	})

	$('.next').click(function(){
		mySwiper.swipeNext();
	});

	$('.prev').click(function(){
		mySwiper.swipePrev();
	});

	$('.datatable').DataTable();

});

