@extends('layout.testprep.main')

@section('main-container')
<div class="sign">
  <div class="custom-container">
    <div class="sign--menu">
      <a href="/" class="d-block">
        <img class="img-fluid sign--logo" src="/prep/assets/images/cp-logo.svg" alt="Canam Logo">
        <span class="sr-only">Canam Prep Logo</span>
      </a>
      <a href="/login" class="mega--close"  id="mega--closesignup"><span class="sr-only">Close</span></a>
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
      <div class="col-lg-5 offset-lg-1">

        <form class="white-form form" autocomplete="off" id="forgot_pass_form">
          @if($errors->has('error'))
        <div class="text--regular text--red invalid-message">{{ $errors->first('error') }}</div>
      @endif
          <div class="stepper--content otp active" id="step1">
            <a href="/login" class="arrow arrow--link arrow--link__red arrow--link__back"><span>Back</span></a>
            <div class="form--header">
              <h1 class="text--semi text--dark">Forgot password?</h1>
            </div>
			@if($errors->has('error'))
				<div class="text--regular text--red invalid-message">{{ $errors->first('error') }}</div>
			@endif
      @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif
            <p class="otp--header text--regular text--light">Enter the email address associated with your account and we'll send you a link to reset your password.</p>
            <div class="form--group">
              <label for="email" class="custom--input custom__email">
                <input type="text" id="email" name="email" required="required" placeholder="email">
                <span class="text--regular text--light custom--label">Email</span>
              </label>
            </div>
            <div class="submit">
              <a href="javascript:void(0);" class="text--medium button-rounded button-rounded__dark arrow--button__nextBtn_new">Request set link</a>
            </div>
          </div>
          <div class="stepper--content otp" id="step2">
            <a href="javascript:void(0)" class="arrow arrow--link arrow--link__red arrow--link__back btn-prev"><span>Back</span></a>
            <div class="form--header">
              <h1 class="text--semi text--dark">Set a new Password</h1>
            </div>
            <p class="otp--header text--regular text--light">Your new password must be different from the previous password.</p>
            <div class="form--group">
              <label for="n_password" class="custom--input custom__password">
                <input type="text" id="n_password" placeholder="New password">
                <span class="text--regular text--light custom--label">New password</span>
              </label>
              <div class="info">
                <img class="img-fluid" src="/assets/images/info-icon.svg" alt="info icon">
                <p class="text--light text--regular">Must be atleast 8 characters with one uppercase letter</p>
              </div>
            </div>
            <div class="form--group">
              <label for="c_password" class="custom--input custom__password">
                <input type="text" id="c_password" placeholder="Confirm password">
                <span class="text--regular text--light custom--label">Confirm password</span>
              </label>
            </div>
            <div class="submit">
              <a href="#" class="text--medium button-rounded button-rounded__dark">Reset Password</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection