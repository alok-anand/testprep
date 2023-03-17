jQuery.validator.addMethod(
		"mobileValidation",
		function(value, element) {
			return !/^\d{10}$|^\d{10}$/.test(value) ? false : true;
		},
		"Mobile number invalid"
	);	
$(document).ready(function () {
/* Phone call back Request */
	/* Zoom Request */
	$("#zoom_lead_form").validate({
		rules: {
			name: "required",
			email: "required",
			program  :"required",
			mobile: {
				required: true,
				mobileValidation: $("#mobile").val(),
			}
		},
		messages :{
				name : {
					required : 'Please enter Full name'
				},
				email : {
					required : 'Please enter Email'
				},
				mobile : {
					required : 'Please enter Phone'
				},
				program  : {
					required : 'Please enter Program'
				}
			},
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if ($(element[0]).attr('id') == 'name') {
				$('#err_l_name').append(error);
			} else if($(element[0]).attr('id') == 'email') { 
				$('#err_l_email').append(error);
			} else if($(element[0]).attr('id') == 'mobile') { 
				$('#err_l_mobile').append(error);
			} else if($(element[0]).attr('id') == 'program') { 
				$('#err_l_program').append(error);
			} 
		},
		submitHandler : function(form) {
			
			$.ajaxSetup({
				headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});
			$.ajax({
				url: "/testprep/store-testprep-data",
				type: "POST",
				data: $('#zoom_lead_form').serialize(),
				success: function( response ) {
					if(response == 1)
					{
						var mobile1 = $('#zoom_lead_form #mobile').val();
						var email1 = $('#zoom_lead_form #email').val();
						var page_name = $('#zoom_lead_form #page_name').val();
						var program = $('#zoom_lead_form #program').val();
						
						var mobile_masking = mobile1.replace(mobile1.substring(1,5),"****");
						var email_masking = email1.replace(email1.substring(1,3),"***");
						
						$('#otpContentContainer').html('');
						$('#otpContentContainer').html('<div class="stepper--content otp" id="step2"><form method="post" id="commonotpsubmit"><div class="form--header"><h1 class="text--semi text--dark">Enter OTP</h1></div><p class="otp--header text--regular text--light" >Please enter the verification code shared to <span class="text--dark text--medium">'+mobile_masking+' </span> & <span class="text--dark text--medium">'+email_masking+'</span></p><div class="form--group"><div class="otp-wrapper"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="0" name="otpsub0" id="otpsub0"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="1" name="otpsub1" id="otpsub1"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="2" name="otpsub2" id="otpsub2"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="3" name="otpsub3" id="otpsub3"></div><p class="text--red text--regular invalid-message hidden mt-10" id="otpsenderro"></p></div><div class="already resend"><p class="text--regular text--dark">Still not recieved OTP? <a href="javascript:void(0);" onclick="commonResend()" class="text--red text--medium">Resend OTP</a></p></div><div class="submit"><input type="hidden" name="otp_page_name" id="otp_page_name" value="'+page_name+'" /><input type="hidden" name="otp_mobile_number" id="otp_mobile_number" value="'+mobile1+'" /><a href="javascript:void(0);" onclick="commonOtpSubmit();" class="d-block text--medium button-rounded button-rounded__dark"  id="sendRequest">Submit</a></div></form></div>');
						$('#zoomRequestModal').modal('hide');
						$('#requestModal').modal('show');
					}	
				}
			});
		}    
	});
	/* Zoom Request */
	
	/* schedule appointment */
	$("#appointment_form").validate({
		ignore: "",
		rules: {
			dob: "required",
			time: "required",
		},
		messages :{
				dob : {
					required : 'Please select Date'
				},
				time : {
					required : 'Please select Suitable Time'
				}
			},
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if ($(element[0]).attr('id') == 'dob') {
				$('#err_f_date').append(error);
			} else if($(element[0]).attr('id') == 'time') { 
				$('#err_f_time').append(error);
			} 
		},
		submitHandler : function(form) {
			 var date = $('#zoomScheduleModal #dob').val();
			 const dt = new Date($('#zoomScheduleModal #dob').val());
			 var day = dt.toLocaleString('default', { weekday: 'short' });
			 var d = dt.getDate();
			 var year = dt.getFullYear();
			 var m =dt.toLocaleString('default', { month: 'short' });
			 var t=day +','+d+' '+m+' '+year; 
			 
			 var time = $('#zoomScheduleModal #time').val();
			 $('#appointleadModal #appdate').val(date);
			 $('#appointleadModal #apptime').val(time);
			 
			 var html = "Confirm Demo Time "+time+","+t;
			 $('#appointleadModal .pop--heading').html(html);
			 $('#appointleadModal #appointment_lead_form')[0].reset();
			 $('#appointleadModal').modal('show');
			 $('#zoomScheduleModal').modal('hide');
		}
	});

	$("#appointment_lead_form").validate({
		rules: {
			name: "required",
			email: "required",
			program: "required",
			mobile: {
				required: true,
				mobileValidation: $("#mobile").val(),
			}
		},
		messages :{
				name : {
					required : 'Please enter Full name'
				},
				email : {
					required : 'Please enter Email'
				},
				mobile : {
					required : 'Please enter Phone'
				},
				program : {
					required : 'Please enter Program'
				}
			},
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			if ($(element[0]).attr('id') == 'name') {
				$('#err_a_name').append(error);
			} else if($(element[0]).attr('id') == 'email') { 
				$('#err_a_email').append(error);
			} else if($(element[0]).attr('id') == 'mobile') { 
				$('#err_a_mobile').append(error);
			} else if($(element[0]).attr('id') == 'program') { 
				$('#err_z_program').append(error);
			} 
		},
		submitHandler : function(form) {
			$.ajaxSetup({
				headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});
			$.ajax({
				url: "/testprep/store-testprep-data",
				type: "POST",
				data: $('#appointment_lead_form').serialize(),
				success: function( response ) {
					
					if(response == 1)
					{
						var mobile1 = $('#appointment_lead_form #mobile').val();
						var email1 = $('#appointment_lead_form #email').val();
						var page_name = $('#appointment_lead_form #page_name').val();
						var program = $('#appointment_lead_form #program').val();

						var mobile_masking = mobile1.replace(mobile1.substring(1,5),"****");
						var email_masking = email1.replace(email1.substring(1,3),"***");
						
						$('#otpContentContainer').html('');
						$('#otpContentContainer').html('<div class="stepper--content otp" id="step2"><form method="post" id="commonotpsubmit"><div class="form--header"><h1 class="text--semi text--dark">Enter OTP</h1></div><p class="otp--header text--regular text--light" >Please enter the verification code shared to <span class="text--dark text--medium">'+mobile_masking+' </span> & <span class="text--dark text--medium">'+email_masking+'</span></p><div class="form--group"><div class="otp-wrapper"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="0" name="otpsub0" id="otpsub0"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="1" name="otpsub1" id="otpsub1"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="2" name="otpsub2" id="otpsub2"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="3" name="otpsub3" id="otpsub3"></div><p class="text--red text--regular invalid-message hidden mt-10" id="otpsenderro"></p></div><div class="already resend"><p class="text--regular text--dark">Still not recieved OTP? <a href="javascript:void(0);" onclick="commonResend()" class="text--red text--medium">Resend OTP</a></p></div><div class="submit"><input type="hidden" name="otp_page_name" id="otp_page_name" value="'+page_name+'" /><input type="hidden" name="otp_mobile_number" id="otp_mobile_number" value="'+mobile1+'" /><a href="javascript:void(0);" onclick="commonOtpSubmit();" class="d-block text--medium button-rounded button-rounded__dark"  id="sendRequest">Submit</a></div></form></div>');
						$('#appointleadModal').modal('hide');
						$('#requestModal').modal('show');
					}	
				}
			});
		}    
	});
	/* schedule appointment */
	/* whatsapp lead */
	
	// $("#request_whatsapp_form").validate({
	// 	rules: {
	// 		f_name: "required",
	// 		phone: {
	// 			required: true,
	// 			mobileValidation: $("#phone").val(),
	// 		}
	// 	},
	// 	messages :{
	// 			f_name : {
	// 				required : 'Please enter Full name'
	// 			},
	// 			phone : {
	// 				required : 'Please enter Whatsapp no.'
	// 			}
	// 		},
	// 	errorPlacement: function(error, element) {
	// 		var placement = $(element).data('error');
	// 		if ($(element[0]).attr('id') == 'f_name') {
	// 			$('#err_w_name').append(error);
	// 		} else if($(element[0]).attr('id') == 'phone') { 
	// 			$('#err_w_phone').append(error);
	// 		} 
	// 	},
	// 	submitHandler : function(form) {
	// 		var name =$('#request_whatsapp_form #f_name').val();
	// 		var phone =$('#request_whatsapp_form #phone').val();
	// 		var msgtext ='Hello, I want to talk to your counsellors to start with the study abroad process.';
	// 		$('#whatsAppmodal').modal('hide');
	// 		//var loc ="https://api.whatsapp.com/send?phone=919803052240&text="+msgtext;
	// 		var loc ="https://api.whatsapp.com/send?phone=918968300000&text="+msgtext;
	// 		window.open(loc, '_blank'); 
	// 	}    
	// });
	/* whatsapp lead */
     
	/*$("#dropdownMenuButton").on({
		mouseenter: function () {
			//stuff to do on mouse enter
			$(this).parent().addClass('show');
			$(this).attr('aria-expanded',true);
			$(".destin-dropdown-menu").addClass('show');
		},
		mouseleave: function () {
			//stuff to do on mouse leave
			$(this).parent().removeClass('show');
			$(this).attr('aria-expanded',false);
			$(".destin-dropdown-menu").removeClass('show');
		}
	});*/

	$(".social-submit").click(function () {
	//alert('hello');
  if (this.id == 'whatsapp') {
	  $('form .with-errors').html('');
    $('#whatAppSuccessModal').toggle();
    $('#whatAppSuccessModal').addClass('show');
    $('#whatsAppmodal').removeClass('show');
	
  }
  if (this.id == 'callback') {
	  $('form .with-errors').html('');
    $('#callSuccessModal').toggle();
    $('#callSuccessModal').addClass('show');
    $('#phoneModal').removeClass('show');
  }
  if (this.id == 'zoomRequest') {
   
	$('form .with-errors').html('');
	$('#zoomRequestModal').modal('show');
    $('#zoomModal').modal('hide');
  }
  if (this.id == 'ZoomsendRequest') {
    /* $('#ZoomSuccessModal').toggle();
    $('#ZoomSuccessModal').addClass('show');
    $('#zoomScheduleModal').removeClass('show'); */
	
  }
  if (this.id == 'zoomSchedule') {

	$('form .with-errors').html('');
	$('#appointment_form #time').val('');
    $('#zoomScheduleModal #appointment_form')[0].reset();
    $('#zoomScheduleModal').modal('show');
    $('#zoomModal').modal('hide');
  }
  $('#navbar_explore').css('padding-right','0px');
  $('body').css('padding-right','0px');
});

});




function commonOtpSubmit()
{
	$('#otpsenderro').html('');
	var otpsub0 = $("#otpsub0").val();
	var otpsub1 = $("#otpsub1").val();
	var otpsub2 = $("#otpsub2").val();
	var otpsub3 = $("#otpsub3").val();
	var otp_page_name = $("#otp_page_name").val();
	if(otpsub0.trim() == '' || otpsub1.trim() == '' || otpsub2.trim() == '' || otpsub3.trim() == '')
	{
		$('#otpsenderro').html('Please enter required field');
		$('#otpsenderro').removeClass('hidden');
		return false;
	}	
	$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});
	$.ajax({
		url: "/testprep/commone-otp-form-submit",
		type: "POST",
		data: $('#commonotpsubmit').serialize(),
		success: function( response ) {
			
			if(response == 1)
			{
				$('#requestModal').modal('hide');
				if(otp_page_name == 'apply_lead'){
					$('#apply_lead_form')[0].reset();
					$('#requestSendModal .modal-body').html('');
					$('#requestSendModal .modal-body').html('<img src="/assets/images/success-alert.svg" alt="success icon"> <p class="text--dark delete--modal--meassage">Information saved successfully</p>  <p class="text--light text--regular delete--modal--desc">Someone from our team will get back to you within 24 hours.</p>');
				}else if(otp_page_name == 'request_lead'){
					$('#request_lead_form')[0].reset();
					$('#requestSendModal .modal-body').html('');
					$('#requestSendModal .modal-body').html('<img src="/assets/images/success-alert.svg" alt="success icon"> <p class="text--dark delete--modal--meassage">Request for call back successful</p>  <p class="text--light text--regular delete--modal--desc">Someone from our team will get back to you within 24 hours.</p>');
				}else if(otp_page_name == 'zoom_lead'){
					var zoom_link ='https://us02web.zoom.us/j/87809091053';
					$('#requestSendModal .modal-body').html('');
					$('#requestSendModal .modal-body').html('<p class="text--dark delete--modal--meassage">Request for zoom session successful!</p> <br/>  <a href='+zoom_link+' class="d-block text--medium button-rounded button-rounded__dark" target="_blank" id="popup_enquiry" >Zoom Link</a>  <p class="text--light text--regular delete--modal--desc">You will receive information regarding zoom session via email within 24 hours.</p>');
					$('#zoom_lead_form')[0].reset();
				}else if(otp_page_name == 'appointment_lead'){
					
					$('#requestSendModal .modal-body').html('');
					$('#requestSendModal .modal-body').html('<p class="text--dark delete--modal--meassage">Request for Scheduling Demo Session is successful!</p> <p class="text--light text--regular delete--modal--desc">Someone from our team will get back to you within 24 hours.</p>');
					$('#zoom_lead_form')[0].reset();
				}else{
					$("#nearestlocation").val('');
					$("#nearestlocation").selectpicker("refresh");
					$("#prefference").val('');
					$("#prefference").selectpicker("refresh");
					$("#pref_intake").val('');
					$("#pref_intake").selectpicker("refresh");
					$("#counseling_mode").val('');
					$("#counseling_mode").selectpicker("refresh");
					$('#enquiryForm')[0].reset();
					$('#requestSendModal .modal-body').html('');
					$('#requestSendModal .modal-body').html('<img src="/assets/images/success-alert.svg" alt="success icon"> <p class="text--dark delete--modal--meassage">Request for call back successful</p>  <p class="text--light text--regular delete--modal--desc">Someone from our team will get back to you within 24 hours.</p>');
				}
				$('#requestSendModal').modal('show');
			}
			else if(response == 2) { 
				$('#otpsenderro').html('Invalid http request');
				$('#otpsenderro').removeClass('hidden');
			}
			else
			{
				$('#otpsenderro').html('Invalid OTP');
				$('#otpsenderro').removeClass('hidden');
			}		
	
		}
	});

	// whatappsuccess

		
}
function commonResend()
{
	$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});
	$.ajax({
		url: "/testprep/commone-resend",
		type: "POST",
		data: {mobile:$('#otp_mobile_number').val(),page_name:$("#otp_page_name").val()},
		success: function( response ) {
			$('#otpsenderro').html('');
			if(response == 1)
			{
				$('#otpsenderro').html('Otp has been send successfully');
				$('#otpsenderro').removeClass('text--red');
				$('#otpsenderro').addClass('text--green');
				$('#otpsenderro').removeClass('hidden');
			}
			else
			{
				$('#otpsenderro').html('Invalid OTP');
				$('#otpsenderro').removeClass('hidden');
			}	 
	
		}
	});
}

