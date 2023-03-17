@extends('layout.testprep.main')
@section('styles')
<style>
html {
	height: 100%;
/*
	background-color: #e3e9ee;
*/
}

html, body {
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 14px;
	width: 100%;
}
a {
	color: #d91b5b;
	text-decoration: none;
	font-weight: 600;
	padding-bottom: 3px;
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
}
a:hover {
	border-bottom: 1px solid;
}

.navbar-brand > img{
	max-width:240px;
}

/* Form styles */
#msform {
	width: 100%;
	margin: 50px auto;

	position: relative;
}
#msform fieldset {
	background: #fff;
	border: 0 none;
	border-radius: 5px;
	box-sizing: border-box;
	width: 100%;
	margin: 0 0% 20px;

	/*stacking fieldsets above each other*/
	position: relative;
}

/* Hide all except first fieldset */

#msform fieldset:not(:first-of-type) {
	display: none;
}

/*#msform span fieldset {
	display: none;
}*/
img.logo {
	max-width: 155px;
	margin-top: 5px;
}
#msform p {
	color: #8b9ab0;
	font-size: 12px;
}

#msform label {
	padding-right:0px 15px;
	font-size: 16px;
	text-align: left;

/*
	font-weight:600px !important;
*/
}


/* Inputs */
#msform input, #msform textarea {
	padding: 5px 15px;
	border: 1px solid transparent;
	border-radius: 3px;
	margin-bottom: 10px;
	margin-top: 5px;
	background-color: #eef5ff;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #333;
	font-size: 14px;
	font-family: inherit;
}
#msform input:focus, #msform textarea:focus {
	outline: none;
	border-color: #7bbdf3;
}

/* Buttons */

#msform .submitbutton {
	width: 30%;
	text-transform: uppercase;
	background: #d91b5b;
	font-weight: bold;
	color: white;
	border: 1px solid transparent;
	border-radius: 3px;
	cursor: pointer;
	padding: 12px 5px;
	margin: 10px 0;
	font-size: 16px;
	display: inline-block;
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;
}

#msform .action-button {
	width: 30%;
	text-transform: uppercase;
	background: #d91b5b;
	font-weight: bold;
	color: white;
	border: 1px solid transparent;
	border-radius: 3px;
	cursor: pointer;
	padding: 12px 5px;
	margin: 10px 0;
	font-size: 16px;
	display: inline-block;
	-webkit-transition: all 0.2s;
	-moz-transition: all 0.2s;
	transition: all 0.2s;

}
#msform .previous.action-button {
	background: #fff;
	border: 1px solid #7bbdf3;
	color: #7bbdf3;
}

#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 10px 30px 1px rgba(0, 0, 0, 0.2);
}

/* Headings */
.fs-title {
	font-size: 20px;
	font-weight: 400;
	color: #a94442;
	margin-bottom: 20px;
	background-color: #9999CC;
	margin-top: 20px;
	padding:5px;
	color:#fff;
}
.fs-subtitle {
	font-weight: 400;
	font-size: 19px;
	color: #434a54;
	margin-bottom: 20px;
}

/* Progressbar */
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: #8b9ab0;
	text-transform: uppercase;
	font-size: 9px;
	width: 25%;
	float: left;
	position: relative;
	text-align: center;
}
#progressbar li.active {
	color: #d91b5b;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3em;
	margin: 0 auto 5px auto;
	text-align: center;
}

/* Progressbar connectors */
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1;
}
#progressbar li:first-child:after {
	/* connector not needed before the first step */
	content: none;
}

/* Marking active/completed steps green */
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #d91b5b;
	color: white;
}

/* css for checkbox */

/* The container */
#msform .checkstyle {
  display: inline-flex;
  position: relative;
  width: auto;
  padding-left: 35px;
  padding-right: 25px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
#msform .checkstyle input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
#msform .checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
#msform .checkstyle:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
#msform .checkstyle input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
#msform .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
#msform .checkstyle input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
#msform .checkstyle .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.terms_text a:hover {
    text-decoration:none !important;
}

