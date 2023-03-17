@extends('layout.testprep.main')
@section('metatag')
<x-testprep.metatag :pagemeta="$pagemeta" />
@endsection
@section('main-container')
<body class="bg-white">

<body class="bg-white">
    <x-testprep.navbar active="Home" />
    <main class="home">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
       <section class="section hero">
        <div class="custom-container">
          <div class="row">
            <div class="col-lg-7 order-lg-1 order-2">
              <div class="hero--slider hero--slider__left owl-carousel mt-0">
                <div class="slider-item">
                  <h1 class="section--hero text--primary text--semi mb-3">Empowering Students to crack IELTS in 10 days </h1>
                  <p class="section--hero__desc text--light text--regular mb-4">Redefining the Language Test Prep Ecosystem</p>
                  <ul class="tick--container">
                    <li class="tick--list text--primary ">Top 5% Master Trainers</li>
                    <li class="tick--list text--primary mt-2">Skill based batch matchmaking </li>
                    <li class="tick--list text--primary mt-2">1:1 Speaking Session</li>
                    <li class="tick--list text--primary mt-2">Crack it Mock Tests</li>
                  </ul>

                 <p class="section--hero__desc text--light text--regular mt-4">Get expert academic guidance.
                    <a href="#demo-form" class="arrow arrow--link arrow--link__black arrow--link__" id="@@id"><span>Register</span></a>
                  </p>

                </div>
                <div class="slider-item">
                  <h1 class="section--hero text--primary text--semi mb-3">Cambridge University collaborates with Canamprep to launch IELTS centres </h1>
         <p class="section--hero__desc text--light text--regular mt-4">Get expert academic guidance.
                    <a href="#demo-form" class="arrow arrow--link arrow--link__black arrow--link__" id="@@id"><span>Register</span></a>
                  </p>
                </div>
              </div>
    <!--
              <p class="text--light text--regular hero--cta mt-4">Enroll for a free demo Class</p>
              <form class="hero--searchbar" autocomplete="off mt-2">
                <div class="d-flex align-items-center hero--searchbar__left ">
                  <select data-size="7" class="country-picker" data-width="140" data-style="custom-btn">
                    <option>Select Course</option>
                    <option>IELTS</option>
                    <option>PTE</option>
                    <option>TOEFL</option>
                    <option>GRE</option>
                  </select>
                  <input type="text" placeholder="Enter Mobile Number">
                </div>
                <a href="javascript:void(0)" class="arrow arrow--button arrow--button__redBg" ><span>Book Now</span></a>
              </form>
    -->
            </div>
            <div class="col-lg-5 order-lg-2 order-1">
              <div class="hero--slider hero--slider__right owl-carousel">
                <div class="hero--slider__image"> <img class="img-fluid lazyload" data-src="/prep/assets/images/ielts-hero1.webp" alt="Canamprep" title="Canamprep"> </div>
                <div class="hero--slider__image"> <img class="img-fluid lazyload" data-src="/prep/assets/images/cambridge-banner.webp" alt=""> </div>
                <!--div class="hero--slider__image">
                  <img class="img-fluid" data-src="/prep/assets/images/hero-3.png" alt="">
                </div-->
              </div>
            </div>
          </div>
          <div class="hero--counter">
            <div class="hero--counter__item">
              <p class="hero--counter__number text--semi text--red"><span class="text--primary ">50,000</span> +</p>
              <p class="hero--counter__text text--regular text--light">Trusted Students</p>
            </div>
            <div class="hero--counter__item">
              <p class="hero--counter__number text--semi text--red"><span class="text--primary " >1 M</span> +</p>
              <p class="hero--counter__text text--regular text--light">Minutes Taught</p>
            </div>
            <div class="hero--counter__item mb-0">
              <p class="hero--counter__number text--semi text--red"><span class="text--primary " >9/10 learners</span></p>
              <p class="hero--counter__text text--regular text--light">scored 7+ band in 1 attempt</p>
            </div>
            <div class="hero--counter__item mb-0">
              <p class="hero--counter__number text--semi text--red"><span class="text--primary">5.5 Crore </span> +</p>
              <p class="hero--counter__text text--regular text--light">Classes Attended</p>
            </div>
          </div>
        </div>
      </section>


          <section class="section explore">
        <div class="custom-container border-top">
            <p class="section--tag text--light">Services</p>
          <h2 class="section--title text--primary text--semi mb-10">Featured Courses</h2>





             <div class="owl-carousel  exploreSlider">



                        <a href="{{ url('/testprep/ielts')}}" class="country--card" >
                <figure class="country--figure">
                  <img  src="/prep/assets/images/ielts-home.webp" class="country__img img-fluid lazyload" alt="IELTS">
                  <img src="/prep/assets/images/ielts-circle.png" class="country__flag lazyload" alt="IELTS">
                </figure>
                <p class="country--name text--primary text--semi">IELTS</p>
              </a>


                  <a href="{{ url('/testprep/toefl')}}" class="country--card">
                <figure class="country--figure">
                  <img  src="/prep/assets/images/tofel-home.webp" class="country__img img-fluid lazyload" alt="TOEFL">
                  <img src="/prep/assets/images/tofel-circle.png" class="country__flag lazyload" alt="TOEFL">
                </figure>
                <p class="country--name text--primary text--semi">TOEFL</p>
              </a>


                  <a href="{{ url('/testprep/pte')}}" class="country--card">
                <figure class="country--figure">
                  <img  src="/prep/assets/images/pte-home.webp" class="country__img img-fluid lazyload" alt="PTE">
                  <img src="/prep/assets/images/pte-circle.png" class="country__flag lazyload" alt="PTE">
                </figure>
                <p class="country--name text--primary text--semi">PTE</p>
              </a>


                  <a href="{{ url('/testprep/cael')}}" class="country--card">
                <figure class="country--figure">
                  <img  src="/prep/assets/images/cael-home.webp" class="country__img img-fluid lazyload" alt="CAEL">
                  <img src="/prep/assets/images/cael-circle.png" class="country__flag lazyload" alt="CAEL">
                </figure>
                <p class="country--name text--primary text--semi">CAEL</p>
              </a>


                  <a href="{{ url('/testprep/celpip')}}" class="country--card">
                <figure class="country--figure">
                  <img  src="/prep/assets/images/celpip-home.webp" class="country__img img-fluid lazyload" alt="CELPIP">
                  <img src="/prep/assets/images/celpip-circle.png" class="country__flag lazyload" alt="CELPIP">
                </figure>
                <p class="country--name text--primary text--semi">CELPIP</p>
              </a>

                 <a href="{{ url('/testprep/duolingo')}}" class="country--card">
                <figure class="country--figure">
                  <img  src="/prep/assets/images/dulingo-home.webp" class="country__img img-fluid lazyload" alt="Duolingo">
                  <img src="/prep/assets/images/dulingo-circle.png" class="country__flag lazyload" alt="Duolingo">
                </figure>
                <p class="country--name text--primary text--semi">DUOLINGO</p>
              </a>





            </div>




      </section>

      <section class="better-study section">
        <div class="custom-container">
          <div class="row">
            <div class="d-flex flex-column">
              <h2 class="section--title text--semi m-auto text-center">Success Delivered!</h2>
              <p class="text--light text--regular text-center w-80 m-auto mt-5">At Canamprep, we understand that every student has different learning needs, and that's why we personalize our teaching approach to ensure each student gets proper guidance & assistance they need to achieve their desired IELTS band score.</p>
              <div class="w-70 w-sm-100 m-auto text-center mt-md-11 mt-4"> <img class="lazyload img-fluid" data-src="/prep/assets/images/best-test.svg" alt="Duolingo"> </div>
            </div>
          </div>
          <div class="in-test-class mt-md-10 mt-8">
            <div class="row">
              <div class="col-md-3 mb-3">
                <div class="what--list">
                  <div class="what--list__image"> <i class="bx bx-select-multiple"></i> </div>
                  <div class="what--list__right mt-3 pl-md-0 pl-4">
                    <h3 class="text--primary mb-4">360* Learning</h3>
                    <p class="text--light text--regular">Learn more efficiently with study paths designed for you</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="what--list">
                  <div class="what--list__image"> <i class="bx bxs-videos"></i></div>
                  <div class="what--list__right mt-3 pl-md-0 pl-4">
                    <h3 class="text--primary mb-4">Recorded Classes</h3>
                    <p class="text--light text--regular">Get unlimited practice with multiple choice, written questions, and more</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="what--list">
                  <div class="what--list__image"> <i class="bx bx-user-voice"></i> </div>
                  <div class="what--list__right mt-3 pl-md-0 pl-4">
                    <h3 class="text--primary mb-4">Speaking Sessions</h3>
                    <p class="text--light text--regular">Customize tests to measure how well you know the material</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="what--list">
                  <div class="what--list__image"> <i class="bx bx-select-multiple"></i> </div>
                  <div class="what--list__right mt-3 pl-md-0 pl-4">
                    <h3 class="text--primary mb-4">Dynamic feedback </h3>
                    <p class="text--light text--regular">Go beyond memorization to master concepts</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__black best--band-section mb-0 mission--bg">
        <div class="custom-container">
          <div class="best-band-container">

            <div class="row">
              <div class="col-md-7 best--bands mt-md-3 ">
                   <p class="section--tag text--light">Selections at Canamprep</p>
                <h2 class="section--title text--white text--semi mb-5">We are proud to have assisted over 50,000 students score 7+ bands</h2>
                <ul class="tick--container">
                  <li class="tick--list text-white ">Improve your band score by 0.5 in the first week.</li>
                </ul>
                <p class="text-white mt-5">Experience the most advanced IELTS test prep</p>
                <a href="@php echo env('TESTPREP_STUDENT_LOGIN') .'signup-signin'; @endphp" class="arrow arrow--button arrow--button__white mt-5"><span>Book Now</span></a></div>
                <div class="col-md-5">
                <div class="student-collage mt-md-0 mt-5">
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/kovid.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Kovid Jain</h2>
                      <h3>8 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/gaurav.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Gaurav Sharma</h2>
                      <h3>8 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" class="lazyload" data-src="/prep/assets/images/srishti.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Srishti</h2>
                      <h3>7.5 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/Tanishtha.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Tanishtha Bansal</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/karanpreet.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Karanpreet Singh</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/vansh.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Vansh Rai</h2>
                      <h3>7.5 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/navjot.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Navjot Kaur</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/simran.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Simran</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/mili.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Mili Mago</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/karuna.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Karuna</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/sanam.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Chirag Dalal</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/jameet.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Jasneet Kaur</h2>
                      <h3>7.5 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/gulshan.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Gulshan Kumar</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box"> <img class="lazyload" data-src="/prep/assets/images/rasika.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Rasika</h2>
                      <h3>7 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box img-cloud__img-box--lg-1"><img class="lazyload" data-src="/prep/assets/images/DIVNOOR.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Divnoor Kaur</h2>
                      <h3>8 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box img-cloud__img-box--lg-2"><img class="lazyload" data-src="/prep/assets/images/SUMATI.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Sumati Sood</h2>
                      <h3>8 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box img-cloud__img-box--lg-3"><img class="lazyload" data-src="/prep/assets/images/harman.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Harman Bir Sigh</h2>
                      <h3>8 Band | IELTS</h3>
                    </div>
                  </div>
                  <div class="img-cloud__img-box img-cloud__img-box--lg-4"><img class="lazyload" data-src="/prep/assets/images/yatik.jpg" alt="Student Name">
                    <div class="img-cloud__content">
                      <h2>Yatik Mittal</h2>
                      <h3>8 Band | IELTS</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="section explore ">
        <div class="custom-container pt-md-12 pt-10">
            <p class="section--tag text--light">What's New on</p>
          <h2 class="section--title text--primary text--semi mb-10">Canamprep</h2>
          <div class="new--prep--slider owl-carousel">
            <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="/prep/assets/images/banner-2.webp" alt="Enrol Now">
                <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2 fs-15" onclick="location.href='{{url('/testprep/course-detail/10-days-crash-course')}}'" ><span>Enrol Now</span></button>
            </div>
            <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="/prep/assets/images/banner-3.webp" alt="Enrol Now">
                <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2 fs-15" onclick="location.href='{{url('/testprep/course-detail/30-days-skill-booster-course')}}'" ><span>Enrol Now</span></button>
            </div>
            <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="/prep/assets/images/banner-1.webp
                " alt="Enrol Now">
                <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2 fs-15" onclick="location.href='{{url('/testprep/course-detail/60-days-extensive-preparation-course')}}'" ><span>Enrol Now</span></button>
            </div>
            <div class="student-slide-thumb position-relative"> <img class="img-fluid lazyload" data-src="/prep/assets/images/banner-2.webp" alt="Enrol Now">
                <button class="arrow arrow--button arrow--button__black arrow--button__ border-0 mt-md-0 mt-3 px-md-4 px-3 py-md-3 py-2 fs-15" onclick="location.href='{{url('/testprep/course-detail/10-days-hybrid-crash-course')}}'" ><span>Enrol Now</span></button>
            </div>
          </div>
          <div class="d-flex justify-content-between why--controls  mt-md-9 mt-3">
            <div class="slider-controls"> <a href="javascript:void(0)" class="btn-prev"></a> <a href="javascript:void(0)" class="btn-next"></a> </div>
            <!--a href="./article.html" class="arrow arrow--button arrow--button__red arrow--button__" id="@@id"><span>View All</span></a--> </div>
        </div>
      </section>
      <section class="section bg-light2 explore ">
        <div class="custom-container ">
          <h2 class="section--title text--primary text--semi mb-md-11">Explore all our Offerings</h2>
          <ul class="nav tabs" id="myTab" role="tablist">
            <li class="tabs--item"> <a class="tabs--link active" id="ielts-tab" data-toggle="tab" href="#ielts" role="tab" aria-controls="ielts" aria-selected="true">IELTS</a> </li>
            <!--li class="tabs--item ms-10"> <a class="tabs--link" id="pte-tab" data-toggle="tab" href="#pte" role="tab" aria-controls="pte" aria-selected="false">PTE</a> </li-->
          </ul>