function setAppdateTime(time){
	$('#zoomScheduleModal #time').val(time);
}
$(document).ready(function () {
/* Phone call back Request */
	/* Zoom Request */
	$("#counselling-form").validate({
		rules: {
			mobile: {
				required: true,
				mobileValidation: $("#mobile").val(),
			}
		},
		messages :{
				mobile : {
					required : 'Please enter mobile number'
				}
			},
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			 if($(element[0]).attr('id') == 'mobile') { 
					// console.log(error);
					// console.log($('#err_call_mobile'));
				$('#err_call_mobile').append(error);
			} 
		},
		submitHandler : function(form) {
			console.log('erro');
			$.ajax({
            url: "/testprep/direct_call/"+$('#mobile').val(),
            type: "GET",
            
            success: function(response) {
            	response = $.parseJSON(response);
            	$('#err_call_mobile').append(response.message);
              // $('#err_call_mobile').html(response.message);

            }
        });
		}    
	});

	/* Book Demo */
	$("#black-form").validate({
		rules: {
			name: "required",
			email: "required",
			city  :"required",
			course  :"required",
			phone: {
				required: true,
				mobileValidation: $("#mobile").val(),
			}
		},
		messages :{
				name : {
					required : 'Please enter Full name'
				},
				email : {
					required : 'Please enter Email'
				},
				city : {
					required : 'Please enter City'
				},
				course : {
					required : 'Please enter program'
				},
				phone  : {
					required : 'Please enter phone'
				}
			},
		errorPlacement: function(error, element) {
			var placement = $(element).data('error');
			//console.log(placement);
			//console.log(element[0]);
			if ($(element[0]).attr('id') == 'name') {
				$('#err_z_name').append(error);
			} else if($(element[0]).attr('id') == 'email') { 
				$('#err_z_email').append(error);
			} else if($(element[0]).attr('id') == 'mobile') { 
				$('#err_z_mobile').append(error);
			} else if($(element[0]).attr('id') == 'course') { 

				$('#err_z_course').append(error);
			} else if($(element[0]).attr('id') == 'city') { 
				$('#err_z_city').append(error);
			} 
		},
		submitHandler : function(form) {
			 form.submit();
			// $.ajaxSetup({
			// 	headers: {
			// 	'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			// 	}
			// });
			// $.ajax({
			// 	url: "/testprep/store-testprep-data",
			// 	type: "POST",
			// 	data: $('#zoom_lead_form').serialize(),
			// 	success: function( response ) {
			// 		if(response == 1)
			// 		{
			// 			var mobile1 = $('#zoom_lead_form #mobile').val();
			// 			var email1 = $('#zoom_lead_form #email').val();
			// 			var page_name = $('#zoom_lead_form #page_name').val();
			// 			var program = $('#zoom_lead_form #program').val();
						
			// 			var mobile_masking = mobile1.replace(mobile1.substring(1,5),"****");
			// 			var email_masking = email1.replace(email1.substring(1,3),"***");
						
			// 			$('#otpContentContainer').html('');
			// 			$('#otpContentContainer').html('<div class="stepper--content otp" id="step2"><form method="post" id="commonotpsubmit"><div class="form--header"><h1 class="text--semi text--dark">Enter OTP</h1></div><p class="otp--header text--regular text--light" >Please enter the verification code shared to <span class="text--dark text--medium">'+mobile_masking+' </span> & <span class="text--dark text--medium">'+email_masking+'</span></p><div class="form--group"><div class="otp-wrapper"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="0" name="otpsub0" id="otpsub0"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="1" name="otpsub1" id="otpsub1"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="2" name="otpsub2" id="otpsub2"><input class="otp-input otp-verify" type="tel" maxlength="1" data-index="3" name="otpsub3" id="otpsub3"></div><p class="text--red text--regular invalid-message hidden mt-10" id="otpsenderro"></p></div><div class="already resend"><p class="text--regular text--dark">Still not recieved OTP? <a href="javascript:void(0);" onclick="commonResend()" class="text--red text--medium">Resend OTP</a></p></div><div class="submit"><input type="hidden" name="otp_page_name" id="otp_page_name" value="'+page_name+'" /><input type="hidden" name="otp_mobile_number" id="otp_mobile_number" value="'+mobile1+'" /><a href="javascript:void(0);" onclick="commonOtpSubmit();" class="d-block text--medium button-rounded button-rounded__dark"  id="sendRequest">Submit</a></div></form></div>');
			// 			$('#zoomRequestModal').modal('hide');
			// 			$('#requestModal').modal('show');
			// 		}	
			// 	}
			// });
		}    
	});

	$(document).ready(function () {
  var wizard = (".wizard li");
  var userWizard = ('#userInitialWizard .stepper--wizard--item.active');
  var wizardActive = (".wizard li.active");
  $(".singupscreen .form .arrow--button__nextBtn_new").click(function () {
    
	var curStep = $(this).closest(".stepper--content"),
		curStepBtn = curStep.attr("id"),
		curInputs = curStep.find("input[type='text'],input[type='url'],select"),
		isValid = true;
		$(".custom--input").removeClass("is-invalid");
		console.log(curStepBtn);
		if(curStepBtn == "step1") {
			curInputs = curStep.find("input[required='required'],select");
			
			var errors = "Please Fill in:";
			for(var i=0; i<curInputs.length; i++){
				var inputId = $(curInputs[i]).attr('id');
				var inputiddiv="#"+inputId;
				var errorMsg1="";
				$(inputiddiv).parent().parent().find('.invalid-message').remove();
								
				if(inputId == 'signup_phone'){
					var mobile = $('#signup_phone').val();
					var regp = /^\d*$/;
					if(mobile != '' && mobile != undefined && mobile != 'undefined'){
						if(mobile.trim() != '' && mobile.trim() == '0000000000' ){
							
							var errorMsg1 = 'Please enter valid mobile number.';						
						}
						if(mobile.trim() != '' && mobile.length < 10 || mobile.trim() != '' && mobile.length > 10 ){
							
							var errorMsg1 = 'Please enter 10 digit phone number.';						
						}
						if(mobile.trim() != '' && !regp.test(mobile) ){
							
							var errorMsg1 = 'Please enter only number.';						
						}
					}else{
						var errorMsg1 = 'Please enter Mobile number.';						
					}
					
				}
				
				if(inputId == 'signup_email'){
					var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
					var email = $('#signup_email').val();
					if(email != '' && email != undefined && email != 'undefined'){
						if (!testEmail.test(email)){			
							var errorMsg1 = 'Please enter valid email address.';						
						}
					}else{
						var errorMsg1 = 'Please enter Email.';						
					}
				}
				
				if(inputId == 'n_pass'){
					var pattern = /^.*(?=.{8,20})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&!-_]).*$/;
					var pass = $('#n_pass').val();
					
					if(pass != '' && pass != undefined && pass != 'undefined'){
						if(!pattern.test(pass)) 
						{
							var errorMsg1 = 'Please enter valid password.';	
						}
					}else{
						var errorMsg1 = 'Please enter password.';						
					}
				}
				
				if(inputId == 'c_pass'){
					var pattern = /^.*(?=.{8,20})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&!-_]).*$/;
					var cpass = $('#c_pass').val();
					var pass = $('#n_pass').val();
					
					if(cpass != '' && cpass != undefined && cpass != 'undefined'){
						if(pass != '' && pass != undefined && pass != 'undefined'){
							if(!pattern.test(pass)) 
							{
								var errorMsg1 = 'Please enter valid password.';	
							}
							
							if(cpass !== pass){
								var errorMsg1 = 'Please enter same as create password.';
							}
						}else{
							var errorMsg1 = 'Please enter create password .';	
						}
							
					}else{
						var errorMsg1 = 'Please enter confirm password.';						
					}
					
				}
				
				
				
				if(errorMsg1 != undefined && errorMsg1 != '' && errorMsg1 != 'undefined' )
				{
					isValid = false;
					$(curInputs[i]).closest(".custom--input").addClass("is-invalid");
					$(inputiddiv).parent().parent().append('<p class="text--regular text--red invalid-message">'+errorMsg1+'</p>');
				}
			}
			
			if(isValid == true) {
				
				var formData = $('#signup-form').serialize();
				$('.signuperror').remove();
					$.ajaxSetup({
						headers: {
						'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
						}
					});
					$.ajax({
						type: "POST",
						url: '/testprep/signup',
						data:  formData,
						async: false,
						success: function(html){
							if(html == 1 || html == '1'){
								
								var semail = $('#signup-form #signup_email').val();
								var phone = $('#signup-form #signup_phone').val();
								
								$('#signupotp #otpmobile').val(phone);
								$('#signupotp #otpemail').val(semail);
								
								var mobile_masking = phone.replace(phone.substring(1,5),"****");
								var email_masking = semail.replace(semail.substring(1,6),"***");
								$('#signupotp .otpnum').html(mobile_masking);
								$('#signupotp .otpemail').html(email_masking);
								$('.sign #step1').removeClass('active');
								$('.sign #step2').addClass('active');

								$(wizardActive).next().addClass('active');
								$(wizardActive).prev().removeClass('active');
								$(wizardActive).prev().addClass('completed');

								$(userWizard).next().addClass('active');
								$(userWizard).prev().removeClass('active');
								
							}else if(html == 2 || html == '2'){
								$(".submit").append('<p class="text--regular text--red invalid-message signuperror">Email/Mobile already exist.Please try again with different credentials.</p>');
							}else{
								$(".submit").append('<p class="text--regular text--red invalid-message signuperror">Sorry, Something went wrong.Please try again after sometime.</p>');
							}				
						}
					});
					
			}
			
		}
		
		if(curStepBtn == "step2") {
			
			$('#signupotp #otpsenderro').html('');
			
			curInputs = $('#step2').find(".otp-input");
			console.log(curInputs.length);
			for(var i=0; i<curInputs.length; i++){
				if (!curInputs[i].validity.valid){
					  isValid = false;
					  $(curInputs[i]).closest(".custom--input").addClass("is-invalid");
					  $('#signupotp #otpsenderro').html('Please enter required field');
					  $('#signupotp #otpsenderro').removeClass('hidden');
				}
			}
			
	
			if(isValid == true) {
				
				var formData = $('#signupotp').serialize();
				
				$.ajaxSetup({
					headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					}
				});
				$.ajax({
					url: "/testprep/signup-otp-form",
					type: "POST",
					data: formData,
					async: false,
					success: function( response ) {
						
						if(response == 1)
						{
							window.location = "/testprep/dashboard";
						}
						else if(response == 2) { 
							$('#signupotp #otpsenderro').html('Invalid http request');
							$('#signupotp #otpsenderro').removeClass('hidden');
						}
						else
						{
							$('#signupotp #otpsenderro').html('Invalid OTP');
							$('#signupotp #otpsenderro').removeClass('hidden');
						}		
				
					}
				});
					
			}
			
		}
		

  });
  $(".singupscreen .form .btn-prev").click(function () {
    $('.stepper--content').removeClass('active');
    $(this).closest('.stepper--content').prev().addClass('active');

    $(wizardActive).prev().addClass('active');
    $(wizardActive).prev().addClass('completed');
    $(wizardActive).removeClass('completed');
    $(wizardActive).next().removeClass('active');

    $(userWizard).prev().addClass('active');
    $(userWizard).next().removeClass('active');
  });
  
  $("#loginscreen .form .btn-prev").click(function () {
    $('.stepper--content').removeClass('active');
    $(this).closest('.stepper--content').prev().addClass('active');

    $(wizardActive).prev().addClass('active');
    $(wizardActive).prev().addClass('completed');
    $(wizardActive).removeClass('completed');
    $(wizardActive).next().removeClass('active');

    $(userWizard).prev().addClass('active');
    $(userWizard).next().removeClass('active');
  });
});