.listordercls {
	line-height: 25px !important;
	font-size:13px !important;
	list-style: none !important;
	padding-left:0px !important;
}

/* Header */
header {
	margin: 0;
	padding: 0;
	position: sticky;
	position: -webkit-sticky;
	top: 0;
	z-index: 999;
	border-bottom: 1px solid #00000024;
}
header .navbar {
	margin: 0;
	padding: 0;
	background-color: #fff;
	border-radius: 0px;
}

/* Footer */
footer {
	margin: 0;
	padding: 55px 0 50px;
	float: left;
	width: 100%;
	text-align: center;
}
footer img {
	max-height: 60px;
	margin-bottom: 35px;
}
.footer-img2 {
	margin-left: auto;
	margin-right: auto;
	display: table;
	width: auto;
	float: none;
}
.footer-img3 {
	float: right;
}
footer p {
	margin-bottom: 2px;
	color: #272727;
	font-size: 13px;
}
footer a {
	color: #272727;
	font-size: 13px;
}


@media (max-width:480px){

.navbar-brand > img{
	max-width:180px !important;
}

#enroltextcls{
	font-size: 14px !important;
}

}

.mul-rect-box {
	box-sizing: border-box;
	/* position: absolute; */
	width: 213px;
	height: 113px;
	left: 826px;
	/* top: 334px; 
	background: #000;*/
	border: 1px solid rgba(43, 42, 41, 0.1);
	border-radius: 8px;
	text-align: center;
	line-height: 130px;
	float:left;
}






</style>
@endsection

