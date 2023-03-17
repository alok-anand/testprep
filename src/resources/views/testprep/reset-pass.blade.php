@extends('layout.testprep.main')

@section('main-container')
<div class="sign">
  <div class="custom-container">
    <div class="sign--menu">
      <a href="/" class="d-block">
        <img class="img-fluid sign--logo" src="/assets/images/header-logo.png" alt="Canam Logo">
        <span class="sr-only">Canam Logo</span>
      </a>
      <a href="/login" class="mega--close"  id="mega--closesignup"><span class="sr-only">Close</span></a>
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
      <div class="col-lg-5 offset-lg-1">

        <form class="white-form form" autocomplete="off" id="reset_pass_form" method="post" action="/testprep/savepassword">
    @csrf
          <div class="stepper--content otp active" id="step1">
            <div class="form--header">
              <h1 class="text--semi text--dark">Set a new Password</h1>
            </div>
            <p class="otp--header text--regular text--light">Your new password must be different from the previous password.</p>
            <div class="form--group">
              <label for="n_password" class="custom--input custom__password">
                <input type="text" id="n_password" name="password" required="required" placeholder="New password">
                <span class="text--regular text--light custom--label">New password</span>
              </label>
              <div class="info">
                <img class="img-fluid" src="/assets/images/info-icon.svg" alt="info icon">
                <p class="text--light text--regular">Must be atleast 8 characters with one uppercase letter</p>
              </div>
            </div>
            <div class="form--group">
              <label for="c_password" class="custom--input custom__password">
                <input type="text" id="c_password" name="password_confirmation" required="required" placeholder="Confirm password">
                <span class="text--regular text--light custom--label">Confirm password</span>
              </label>
            </div>
            <div class="submit">
        <input type="hidden" id="email" name="email" value="{{$email}}">
        <input type="hidden" id="reset_token" name="reset_token" value="{{$reset_token}}">
        <a href="javascript:void(0);" class="text--medium button-rounded button-rounded__dark">Reset Password</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection