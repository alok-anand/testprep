@extends('layout.testprep.main')

@section('main-container')
<div class="sign">
    <div class="custom-container">
      <div class="sign--menu">
        <a href="/" class="d-block">
          <img class="img-fluid sign--logo" src="/prep/assets/images/cp-logo.svg" alt="Canam prep Logo">
          <span class="sr-only">Canam Logo</span>
        </a>
        <a href="/" class="mega--close" id="mega--closesignup"><span class="sr-only">Close</span></a>
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
        <div class="col-lg-5 offset-lg-1 singupscreen">
  
          <form class="white-form form" id="signup-form" autocomplete="off">
            <div class="stepper--content active" id="step1">
              <div class="form--header">
                <h1 class="text--semi text--dark">Sign up & become part of our community</h1>
                <!--<p class="text--semi text--dark">Step 1/2</p>-->
              </div>
              
                  <div class="form--group">
                    <label for="email" class="custom--input custom__email">
                      <input type="email" name="email" id="signup_email" required='required' placeholder="email">
                      <span class="text--regular text--light custom--label">Email</span>
                    </label>
                  </div>
                  <div class="form--group">
                    <label for="phone" class="custom--input custom__mobile">
                      <input type="text" name="mobile" id="signup_phone" required='required' placeholder="mobile">
                      <span class="text--regular text--light custom--label">Mobile</span>
                    </label>
                  </div>
                  <div class="form--group">
                    <label for="n_pass" class="custom--input custom__password">
                      <input type="password" name="password" id="n_pass" required='required' placeholder="Create Password">
                      <span class="text--regular text--light custom--label">Create Password</span>
                      <img class="img-fluid togglePassword" width="22" src="/assets/images/eye-show-icon.svg"  alt="info icon">
                    </label>
                  </div>
                  <div class="form--group">
                    <div class="info">
                      <img class="img-fluid" src="/assets/images/info-icon.svg" alt="info icon">
                      <p class="text--light text--regular">Must be atleast 8 characters with one uppercase letter</p>
                    </div>
                    <label for="c_pass" class="custom--input custom__password ">
                      <input type="password" name="password_confirmation" id="c_pass" required='required' placeholder="Confirm Password">
                      <span class="text--regular text--light custom--label">Confirm Password</span>
                      <img class="img-fluid togglePassword" width="22" src="/assets/images/eye-show-icon.svg"  alt="info icon">
                    </label>
                  </div>
                  <div class="submit">
                      <input type="hidden" name="page_name" value="signup-page" >
                      <input type="hidden" name="company_name" value="{{ env('COMPANY_NAME') }}" >
                    <a href="javascript:void(0)" class="text--medium button-rounded button-rounded__dark arrow--button__nextBtn_new">Sign up</a>
                  </div>
              
              <div class="or-divider text--dark text--regular">
                <span>Or</span>
              </div>
              <!--div class="google">
                <a href="#" class="text--regular button-rounded button-rounded__white"><img src="/assets/images/g-logo.png" class="img-fluid" alt="google logo"><span class="text--light ">Sign up with Google</span></a>
              </div-->
              <div class="already">
                <p class="text--regular text--dark">Already a member? <a href="/testprep/login" class="text--red text--medium">Sign in</a></p>
              </div>
              
            </div>
            </form>
            <form id="signupotp" class="white-form form" >
            <div class="stepper--content otp" id="step2">
              
                  
                  <!--<a href="#" class="arrow arrow--link arrow--link__red arrow--link__back btn-prev"><span>Back</span></a>-->
                  <div class="form--header">
                    <h1 class="text--semi text--dark">Enter OTP</h1>
                  </div>
                  <p class="otp--header text--regular text--light">
                    Please enter the verification code shared to <span class="text--dark text--medium otpnum">91****8345 </span> and <span class="text--dark text--medium otpemail">sa****.com </span>
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
                    <p class="text--regular text--dark">Still not recieved OTP? <a class="text--red text--medium" href="javascript:void(0);" onclick="commonSignupResend()">Resend OTP</a></p>
                  </div>
                  <div class="submit">
                      <input type="hidden" name="page_name" id="page_name" value="signup-page" >
                      <input type="hidden" name="company_name" value="{{ env('COMPANY_NAME') }}" >
                      <input type="hidden" name="otpmobile" id="otpmobile" value="" >
                      <input type="hidden" name="otpemail" id="otpemail" value="" >
                    <a href="javascript:void(0)" class="text--medium button-rounded button-rounded__dark arrow--button__nextBtn_new">Submit</a>
                  </div>
              
              
            </div>
            </form>
              
        </div>
      </div>
    </div>
  </div>
  </div>
  
  @endsection