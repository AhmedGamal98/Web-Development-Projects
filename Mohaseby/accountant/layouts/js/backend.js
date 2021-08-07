/* $  */

$(function () {
	
	'use strict';
	
	
	// Trigger the Select Box It
	
	$('select').selectBoxIt({
		
		autoWidth: false
		
	});
	
	
	//  Validation of Login Page During Writing  UserName
	
	
	$('.username').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length < 8){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	
	//  Validation of Login Page  Password
	
	
	$('.password').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		/*else if(check == false){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).after('<i class="fa fa-close close"></i>');
			
		}*/
		else if($(this).val().length < 8){
			
			$(this).css('border-bottom' , '1px solid #D20707');
		
		    $(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
		}
		
		
	});
	
	
	
	// Dashboard Toggle Info
	
	$('.toggle-info').click(function () {
		
		$(this).toggleClass('selected').parent().next('.panel-body').fadeToggle(100);
		
		if($(this).hasClass('selected')){
		   
		   $(this).html('<i class="fa fa-minus fa-lg"></i>');
		   
		 }else{
			 
			 $(this).html('<i class="fa fa-plus fa-lg"></i>');
			 
		 }
		
	});
	
	
	// Hide Placeholder on form focus
	
	$('[placeholder]').focus(function () {
		
		$(this).attr('data-text' , $(this).attr('placeholder'));
		
		$(this).attr('placeholder' , '');
		
		
		
	}).blur(function () {
		
		$(this).attr('placeholder' , $(this).attr('data-text'));
		
	});
	
	
	// Add * to inputs required in html
	
	$('input').each(function () {
		
		
		if($(this).attr('required') === 'required'){
			
			$(this).after('<span class="astrisk">*</span>');
			
		}
		
	});
	
	// Convert Password field to text field on Hover
	
	var passfield = $('.password');
	
	$('.show-pass').hover(function () {
		
		passfield.attr('type' , 'text');
		
	}, function(){
		
		passfield.attr('type' , 'password');
		
	});
	
	// Confirmation Message
	
	$('.confirm').click(function () {
		
		return confirm('Are You Sure?');
		
	});
	
	
	
	// Input Sums Of Money From Add Sale Page
	
	$('.profit').hover(function () {
		
		
		$(this).attr('value' , ($('.quantity').val() * $('.price').val()));
		
		
	});
	
	
	$('.sum').hover(function () {
		
		
		$(this).attr('value' , (($('.profit').val()) + ($('.tax').val())));
		
		
	});
	
	
	
	// Category View Option
	
	$('.cat h3').click(function () {
		
		$(this).next('.full-view').fadeToggle();
		
	});
	
	
	$('.option span').click(function () {
		
		$(this).addClass('active').siblings('span').removeClass('active');
		
		if($(this).data('view') == "full"){
			
			$('.cat .full-view').fadeIn(200);
			
		}else{
			
			$('.cat .full-view').fadeOut(200);
			
		}
		
	});
	
});