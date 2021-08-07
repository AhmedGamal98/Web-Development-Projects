/* $ */

// Show More Creative Ideas And Hide It

$('.ideas .see a').click(function () {
	
	  
	$('.ideas .hide').removeClass('hide');
	
	
});


// Show More Recommended Ideas And Hide It

$('.ideass .recommended a').click(function () {
	
	  
	$('.ideass .hide').removeClass('hide');
	
	
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




$('.signup-main .ast .star').each(function () {
		
		
		if($(this).attr('required') === 'required'){
			
			$(this).after('<span class="astrisk">*</span>');
			
		}
		
	});


    // Add * to Textarea required in html


     $('textarea').each(function () {
		
		
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



  // Start Validation Login Page


   //  Validation of Login Page During Writing  National ID
	
    var num = /[0-9]/;
	
	$('.id').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(!num.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length != 10){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().startsWith(1) != "1"){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.one-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
			
			
		}
		else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.one-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	
	//  Validation of Login Page  Password


    var upper = /[A-Z]/,
		lower = /[a-z]/,
		numm = /[0-9]/;
	
	
	$('.password').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!numm.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}	
		else if(!lower.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!upper.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length < 6){
			
			$(this).css('border' , '1px solid #D20707');
		
		    $(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
		}
		
		
	});


// Start Reset Password Page Validation 


  // Reset With Email Or Phone Number

  $('.login-page .login-block a').click(function (){
	  
	  
	  
	  $('.login-page .login-block .show1').fadeOut();
	  
	  $('.login-page .login-block .show2').fadeIn();
	  
	  
  });

// Email Validation

var sep = /@/,
	de = /.com/;
	
	$('.email').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!sep.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(!de.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
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

// Phone Number Validation

var phone = /[0-9]/;
	
	$('.phone').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!phone.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().length != 10){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(($(this).val().indexOf(0) != "0") && ($(this).val().indexOf(1) != "5")){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});



// Start Sign Up Page


// First Name Validation

var first = /[0-9]/;
	
	$('.first').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(first.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});

// Last Name Validation

var first = /[0-9]/;
	
	$('.last').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(first.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});

// Confirm Password Validation

$('.password2').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val() !== $('.password').val()){
			
		
				
				$(this).css('border' , '1px solid #D20707');

				$(this).parent('.ast').find('.empty-alert').fadeOut(200);

				$(this).parent('.ast').find('.long-alert').fadeIn(200);

				$(this).parent('.ast').find('.close').fadeIn(200);

				$(this).parent('.ast').find('.check').fadeOut(200);
				

			
	   }else{
			
				$(this).css('border' , '1px solid #080');

				$(this).parent('.ast').find('.empty-alert').fadeOut(200);

				$(this).parent('.ast').find('.long-alert').fadeOut(200);

				$(this).parent('.ast').find('.close').fadeOut(200);

				$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
	});

// City Validation

var city = /[0-9]/;
	
	$('.city').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(city.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});


// Age Validation

var age = /[0-9]/;
	
	$('.age').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}/*else if(!age.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val().length != 2){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}*/else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});


// Gender Validation

	
	$('.gender').blur(function () {
		
		if($(this).val() == 0){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});

// Type Validation

	
	$('.type').blur(function () {
		
		if($(this).val() == 0){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});


/* From Contact Page */

// Message Validation

var area = /[0-9]/;
	
	$('.area').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}else if(area.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeOut(200);
			
			$(this).parent('.ast').find('.check1').fadeIn(200);
			
		}
		
		
	});

// Name Validation

var nam = /[0-9]/;
	
	$('.name').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}else if(nam.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeOut(200);
			
			$(this).parent('.ast').find('.check1').fadeIn(200);
			
		}
		
		
	});

// Email Validation

var sep = /@/,
	de = /.com/;
	
	$('.email').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}
		else if(!sep.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}else if(!de.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeIn(200);
			
			$(this).parent('.ast').find('.check1').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close1').fadeOut(200);
			
			$(this).parent('.ast').find('.check1').fadeIn(200);
			
		}
		
		
	});


// From Add Idea Page 


// Category Validation

	
	$('.category').blur(function () {
		
		if($(this).val() == 0){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close3').fadeIn(200);
			
			$(this).parent('.ast').find('.check3').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close3').fadeOut(200);
			
			$(this).parent('.ast').find('.check3').fadeIn(200);
			
		}
		
		
	});

// Tag Validation

	
	$('.tag').blur(function () {
		
		if($(this).val() == 0){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close3').fadeIn(200);
			
			$(this).parent('.ast').find('.check3').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close3').fadeOut(200);
			
			$(this).parent('.ast').find('.check3').fadeIn(200);
			
		}
		
		
	});

// title Validation

var title = /[0-9]/;
	
	$('.title').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else if(title.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeOut(200);
			
			$(this).parent('.ast').find('.check2').fadeIn(200);
			
		}
		
		
	});

// budget Validation

var budget = /[A-Z|a-z]/;
	
	$('.budget').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else if(budget.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeOut(200);
			
			$(this).parent('.ast').find('.check2').fadeIn(200);
			
		}
		
		
	});

// title Validation

var brief = /[0-9]/;
	
	$('.brief').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else if(brief.test($(this).val())){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeOut(200);
			
			$(this).parent('.ast').find('.check2').fadeIn(200);
			
		}
		
		
	});

// Choose Photo Validation

	
	$('.file').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close2').fadeIn(200);
			
			$(this).parent('.ast').find('.check2').fadeOut(200);
			
		}else{
			
			$(this).css('border' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close2').fadeOut(200);
			
			$(this).parent('.ast').find('.check2').fadeIn(200);
			
		}
		
		
	});