$('#signup_email,#login_email').on("keyup keypress blur",function(){
	$(this).closest(".custom--input").removeClass("is-invalid");
	var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	var email = $(this).val();
	if(email != '' && email != undefined && email != 'undefined'){
		if (!testEmail.test(email)){			
			var errorMsg1 = 'Please enter valid email address.';						
		}
	}else{
		var errorMsg1 = 'Please enter Email.';						
	}
	
	$(this).parent().parent().find('.invalid-message').remove();
	if(errorMsg1 != undefined && errorMsg1 != '' && errorMsg1 != 'undefined' ){
		
		$(this).closest(".custom--input").addClass("is-invalid");
		$(this).parent().parent().append('<p class="text--regular text--red invalid-message">'+errorMsg1+'</p>');
	}

});
$('#signup_phone,#gen_phone').on("keyup keypress blur",function(){
	$(this).closest(".custom--input").removeClass("is-invalid");
	var mobile = $(this).val();
	var regp = /^\d*$/;
	if(mobile != '' && mobile != undefined && mobile != 'undefined'){
		if(mobile.trim() != '' && mobile.trim() == '0000000000' ){
			
			var errorMsg1 = 'Please enter valid mobile number.';						
		}
		if(mobile.trim() != '' && mobile.length < 10 || mobile.trim() != '' && mobile.length > 10 ){
			
			var errorMsg1 = 'Please enter 10 digit phone number.';						
		}
		if(mobile.trim() != '' && !regp.test(mobile) ){
			
			var errorMsg1 = 'Please enter only number.';						
		}
	}else{
		var errorMsg1 = 'Please enter Mobile number.';	
	}
	$(this).parent().parent().find('.invalid-message').remove();
	
	if(errorMsg1 != undefined && errorMsg1 != '' && errorMsg1 != 'undefined' ){
		
		$(this).closest(".custom--input").addClass("is-invalid");
		$(this).parent().parent().append('<p class="text--regular text--red invalid-message">'+errorMsg1+'</p>');
	}

});

$('#n_pass,#c_pass').on("keyup keypress blur",function(){
	
	$(this).closest(".custom--input").removeClass("is-invalid");
	var pattern = /^.*(?=.{8,20})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&!-_]).*$/;
	if($(this).attr('id') == 'n_pass'){
		var pass = $(this).val();
		
		if(pass != '' && pass != undefined && pass != 'undefined'){
			if(!pattern.test(pass)) 
			{
				var errorMsg1 = 'Please enter valid password.';	
			}
		}else{
			var errorMsg1 = 'Please enter password.';						
		}
	}
	
	if($(this).attr('id') == 'c_pass'){
		var cpass = $('#c_pass').val();
		var pass = $('#n_pass').val();
		
		if(cpass != '' && cpass != undefined && cpass != 'undefined'){
			if(pass != '' && pass != undefined && pass != 'undefined'){
				if(!pattern.test(pass)) 
				{
					var errorMsg1 = 'Please enter valid password.';	
				}
				
				if(cpass !== pass){
					var errorMsg1 = 'Please enter same as create password.';
				}
			}else{
				var errorMsg1 = 'Please enter create password .';	
			}
				
		}else{
			var errorMsg1 = 'Please enter confirm password.';						
		}
	}
	
	$(this).parent().parent().find('.invalid-message').remove();
	
	if(errorMsg1 != undefined && errorMsg1 != '' && errorMsg1 != 'undefined' ){
		
		$(this).closest(".custom--input").addClass("is-invalid");
		$(this).parent().parent().append('<p class="text--regular text--red invalid-message">'+errorMsg1+'</p>');
	}

});
$('#signup-form .togglePassword').on("click focus",function(){
	
    // toggle the type attribute
	const type = $(this).closest(".custom--input").children('input').attr("type") === "password" ? "text" : "password";
	$(this).closest(".custom--input").children('input').attr("type", type);
	
	// toggle the icon
	if(type === "password" ){
		$(this).attr("src", "/assets/images/eye-show-icon.svg");
	}else{
		$(this).attr("src", "/assets/images/eye-hide-icon.svg");
	}
	//this.classList.toggle("bi-eye");
       

});
		});	