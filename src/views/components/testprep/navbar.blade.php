<nav class="navbar fixed-top navbar-expand-lg p-0">
  <div class="custom-container"> <a class="navbar--brand" href="{{ url('/testprep') }}"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/cp-logo.svg') }}" alt="CanamPrep"> <span class="sr-only">Canam</span></a>
    <div class="nav-right"> <a href="./contact.html" class="button-rounded button-rounded__dark mobile" data-toggle="modal" data-target="#zoomModal">Free Demo Class</a>
      <div class="hamburger hamburger--squeeze" data-toggle="collapse" data-target="#header-menu" aria-controls="header-menu" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="header-menu">
      <ul class="navbar-nav" id="header-menu-list">
        <li class="nav-item "><a href="{{ url('/testprep') }}" class="text--primary @if($active =='Home') {{ 'active' }} @endif  @@home">Home</a></li>

      <!--  <li class="nav-item @if($active ==='IELTS') {{ 'active' }} @endif "> <a href="{{ route('testprep.exams',['type'=> 'ielts']) }}" class="text--primary @if($active ==='IELTS') {{ 'active' }} @endif @@ielts">IELTS</a>  </li>-->
  
		         <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Exams </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li> <a class="dropdown-item" href="{{ url('/testprep/ielts') }}"> IELTS </a> </li>
            <li> <a class="dropdown-item" href="{{ url('/testprep/toefl') }}"> TOEFL </a> </li>
            <li> <a class="dropdown-item" href="{{ url('/testprep/pte') }}">PTE</a> </li>
            <li> <a class="dropdown-item" href="{{ url('/testprep/cael') }}"> CAEL </a> </li>
            <li> <a class="dropdown-item" href="{{ url('/testprep/celpip') }}">CELPIP </a> </li>
			 <li> <a class="dropdown-item" href="{{ url('/testprep/duolingo') }}">Duolingo</a> </li>
          </ul>
        </li> 
        <li class="nav-item "><a href="{{ url('/') }}" class="text--primary @if($active =='Study Abroad') {{ 'active' }} @endif  @@home">Study Abroad</a></li>

        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Study Destination </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li> <a class="dropdown-item" href="/study-in-australia"> <img class="img-fluid img-multi lazyload " data-src="{{ URL::to('/prep/assets/images/austrailia-flag.svg') }}" alt="Study in Australia"> <span class="menutextrt">Study in Australia</span> </a> </li>
            <li> <a class="dropdown-item" href="/study-in-canada"> <img class="img-fluid img-multi lazyload " data-src="{{ URL::to('/prep/assets/images/canada-flag.svg') }}" alt="Study in Canada"> <span class="menutextrt">Study in Canada</span> </a> </li>
            <li> <a class="dropdown-item" href="/study-in-newzealand"> <img class="img-fluid img-multi lazyload" data-src="{{ URL::to('/prep/assets/images/nz-flag.svg') }}" alt="Study in New Zealand"> <span class="menutextrt">Study in New Zealand</span> </a> </li>
            <li> <a class="dropdown-item" href="/study-in-uk"> <img class="img-fluid img-multi lazyload " data-src="{{ URL::to('/prep/assets/images/uk-flag.svg') }}" alt="Study in UK"> <span class="menutextrt">Study in UK</span> </a> </li>
            <li> <a class="dropdown-item" href="/study-in-usa"> <img class="img-fluid img-multi lazyload " data-src="{{ URL::to('/prep/assets/images/usa-flag.svg') }}" alt="Study in USA"> <span class="menutextrt">Study in USA</span> </a> </li>
          </ul>
        </li>
        <li class="nav-item @if($active ==='Blogs') {{ 'active' }} @endif "> <a href="{{ url('/blog') }}" class="text--primary @@blogs">Blogs</a> </li>
        <li class="nav-item d-md-block d-none @if($active === 'Sign in') {{ 'active' }} @endif {{ $active == 'Sign in'?'active' :''; }}"> <a href="./contact.html" class="button-rounded button-rounded__dark" data-toggle="modal" data-target="#zoomModal">Free Demo Class</a> </li>
        <li class="nav-item py-0"> <a href="{{ url('/testprep/login') }} " class="text--primary w-icon profile @@profile">Sign in </a> </li>
      </ul>
    </div>
  </div>
</nav>