@section('main-container')
<div class="sign">
    <div class="custom-container">
      <div class="sign--menu">
        <a href="/" class="d-block">
          <img class="img-fluid sign--logo" src="/assets/images/header-logo.png" alt="Canam Logo">
          <span class="sr-only">Canam Logo</span>
        </a>
        <a href="/" class="mega--close" id="mega--closesignup"><span class="sr-only">Close</span></a>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <img class="img-fluid" src="/assets/images/signup.png" alt="singin/signup">
          <h2 class="text--light text--semi sign--heading">Simplified Admission Process</h2>
          <ul class="tick--container">
            <li class="tick--list text--dark">Selection Assistance</li>
            <li class="tick--list text--dark">Admission Assistance</li>
            <li class="tick--list text--dark">Pre-departure Assistance</li>
          </ul>
        </div>
        <div class="col-lg-5 offset-lg-1 singupscreen">

          <form class="white-form form" id="msform" autocomplete="off">

          	 <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">One</li>
          <li>Two</li>
          <li>Three</li>
          <li>Four</li>
          <li>Five</li>
          <li>Final Step</li>
           <li>Prep First </li>
           <li>Prep Second </li>
           <li>Prep Three </li>
        </ul>
        <div id="sucessmsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Form Submitted Successfully</h2></div>
			<div id="errormsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Oops.. Something wrong.</h2></div>
            <div class="">
              <div class="form--header">
                <h1 class="text--semi text--dark">We would love to know more about you to chart your study abroad path</h1>
                <!--<p class="text--semi text--dark">Step 1/2</p>-->
              </div>

                  <!--div class="form--group">
                    <label for="email" class="custom--input custom__email">
                      <input type="email" name="email" id="signup_email" required='required' placeholder="email">
                      <span class="text--regular text--light custom--label">Email</span>
                    </label>
                  </div-->
                  
               <fieldset id="step1">
               	<div>
               		<a href="#"  onclick="attrval('purpose','Study Abroad');" onclick="$('#purpose').val('Study Abroad');"  >
               	<div class="mul-rect-box">
               		<img class="img-fluid" src="/prep/assets/images/study-abroad.svg" alt="Study Abroad" >
               		<span> Study Abroad</span>
               	</div></a>
               	<a href="#" onclick="attrval('purpose','Academic');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Academic" >
               		<span> Academic</span>
               	</div>
               	</a>
               </div>
                  <div class="form__group form--md__12">
                  <input type="hidden" id="purpose" name="purpose" val="" >
                </div>
                <input style="float:right;" type="button" id="stepone" name="next" class="next action-button text--medium button-rounded button-rounded__dark arrow--button__nextBtn" value="Next" />
              </fieldset>

            
              <fieldset id="step2">
              	<div>
               		<a href="#"  onclick="attrval('country','Canada');">
               	<div class="mul-rect-box">
               		<img class="img-fluid" src="/prep/assets/images/study-abroad.svg" alt="Canada" onclick="purpose('Study Abroad');">
               		<span> Canada</span>
               	</div></a>
               	<a href="#" onclick="attrval('country','Australia');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Australia" >
               		<span> Australia</span>
               	</div>
               	</a>
               		<a href="#" onclick="attrval('country','New zealand');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Australia" >
               		<span> New zealand</span>
               	</div>
               	</a>
               		<a href="#" onclick="attrval('country','USA');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Australia" >
               		<span> USA</span>
               	</div>
               	</a>
               		<a href="#" onclick="attrval('country','UK');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Australia" >
               		<span> UK</span>
               	</div>
               	</a>
               		<a href="#" onclick="attrval('country','Others');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Australia" >
               		<span> Others</span>
               	</div>
               	</a>
               </div>
                 <div class="form__group form--md__12">
                 <input type="hidden" id="country" name="country" val="" >
				  				
                </div>
                 
                  <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
          				<input style="float:right;" type="button" id="steptwo" name="next" class="next action-button " value="Next" />

                </fieldset>

                <fieldset id="step3">
                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="Preffered Intake" name="intake" id="intake">
							<option value="2011">2011</option>
							<option value="2012">2012</option>					
                  </select>
				  			<span id="err_intake" class="with-errors"></span>
                </div>


                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="What do you wish to Persue ?" name="persue" id="persue">
							
							<option value="Pg Diploma">Pg Diploma</option>
							<option value="Masters">Masters</option>
							<option value="MBA">MBA</option>
							<option value="PHD">PHD</option>
							<option value="Not Decided">Not Decided</option>
                  </select>
				  			<span id="err_persue" class="with-errors"></span>
                </div>
                 <input type="button" name="previous" id="previous2" class="previous action-button" value="Previous" />
          				<input style="float:right;" type="button" id="stepthree" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="step4">
                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="highest level of education" name="education" id="education">
							
							<option value="10th">10th Standard</option>
							<option value="12th">12th Standard</option>
							<option value="Bachelors Degree">Bachelors Degree</option>
                  </select>
				  			<span id="err_education" class="with-errors"></span>
                </div>

                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="Expected CGPA ?" name="cgpa" id="cgpa">
							<option value="">Expected CGPA ? ?*</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
                  </select>
				  			<span id="err_cgpa" class="with-errors"></span>
                </div>


                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="Year of Passing" name="passing" id="passing">
							<option value="">Year of Passing ? ?*</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
                  </select>
				  			<span id="err_passing" class="with-errors"></span>
                </div>

                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="Valid Passport ?" name="passport" id="passport">
							<option value="">Valid Passport ? *</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							<option value="Applied">Applied</option>
                  </select>
				  			<span id="err_passport" class="with-errors"></span>
                </div>
                <input type="button" name="previous" id="previous3" class="previous action-button" value="Previous" />
          				<input style="float:right;" type="button" id="stepfour" name="next" class="next action-button" value="Next" />
              </fieldset>

              <fieldset id="step5">
                <div class="form__group form--md__12">
                  <select class="position--heading__drop" data-style="custom--input" data-width="100%" title="test have you taken?" name="test_taken" id="test_taken">
							<option value="">Which of following test have you taken? ?*</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							<option value="Applied">Applied</option>
                  </select>
				  			<span id="err_test_taken" class="with-errors"></span>
                </div>
                 <input type="button" name="previous" id="previous4" class="previous action-button" value="Previous" />
          				<input style="float:right;" type="button" id="stepfive" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="step6">
                <div class="form__group form--md__12">
                   <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="cusname" id="signup_phone" >
                      <span class="text--regular text--light custom--label">Name</span>
                    	 <span id="err_cusname" class="with-errors"></span>
                    </label>
                   
                  </div>
                  <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="city" id="signup_phone" required='required' placeholder="mobile">
                      <span class="text--regular text--light custom--label">City</span>
                    </label>
                    <span id="err_city" class="with-errors"></span>
                  </div>
                  <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="state" id="signup_phone" required='required' placeholder="mobile">
                      <span class="text--regular text--light custom--label">State</span>
                    </label>
                    <span id="err_state" class="with-errors"></span>
                  </div>
				  			
                </div>
                <input type="button" name="previous" id="previous5" class="previous action-button" value="Previous" />

          				<!--input style="float:right;" type="button" id="stepsix" name="next" class="next action-button" value="Next" /-->
          				<input style="float:right;" type="submit" id="stepsix" name="submit" class="submitbutton" value="Submit" />
                </fieldset>    

                 	
                <fieldset id="step7">
                 		
                	<div class="form--row">
                <div class="form__group form--md__12">
                	<p class="text--primary form__title ">Select your test preference</p>
                	<select class="position--heading__drop" data-style="custom--input" data-width="100%" title="Select your test preference" name="test_taken" id="test_taken">
						
							<option value="Yes">IELTS</option>
							<option value="No">TOEFEL</option>
							<option value="Applied">PTE</option>
								<option value="Duolingo">Duolingo</option>
                  </select>
                   </div>
                 </div>
                 <div class="form--row">
                   <div class="form--group form--md__12">
                   	<p class="text--primary form__title ">Expected Score</p>
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="score" id="signup_phone"  placeholder="Expected Score">
                      <span class="text--regular text--light custom--label">Expected Score</span>
                    </label>
                    <span id="err_state" class="with-errors"></span>
                  </div>
				  			</div>
                
                <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
          				<input style="float:right;" type="button" id="stepseven" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset id="step8">
                 		
                	 
               	<div>
               		<a href="#"  onclick="attrval('preference','General');" onclick="$('#preference').val('General');"  >
               	<div class="mul-rect-box">
               		<img class="img-fluid" src="/prep/assets/images/study-abroad.svg" alt="Study Abroad" >
               		<span> General</span>
               	</div></a>
               	<a href="#" onclick="attrval('preference','Academic');">
               	<div class="mul-rect-box">
               		<!--img class="img-fluid" src="/prep/assets/images/test-prep.svg" alt="General"-->
               		<img class="img-fluid" src="/prep/assets/images/Academic.svg" alt="Academic" >
               		<span> Academic</span>
               	</div>
               	</a>
               </div>
                  <div class="form__group form--md__12">
                  <input type="hidden" id="preference" name="preference" val="" >
                </div>
                
                <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
          				<input style="float:right;" type="button" id="stepnine" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset id="step9">
                <div class="form__group form--md__12">
                   <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="cusname" id="signup_phone" >
                      <span class="text--regular text--light custom--label">Name</span>
                    	 <span id="err_cusname" class="with-errors"></span>
                    </label>
                   
                  </div>
                  <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="city" id="signup_phone" required='required' placeholder="mobile">
                      <span class="text--regular text--light custom--label">City</span>
                    </label>
                    <span id="err_city" class="with-errors"></span>
                  </div>
                  <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="state" id="signup_phone" required='required' placeholder="mobile">
                      <span class="text--regular text--light custom--label">State</span>
                    </label>
                    <span id="err_state" class="with-errors"></span>
                  </div>
				  			
                </div>
                <input type="button" name="previous" id="previous5" class="previous action-button" value="Previous" />

          				<!--input style="float:right;" type="button" id="stepsix" name="next" class="next action-button" value="Next" /-->
          				<input style="float:right;" type="submit" id="stenine" name="submit" class="submitbutton" value="Submit" />
                </fieldset>
            </div>
            </form>
            

        </div>
      </div>
    </div>
  </div>
  </div>


