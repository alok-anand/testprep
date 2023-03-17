@extends('layout.testprep.main')

@section('main-container')
<div class="sign">
  <div class="custom-container">
    <div class="sign--menu">
      <a href="/" class="d-block">
        <img class="img-fluid sign--logo" src="/prep/assets/images/cp-logo.svg" alt="Canamprep Logo">
        <span class="sr-only">Canamprep Logo</span>
      </a>
      <a href="/"  class="mega--close"  id="mega--closesignup"><span class="sr-only">Close</span></a>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img class="img-fluid" src="/prep/assets/images/signup.png" alt="singin/signup">
        <h2 class="text--light text--semi sign--heading">Simplified Admission Process</h2>
        <ul class="tick--container">
          <li class="tick--list text--dark">Selection Assistance</li>
          <li class="tick--list text--dark">Admission Assistance</li>
          <li class="tick--list text--dark">Pre-departure Assistance</li>
        </ul>
      </div>
      <div class="col-lg-5 offset-lg-1 loginscreen">
		
     
        <form class="white-form form" id="loginform" autocomplete="off" method="post" action="/testprep/login">
		@csrf
          <div class="stepper--content active" id="step1">
            <div class="form--header">
              <h1 class="text--semi text--dark">Sign in</h1>
			  
            </div>
    		 @if(count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="text--regular text--red invalid-message">{{ $error }}</div>
      @endforeach
    @endif
				@if(session()->has('error'))
        <div class="text--regular text--red invalid-message">{{ session()->get('error') }}</div>
      @endif
			
			@if(session()->has('success'))
				<div class="alert alert-success">
					{{ session()->get('success') }}
				</div>
			@endif
            <div class="form--group">
              <label for="email" class="custom--input">
                <input type="text" id="login_email" name="email" required="required" placeholder="email" value="">
                <span class="text--regular text--light custom--label">Email </span>
              </label>
            </div>
            <div class="form--group">
              <label for="login_pass" class="custom--input">
                <input type="password" id="login_pass" name="password" required="required" placeholder="Password" value="">
                <span class="text--regular text--light custom--label">Password</span>
              </label>
            </div>
            <div class="form--group">
              <div class="d-flex align-items-center justify-content-between">
                <label class="custom--checkbox" >
                  <span class="d-none">
                  <input type="checkbox" name="remember" id="check_remember" value='0' >
                  <span class="custom--checkbox__checkmark check_remember"></span>
                  
                  <p class="text--regular text--primary custom--checkbox__label ">Remember me</p></span>
                </label>
                <a href="{{ url('testprep/forgot') }}" class="text--medium text--red forgot">Forgot Password?</a>
              </div>
            </div>
            <div class="submit">
			  <input type="hidden" name="page_name" value="login-page" >
			  <input type="hidden" name="company_name" value="{{ env('COMPANY_NAME') }}" >
              <!--<a href="/user-initial.html" class="text--medium button-rounded button-rounded__dark">Sign in</a>-->
              <a href="javascript:void(0);" class="text--medium button-rounded button-rounded__dark arrow--button__nextBtn_new">Sign in</a>
            </div>
            <div class="or-divider text--dark text--regular">
              <span>Or</span>
            </div>
            <div class="login-google">
              <!--div class="google">
                <a href="#" class="text--regular button-rounded button-rounded__white"><img src="/prep/assets/images/g-logo.png" class="img-fluid" alt="google logo"><span class="text--light ">Sign up with Google</span></a>
              </div-->
              <div class="google">
                <a href="javascript:void(0);" class="text--regular button-rounded button-rounded__white arrow--button__otpBtn"><span class="text--light ">Sign in with OTP</span></a>
              </div>
            </div>
            <div class="already">
              <p class="text--regular text--dark">New to Canam? <a href="/testprep/signup" class="text--red text--medium">Create an account</a></p>
            </div>
          </div>
        </form>
		<form class="white-form form" id="gen_loginotpform" autocomplete="off">
          <div class="stepper--content" id="step2">
            <a href="javascript:void(0);" class="arrow arrow--link arrow--link__red arrow--link__back btn-prev"><span>Back</span></a>
            <div class="form--header">
              <h1 class="text--semi text--dark">Sign in</h1>
            </div>
            <div class="form--group">
              <label for="phone" class="custom--input custom__mobile">
                <input type="text" id="gen_phone" name="gen_phone"  required="required" placeholder="mobile">
                <span class="text--regular text--light custom--label">Mobile</span>
              </label>
            </div>
            <div class="submit">
              <a href="javascript:void(0);" class="text--medium button-rounded button-rounded__dark arrow--button__nextBtn_new">Generate OTP</a>
            </div>
          </div>
		</form>
		<form class="white-form form" id="loginotpform" autocomplete="off">
          <div class="stepper--content" id="step3">
            <a href="javascript:void(0);" class="arrow arrow--link arrow--link__red arrow--link__back btn-prev"><span>Back</span></a>
            <div class="form--header">
				  <h1 class="text--semi text--dark">Enter OTP</h1>
			</div>
			<p class="otp--header text--regular text--light">
			  Please enter the verification code shared to <span class="text--dark text--medium otpnum">91****8345 </span>
			</p>
			<div class="form--group">
			  <div class="otp-wrapper">
				<input class="otp-input" name="otpsub0" required='required' type="tel" maxlength="1" data-index="0">
				<input class="otp-input" name="otpsub1" required='required' type="tel" maxlength="1" data-index="1">
				<input class="otp-input" name="otpsub2" required='required' type="tel" maxlength="1" data-index="2">
				<input class="otp-input" name="otpsub3" required='required' type="tel" maxlength="1" data-index="3">
			  </div>
			  <p class="text--red text--regular invalid-message hidden mt-10" id="otpsenderro"></p>
			</div>
			<div class="already resend">
			  <p class="text--regular text--dark">Still not recieved OTP? <a class="text--red text--medium" href="javascript:void(0);" onclick="commonLoginResend()">Resend OTP</a></p>
			</div>
			<div class="submit">
				<input type="hidden" name="page_name" id="page_name" value="login_otp-page" >
				<input type="hidden" name="company_name" value="{{ env('COMPANY_NAME') }}" >
				<input type="hidden" name="otpmobile" id="otpmobile" value="" >
				<a href="#" class="text--medium button-rounded button-rounded__dark arrow--button__nextBtn_new">Sign in</a>
			</div>
		  </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection