$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function(){

	$('.current-menu-item').addClass('active');

	$('.post-thumbnail .inside p').addClass('text-justify');

	if ($('body').hasClass('search') == true) {
		$('body header').addClass('page');
		$('.single-post').addClass('search-result');
	};

	if ( $('body').hasClass('single') || $('body').hasClass('blog') || $('body').hasClass('archive') || $('body').hasClass('page-template-page-portfolio-php')) {
		$('body header').addClass('page');
	};

	$('.post-categories li').after('<span>&nbsp;</span>');

	$("#commentform input").addClass('form-control');
	$("#commentform textarea").addClass('form-control');
	$("#commentform input[type='submit']").addClass('btn btn-primary').removeClass('form-control');


	$('#menu-item-34 a').attr('href','http://localhost/wp.orgin/index.php#contact-view');
	$('#menu-item-28 a').attr('href','http://localhost/wp.orgin/index.php#about-me');

	$('.related-post-single').addClass('col-md-3 col-mxs-6');
	$('.related-post-single img').addClass('img-responsive');


	$custom_header = $('input#image').val();
	$header_text_color = $('input#header-text-color').val();
	
	if ($custom_header == '') {
		//console.log('empty');
		$('header').css('background', '-webkit-linear-gradient(left, #341F48 50%, #2b193c 50%)');
	}else{
		//console.log($custom_header);
		$('header').css('background', 'url("'+$custom_header+'")');
		$('header').css('background-size', 'cover');
	}

	if ($header_text_color == '') {
		console.log('empty');
	}else{
		//console.log($header_text_color);
		$('.jumbotron').css('color', '#'+ $header_text_color);
	}

});