</div>
</div>
</div>
@endsection
@section('scripts')
  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,200' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <!--link rel="stylesheet" href="css/style.css"-->




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

   <script>
$(window).on('load', function ()
 {
    // alert('gh');
    // console.log($("input", "#step2"));
     $("input,select" , "#step2").addClass("ignore"); // do not validate #form2 input
     $("input,select", "#step3").addClass("ignore"); // do not validate #form2 input
     $("input,select", "#step4").addClass("ignore"); // do not validate #form2 input
     $("input,select", "#step5").addClass("ignore");
     $("input,select", "#step6").addClass("ignore");
     $("input,select", "#step7").addClass("ignore");
 });
function attrval($attribute,$val) {
	//alert($argument);
	$('#'+$attribute).val($val);
}
    $(".next").click(function()
            {
            	if($(this).parent().attr('id')=='step1' && $('#purpose').val()=='Academic')
            	{
            		
            		 current_fs = $('#step1');
            		 //console.log(current_fs);
           			 next_fs = $('#step7');
           			 //console.log(next_fs);
           			 //$('testprep').show();
            	}
            	else
            	{
            		 current_fs = $(this).parent();
            		 console.log(current_fs);
           			 next_fs = $(this).parent().next();
            	}
            // current_fs = $(this).parent();
            // console.log(current_fs);
            // next_fs = $(this).parent().next();
            // console.log(next_fs);
            // console.log(v.form());
            if (v.form())
                {

                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                current_fs.hide();
                next_fs.show();
                //console.log(next_fs);
                $("input,select", next_fs).removeClass("ignore");
                //window.scrollTo(0, 0);
                }

            });

            $(".previous").click(function()
            {

                if($(this).parent().attr('id')=='step7')
            	{
            		
            		// current_fs = $('#step7');
           			 previous_fs = $('#step1');
            	}
            	else
            	{
                previous_fs = $(this).parent().prev();
            	}

                current_fs = $(this).parent();
                $("input,select", current_fs).addClass("ignore");
               

                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                current_fs .hide();
                previous_fs .show();
               // window.scrollTo(0, 0);
            });

            // validate form on keyup and submit
        var v = jQuery("#msform").validate({
          ignore: ".ignore",
          rules: {
                purpose: "required",
								country: "required",
								intake: "required",
								persue: "required",
								education: "required",
								cgpa: "required",
								passing: "required",
								passport:"required",
								test_taken: "required",
								cusname: "required"
            },
            submitHandler: function(form)
            {

                    var formData = new FormData(form);
                    //e.preventDefault();
                        $("#loadingmessage").show();
                        $.ajaxSetup({
          headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
       });
                            $.ajax({
                            url: "{{ route('testprep.ajax.store-testprep-data') }}",
                            type: "POST",
                            data: $('#msform').serializeArray(),
                            //contentType: json,
                            //cache: false, 
                            //processData:false,
                            success: function(data)
                            {
                                if(data == 'success')
                                {
                                    $("#loadingmessage").hide();
                                    $("#sucessmsg").show();
                                }
                                if(data == 'error')
                                {
                                    $("#loadingmessage").hide();
                                    $("#errormsg").show();
                                }

                            },
                            error: function(){}

                            });

                    //return false;  //This doesn't prevent the form from submitting.
            },
            highlight: function(element, errorClass) {

              //  window.scrollTo(0, 0);

            },
            unhighlight: function(element, errorClass) {
            //$(element).closest(".form-group").removeClass("has-error");
            },
        });

    </script>
@endsection
