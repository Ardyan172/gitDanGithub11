$('.hScroll').on('click', function(e){
	let kucing = $(this).attr('href');
	let kucingBaru = $(kucing);
	$('body').animate({
		scrollTop: kucingBaru.offset().top - 50
	},1000);
	e.preventDefault();
});