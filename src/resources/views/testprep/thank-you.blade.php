@extends('layout.testprep.main')
@section('styles')
<!--link rel="stylesheet" href="{{ URL::to('/prep/css/scroll.min.css')}}" type="text/css" media="all" /-->
@endsection
@section('main-container')
<body class="bg-white">
<nav class="navbar fixed-top navbar-expand-lg">
  <div class="custom-container"> <a class="navbar--brand" href="./index.html"> <img class="img-fluid lazyload" data-src="/prep/assets/images/cp-logo.svg" alt="CanamPrep"> <span class="sr-only">Canam</span></a>
    <div class="nav-right"> <a href="./contact.html" class="button-rounded button-rounded__dark mobile">Free Demo Class</a>
      <div class="hamburger hamburger--squeeze" data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="header-menu">
      <div class="navbar-nav" id="header-menu-list">
        <div class="nav-item "> <a href="./index.html" class="text--primary active @@home">Home</a> </div>
        <div class="nav-item "> <a href="./canamprep-plus.html" class="text--primary @@prep">Canamprep Plus</a> </div>
        <div class="nav-item "> <a href="./ielts.html" class="text--primary @@ielts">IELTS</a> </div>
        <div class="nav-item"> <a href="./event.html" class="text--primary @@events">Events</a> </div>
        <div class="nav-item"> <a href="./blogs.html" class="text--primary @@blogs">Blogs</a> </div>
        <div class="nav-item web"> <a href="./contact.html" class="button-rounded button-rounded__dark">Free Demo Class</a> </div>
        <div class="nav-item"> <a href="./signup.html" class="text--primary w-icon profile @@profile">Sign in </a> </div>
      </div>
    </div>
  </div>
</nav>
<main class="home">



    <section class="section hero--secondary pt-md-5 pt-2">
    <div class="custom-container-sm">

            <!-- Order Success Checkmark -->
            <div class="checkmark-wrapper mt-5">
                <span class="checkmark"></span>
            </div>
            <!-- Order Success Checkmark -->
      <h1 class="section--hero text--primary text--semi">Thank you!</h1>
      <p class="section--hero__desc text--primary text--regular">Congratulations, your registration has been received. We will be in touch with you shortly. Thank you for your interest in this event.</p>
      <a href="{{ route('testprep.v2.index') }}" class="arrow arrow--button arrow--button__red arrow--button__left mt-5" id="@@id"><span>Back to Home</span></a>
    </div>
  </section>







</main>

@endsection
<!-- scripts -->
