$(function() {

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(".main-mnu").slideToggle();
		return false;
	});
	
	$('.glass').click(function() {
		if (!$('.search2 form').hasClass('block')) {
			$('.search2 form').addClass('block');
		}
		else {
			$('.search2 form').removeClass('block');
		}
	});

	$('.top_mnu ul ul').mouseover(function(){
		$(this).prev().addClass('hover_a');
	});

	$('.top_mnu ul ul').mouseout(function(){
		$(this).prev().removeClass('hover_a');
	});

	$('.bot-mnu ul ul').mouseover(function(){
		$(this).prev().addClass('hover_a2');
	});

	$('.bot-mnu ul ul').mouseout(function(){
		$(this).prev().removeClass('hover_a2');
	});

	$('#searchsubmit').attr('value','');

	$('#s').attr('placeholder', 'Искать');
	
	$('.wpcf7-submit').click(function(eventObject) {
		if ($('.your-name .wpcf7-text').val() == '' || $('.your-phone .wpcf7-text').val() == '') {
			alert('Заполните все поля');
			eventObject.preventDefault();
		}
		else {
			setTimeout('alert("Спасибо за вашу заявку, скоро мы с вами свяжемся!")', 2000);
		}
	});

	$('.last_art .rpwe-clearfix').attr('class', '').attr('class','col-lg-4 col-md-4 col-sm-6 col-xs-12 rpwe-clearfix');

	var wor = $('.two_words_about_us .two_words_about_us_like_h2').html();
	if (wor !== undefined) {
		var wor2 = wor.split(' ');
		wor2[4] = '<b>'+wor2[4]+'</b>';
		wor = '';
		for(var i=0; i <= (wor2.length-1); i++) {			
			wor = wor+' '+wor2[i];
		}
		$('.two_words_about_us .two_words_about_us_like_h2').html(wor);
	}


	var la = $('.last_art .like_h2').html();
	if (la !== undefined) {
		var la2 = la.split(' ');
		la2[1] = '<b>'+la2[1]+'</b>';
		la = '';
		for(var i=0; i <= (la2.length-1); i++) {			
			la = la+' '+la2[i];
		}
		$('.last_art .like_h2').html(la);
	}

	var con = $('.col-content h1').html();
	if (con !== undefined) {
		var con2 = con.split(' ');
		con2[0] = '<b>'+con2[0]+'</b>';
		con = '';
		for(var i=0; i <= (con2.length-1); i++) {			
			con = con+' '+con2[i];
		}
		$('.col-content h1').html(con);
	}


	/*var con = $('.col-content h1').html();
	if (con !== undefined) {
		var con2 = con.split(' ');
		con2[0] = '<b>'+con2[0]+'</b>';
		var con = $('.col-content h1').html(con2[0]+' '+con2[1]);
	}*/


	












}); //ready