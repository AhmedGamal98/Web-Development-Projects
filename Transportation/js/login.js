const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".contain");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});



// Start Validation Form Login



// Convert Password field to text field on Hover
	
	var passfield = $('.password');
	
	$('.show-pass').hover(function () {
		
		passfield.attr('type' , 'text');
		
	}, function(){
		
		passfield.attr('type' , 'password');
		
	});


//  Validation of Login Page  Password
$('.Phone').blur(function () {
		
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
	else if($(this).val().length < 10){
			
		$(this).css('border' , '1px solid #D20707');
	
		$(this).parent('.ast').find('.long-alert').fadeIn(200);
		
		$(this).parent('.ast').find('.custom-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.empty-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.lower-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.number-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.close').fadeIn(200);
		
		$(this).parent('.ast').find('.check').fadeOut(200);
		
	}
	else if($(this).val().length > 10){
			
		$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
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

$('.commercial').blur(function () {
		
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
	else if($(this).val().length < 10){
			
		$(this).css('border' , '1px solid #D20707');
	
		$(this).parent('.ast').find('.long-alert').fadeIn(200);
		
		$(this).parent('.ast').find('.max-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.empty-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.lower-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.number-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.close').fadeIn(200);
		
		$(this).parent('.ast').find('.check').fadeOut(200);
		
	}
	else if($(this).val().length > 10){
			
		$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.max-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
		
	}
	else{
			
		$(this).css('border' , '1px solid #080');
		
		$(this).parent('.ast').find('.max-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.empty-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.long-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.lower-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.number-alert').fadeOut(200);
		
		$(this).parent('.ast').find('.check').fadeIn(200);
		
		$(this).parent('.ast').find('.close').fadeOut(200);
		
	}
});


    var upper = /[A-Z]/,
		lower = /[a-z]/,
		num = /[0-9]/;
	
	
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
		else if(!num.test($(this).val()) || !lower.test($(this).val()) || !upper.test($(this).val()) || $(this).val().length < 10){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
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

// Location Validation

var city = /[0-9]/;
	
	$('.location').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
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
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	


// User Name Validation

var first = /[0-9]/;
	
	$('.username').blur(function () {
		
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
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	



// Toggle Between Two Forms Company-Student

$('.student').click(function () {
	
	$('.students').removeClass('hide');
	$('.companies').addClass('hide');
	

});


$('.company').click(function () {
	
	$('.companies').removeClass('hide');
	$('.students').addClass('hide');
	

});