<div class="tabs--content tab-content mt-md-10 mt-8" id="myTabContent">
<div class="tab-pane fade show active" id="ielts" role="tabpanel" aria-labelledby="ielts-tab">
              <h4 class="fs-25"><span class="bg-danger text-white px-4 radius-10">Free</span> LIVE Classes</h4>
          <x-testprep.dashboard.liveclasses  :onlineBatches="$onlineBatches" />
          </div>
</div>
<div class="d-flex justify-content-between why--controls  mt-md-9 mt-0" >
            <div class="slider-controls"> <a href="javascript:void(0)" class="btn-prev "></a> <a href="javascript:void(0)" class="btn-next "></a> </div>
            <!--a href="./article.html" class="arrow arrow--button arrow--button__red arrow--button__" id="@@id"><span>View All</span></a--> </div-->
        </div>
            
        </div>
      </section>
      <x-testprep.forms.demoformv2/>
      <section class="section prep-feature">
        <div class="custom-container">
          <div class="row">
            <div class="col-md-5">
                <p class="section--tag text--light">Free Material</p>
              <h2 class="section--title text--dark text--semi">Study Material</h2>
            </div>
              <div class="col-md-12">
                  <x-testprep.dashboard.studymaterial />
                  </div>
          </div>
        </div>
      </section>
      <section class="section getting ">
        <div class="custom-container border-top ">
          <p class="section--tag text--light">Supertrainers</p>
          <h2 class="section--title text--primary text--semi mb-md-9 mb-0">Gain an edge by learning from the best educators</h2>
          <div class="row" >
            <div class="col-md-4 mb-3 about">
              <div class="what--list with-icon">
                <div class="what--list__image"> <i class='bx bxs-edit'></i> </div>
                <div class="what--list__right">
                  <p class="text--light text--regular">Learn and gain insights from ex-IELTS examiner. Know all the hidden tips and tricks required to crack IELTS</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3 about">
              <div class="what--list with-icon">
                <div class="what--list__image"> <i class='bx bx-user'></i> </div>
                <div class="what--list__right">
                  <p class="text--light text--regular">Our entire faculty is certified and have scored above 7.5 bands with our lead team having scored above 8 bands</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3 about">
              <div class="what--list with-icon">
                <div class="what--list__image"> <i class='bx bx-user-pin'></i> </div>
                <div class="what--list__right">
                  <p class="text--light text--regular">Combined Teaching Experience of over 50 years, assisted 50,000 students, 10 million + minutes spent providing quality education to our learners.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="super--coach owl-carousel">
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img class="lazyload"  data-src="/prep/assets/images/vishali.webp" alt="Vaishali Gupta" title="Vaishali Gupta">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">11+ years exp</div>
                  <h3>Vaishali Gupta</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard"><img  class="lazyload" data-src="/prep/assets/images/arun-dhati.webp" alt="Arun Dhati" title="Arun Dhati">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">5+ years exp</div>
                  <h3>Arun Dhati</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img  class="lazyload" contenteditable=""data-src="/prep/assets/images/joyti.webp" alt="Jyoti" title="Jyoti">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">6+ years exp</div>
                  <h3>Jyoti</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img class="lazyload" data-src="/prep/assets/images/komal-singh.webp" alt="Komal-Singh" title="Komal-Singh">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">4+ years exp</div>
                  <h3>Komal Singh</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img class="lazyload" data-src="/prep/assets/images/kritika.webp" alt="Kritika" title="Kritika">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">5+ years exp</div>
                  <h3>Kritika</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img class="lazyload" data-src="/prep/assets/images/faculty6.webp" alt="Mandeep" title="Mandeep">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">5+ years exp</div>
                  <h3>Mandeep</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img class="lazyload" data-src="/prep/assets/images/sonam-kapoor.webp" alt="Sonam Kapoor" title="Sonam Kapoor">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">6+ years exp</div>
                  <h3>Sonam Kapoor</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="study-material ">
            <div class="box1">
              <div class="TeacherCard "><img class="lazyload" data-src="/prep/assets/images/neha-sharma.webp" alt="Neha-sharma" tile="Neha-sharma">
                <div class="TeacherCard_teacher-slider">
                  <div class="TeacherCard_tag">8+ years exp</div>
                  <h3>Neha Sharma</h3>
                  <p>IELTS Master Trainer</p>
                  <h4>Chandigarh</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section wall-of-fame ">
        <div class="custom-container ">
                        <p class="section--tag text--light">Student Stories</p>
          <h2 class="section--title text--primary text--semi">Canamprep Wall of Fame</h2>
          <div class="famebox-row">
            <div class="student-fame-box">
              <div class="border wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Sandeep.jpg" alt="Sandeep Singh"> </div>
                </div>
                <div class="wall-decp">
                  <h4>Sandeep Singh</h4>
                  <p><img class="lazyload mr-2 " data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 9 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Yatik.jpg" alt="Mock Test"> </div>
                </div>
                <div class="wall-decp">
                  <h4>Yatik Mittal</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 9 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Vishal.jpg" alt="Vishal"></div>
                </div>
                <div class="wall-decp">
                  <h4>Vishal</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 9 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Robinpreet.jpg" alt="Robinpreet"> </div>
                </div>
                <div class="wall-decp">
                  <h4>Robinpreet</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 8 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Rajvansh.jpg" alt="Rajvansh Singh"> </div>
                </div>
                <div class="wall-decp">
                  <h4>Rajvansh Singh</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 8 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box ">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Muskan.jpg" alt="Muskan Thakur"></div>
                </div>
                <div class="wall-decp">
                  <h4>Muskan Thakur</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 8 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Avantika.jpg" alt="Avantika Sharma"> </div>
                </div>
                <div class="wall-decp">
                  <h4>Avantika Sharma</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 8 band</p>
                </div>
              </div>
            </div>
            <div class="student-fame-box">
              <div class="border rounded wallimg p-md-5 p-1 radius-10">
                <div class="student-wall-img">
                  <div class="thumb-wall-img"> <img class="lazyload " data-src="/prep/assets/images/student/Ashneet.jpg" alt="Ashneet Kaur"></div>
                </div>
                <div class="wall-decp">
                  <h4>Ashneet Kaur</h4>
                  <p><img class="lazyload  mr-2" data-src="/prep/assets/images/student/ielts-logo2.svg" alt="IELTS"> | 8 band</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="wallfame py-md-16 py-10 pt-0">
        <div class="custom-container">
          <div class="online-box-tab cta cta--dark p-md-5 p-3 radius-10">
            <div class="row">
              <div class="col-md-6 titlebox">
                <h2 class="section--title text--semi text--white my-md-5 my-4">Book your free IELTS Class </h2>
                <p class="text--white mb-3">Let Canamprep Plus be the fuel to your igniting dream of studying or immigrate overseas🌎!</p>
                <p class="text--white mb-4"> Take the first step towards kick-starting your IELTS test prep today! </p>
                <div class="bx-btn mt-md-5">
                    <button  class="arrow arrow--button arrow--button__white arrow--button__ border-0 me-3" data-toggle="modal" data-target="#zoomModal" >Book Demo</button>
                    <button  onclick="location.href='@php echo env('TESTPREP_STUDENT_LOGIN') .'dashboard/band_predictor.php' @endphp' " class="arrow arrow--button arrow--button__red arrow--button__"><span>Band Predictor Test</span></button>
                </div>
              </div>
              <div class="col-md-6 bk-img d-md-block d-none">
                <div class="donline"> <img class="lazyload" data-src="/prep/assets/images/3d-girl-laptop.webp" alt="img"> </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {!! $blog_section !!}
      <!--section class="section blog">
        <div class="custom-container">
          <p class="section--tag text--light">Blogs and Articles</p>
          <h2 class="section--title text--semi">Curated content to keep you updated on the latest education trends, news and more.</h2>
        </div>
        <div class="owl-carousel blog--body">
          <div class="blog--item"> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Canada to make the immigration process easier by 2020 </h3>
              <p class="blog--item__desc text--regular text--light">How will work and life change in a material way over
                the next ~5 years? This is the question I challenge..</p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-1.webp" alt=""> </div>
            </a> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Study in Norway</h3>
              <p class="blog--item__desc text--regular text--light">Weâ€™ve all heard the rampant concerns about artificial
                intelligence replacing jobs etc, but the first major wholesale replacement I see coming in our everyday.. </p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-2.webp" alt=""> </div>
            </a> </div>
          <div class="blog--item"> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Updated IELTS band requirements for UK</h3>
              <p class="blog--item__desc text--regular text--light">Weâ€™ve all heard the rampant concerns about artificial
                intelligence replacing jobs etc, but the first major wholesale replacement I see coming in our everyday.. </p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in UK</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-3.webp" alt=""> </div>
            </a> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Canada to make the immigration process easier by 2020 </h3>
              <p class="blog--item__desc text--regular text--light">How will work and life change in a material way over
                the next ~5 years? This is the question I challenge..</p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-4.webp" alt=""> </div>
            </a> </div>
          <div class="blog--item"> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Canada to make the immigration process easier by 2020 </h3>
              <p class="blog--item__desc text--regular text--light">How will work and life change in a material way over
                the next ~5 years? This is the question I challenge..</p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-1.webp" alt=""> </div>
            </a> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Study in Norway</h3>
              <p class="blog--item__desc text--regular text--light">Weâ€™ve all heard the rampant concerns about artificial
                intelligence replacing jobs etc, but the first major wholesale replacement I see coming in our everyday.. </p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-2.webp" alt=""> </div>
            </a> </div>
          <div class="blog--item"> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Canada to make the immigration process easier by 2020 </h3>
              <p class="blog--item__desc text--regular text--light">How will work and life change in a material way over
                the next ~5 years? This is the question I challenge..</p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>
            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-1.webp" alt=""> </div>
            </a> <a href="#" class="blog--item__list">
            <div class="blog--item__left">
              <h3 class="blog--item__title text--semi text--primary">Study in Norway</h3>
              <p class="blog--item__desc text--regular text--light">Weâ€™ve all heard the rampant concerns about artificial
                intelligence replacing jobs etc, but the first major wholesale replacement I see coming in our everyday.. </p>
              <p class="blog--item__detail text--regular text--lighter">5 min read â€¢ Study in Canada</p>

            </div>
            <div class="blog--item__right"> <img class="img-fluid  lazyload blog--item__image" data-src="/prep/assets/images/b-2.webp" alt=""> </div>
            </a> </div>
        </div>
        <div class="custom-container">
          <div class="d-flex justify-content-between why--controls">
            <div class="slider-controls"> <a href="javascript:void(0)" class="btn-prev"></a> <a href="javascript:void(0)" class="btn-next"></a> </div>
            <a href="./article.html" class="arrow arrow--button arrow--button__red arrow--button__" id="@@id"><span>View More</span></a> </div>
        </div>
      </section-->
    </main>

@endsection
@section('scripts')
<script type="text/javascript">
        //console.log('Hello');
       $(document).on("click", 'button[data-target="#appointleadModal"]', function () {
  $('#appointleadModal #appdate').val($(this).attr('app_date'));
  $('#appointleadModal #apptime').val($(this).attr('app_time'));
       var html = " Demo class Date & Time:  "+$(this).attr('app_date')+' '+$(this).attr('app_time');
       $('#appointleadModal .pop--heading').html(html);

});
      </script>


@endsection
