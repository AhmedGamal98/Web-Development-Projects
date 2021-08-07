
// Convert Password field to text field on Hover
	
	var passfield = $('.password');
	
	$('.show-pass').hover(function () {
		
		passfield.attr('type' , 'text');
		
	}, function(){
		
		passfield.attr('type' , 'password');
		
	});


// Hide Placeholder on form focus
	
	$('[placeholder]').focus(function () {
		
		$(this).attr('data-text' , $(this).attr('placeholder'));
		
		$(this).attr('placeholder' , '');
		
		
		
	}).blur(function () {
		
		$(this).attr('placeholder' , $(this).attr('data-text'));
		
	});


// Start Validation Rules



 var num = /[0-9]/;
	
	$('.id').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(!num.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length < 10){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().startsWith(1) != "1"){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.one-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
			
			
		}
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});



// Email Validation

var sep = /@/,
	de = /.com/;
	
	$('.email').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!sep.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(!de.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});




//  Validation of Login Page  Password


    var upper = /[A-Z]/,
		lower = /[a-z]/,
		num = /[0-9]/;
	
	
	$('.password').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!num.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}	
		else if(!lower.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!upper.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		/*else if($(this).val().length < 10){
			
			$(this).css('border-bottom' , '1px solid #D20707');
		
		    $(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}*/
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
		}
		
		
	});


// Start Sign Up Page

// Phone Number Validation

var phone = /[a-z|A-Z]/;
	
	$('.phone').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(phone.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().length != '10'){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().indexOf(0) != "0"){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});



$('.password2').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val() !== $('.password').val()){
			
		
				
				$(this).css('border-bottom' , '1px solid #D20707');

				$(this).parent('.ast').find('.empty-alert').fadeOut(200);

				$(this).parent('.ast').find('.custom-alert').fadeIn(200);

				$(this).parent('.ast').find('.close').fadeIn(200);

				$(this).parent('.ast').find('.check').fadeOut(200);
				

			
	   }else{
			
				$(this).css('border-bottom' , '1px solid #080');

				$(this).parent('.ast').find('.custom-alert').fadeOut(200);

				$(this).parent('.ast').find('.long-alert').fadeOut(200);

				$(this).parent('.ast').find('.close').fadeOut(200);

				$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
	});



// Name Validation

var first = /[0-9]/;
	
	$('.username').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(first.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});




// Phone Number Validation

var phone = /[a-z|A-Z]/;
	
	$('.card').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(phone.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().length != '16'){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});




var phone = /[a-z|A-Z]/;
	
	$('.cvv').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(phone.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().length != '4'){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});


/* Start Show Events and Need cases */

     $('.event').click(function(){
		  $('html , body').animate({
			scrollTop: $('.events').offset().top
		} , 1000);
	  });
	
	  $('.need').click(function(){
		  $('html , body').animate({
			scrollTop: $('.needs').offset().top
		} , 1000);
	  });