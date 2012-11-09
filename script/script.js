<!-- Navigation and Content sliding effects -->
	$(document).ready(function(){
		$('#navigation a.about').css('opacity','0.6');
		$('ul#navigation li').hover(function(){
			$(this).stop().animate({marginRight:6}, 250);
			}, function(){
				$(this).stop().animate({marginRight:0}, 250)
		});
		$('#navigation a.about').click(function(){
			$('#content').animate({'top':'0'},700);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
		});
		$('#navigation a.work').click(function(){
			$('#content').animate({'top':'-560'},700);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
		});
		$('#navigation a.social').click(function(){
			$('#content').animate({'top':'-1120'},700);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
		});
		$('#navigation a.contact').click(function(){
			$('#content').animate({'top':'-1680'},700);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
		});
		
		$('ul#navigation a.about').hover(function(){
			$('#content').animate({'top':'0'},150);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
			}, function(){
				
		});
		$('ul#navigation a.work').hover(function(){
			$('#content').animate({'top':'-560'},150);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
			}, function(){
				
		});
		$('ul#navigation a.social').hover(function(){
			$('#content').animate({'top':'-1120'},150);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
			}, function(){
				
		});
		$('ul#navigation a.contact').hover(function(){
			$('#content').animate({'top':'-1680'},150);
			$('#navigation a').css('opacity','1');
			$(this).css('opacity','0.6');
			}, function(){
				
		});
		// contact form validation
		var hasChecked = false;
		$(".standard #submit").click(function () { 
			hasChecked = true;
			return checkForm();
		});
		$(".standard #name,.standard #email,.standard #message").live('change click', function(){
			if(hasChecked == true)
			{
				return checkForm();
			}
		});
		function checkForm()
		{
			var hasError = false;
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

			if($(".standard #name").val() == '') {
				$(".standard #error-name").fadeIn();
				hasError = true;
			}else{
				$(".standard #error-name").fadeOut();
			}
			if($(".standard #email").val() == '') {
				$(".standard #error-email").fadeIn();
				hasError = true;
			}else if(!emailReg.test( $(".standard #email").val() )) {
				$(".standard #error-email").fadeIn();
				hasError = true;
			}else{
				$(".standard #error-email").fadeOut();
			}
			if($(".standard #message").val() == '') {
				$(".standard #error-message").fadeIn();
				hasError = true;
			}else{
				$(".standard #error-message").fadeOut();
			}
			if(hasError == true)
			{
				return false;
			}else{
				return true;
			}
		}
		// end contact form validation
	});
<!-- END JAVASCRIPT -->