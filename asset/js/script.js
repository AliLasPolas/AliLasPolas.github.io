"use strict";

$(function(){
	$(document).on("click", ".fa-bars", function(e){
		$('.menu_mobile').css('display', 'initial');
		$('.menu_mobile').animate({
			left: '0px',
			backgroundColor: 'rgba(200,200,200,0.30)'
		}, 200)
		$('html, body').css({
		    overflow: 'hidden',
		    height: '100%'
		});
	});
	$(document).on("click", ".fa-times", function(e){
		console.log('ONCHE');
		$('.menu_mobile').animate({
			left: '-300px',
			backgroundColor: 'rgba(200,200,200,0)'
		}, 200, function(){
			$('.menu_mobile').css('display', 'none');
			$('html, body').css({
			    overflow: 'auto',
			    height: 'auto'
			});
		});
	});
});