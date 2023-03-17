@extends('layout.testprep.main')

@section('metatag')
<x-testprep.metatag :pagemeta="$pagemeta" />
 {!! $breadcrumSchema !!}
@endsection

@section('styles')
<link rel="stylesheet" href="{{ URL::to('/prep/css/scroll.min.css')}}" type="text/css" media="all" />
@endsection
@section('main-container')

<body class="bg-white">
<x-testprep.navbar active="IELTS"/>
<main class="course-detail">
<section class="section hero exam-header  pt-md-8 pt-0 pb-0">
<div class="custom-container">
<div class="row">
  <x-testprep.breadcrumb  :pagemeta="$pagemeta" />
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="exam-header mb-10 ">
      <div class="exam-icon"> <img class="lazyload img-fluid" data-src="/prep/assets/images/exam{{ strtolower($getPageInfo->type); }}.svg" alt="exam-{{ $getPageInfo->type; }}_image"> </div>
      <div class="exam-text">
        <h1>{!! $getPageInfo->h1tag; !!}</h1>
        <div class="user-tags">
          <div class="us-tag-icon bg-light2"><img class="lazyload me-4" data-src="/prep/assets/images/student-icon.svg" alt="Student">
            <p>50.5k+ Students Enrolled</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-8">
    <div class="exam-top-content">
      <ul class="nav nav-tabs" role="tablist" style="display: none">
        @php
// foreach($getPagetabs as $getPagetab)
// {
//   echo($getPagetab->atitle);
//   echo('<br/>');
//   echo($getPagetab->slug);
//    echo('<br/>');
// }

// @endphp
        @foreach($getPagetabs as $getPagetab)
        @if(strtolower($getPagetab->slug)=='ielts')

        @else
        <li class="nav-item"><a class="nav-link @if(strtolower($palias)== $getPagetab->slug) active @endif " href="@php echo route('testprep.exams',['type'=>strtolower($getPageInfo->type),'alias'=>$getPagetab->slug]); @endphp " >{{  $getPagetab->atitle }}</a></li>
        @endforelse
       @endforeach

        <!--li class="nav-item"><a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Eligibility</a></li>

        <li class="nav-item"><a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Exam Type</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab4" role="tab" data-toggle="tab">Exam Dates</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab5" role="tab" data-toggle="tab">IELTS Exam Dates 2022 India</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab6" role="tab" data-toggle="tab">Test Centers</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab7" role="tab" data-toggle="tab">Exam Fees</a></li>

        <li class="nav-item"><a class="nav-link" href="#tab8" role="tab" data-toggle="tab">Exam Registration</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab9" role="tab" data-toggle="tab">Exam Pattern</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab12" role="tab" data-toggle="tab">Syllabus</a></li-->


      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active">
            @php echo html_entity_decode($getPageInfo->content,ENT_QUOTES) @endphp
        </div>

      </div>
    </div>
    <div class="bb-box my-6">
      <div class="cta cta--dark p-4 radius-5">
        <div class="row">
          <div class="col-md-4">
            <div class="bg-white shadow-lg p-3 shadow-lg Settle-box radius-10 ">
              <h4 class="fs-18">Study and Settle Overseas </h4>
              <p class="text--dark text--regular fs-11">IELTS band requirement differ for migration and study permit. They also vary from country to country. </p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="country-flag">
              <div class="country-box mtbox1 p-3 ">
                <div class="c-box-flag"> <img class="lazyload me-4" data-src="/prep/assets/images/australia-flag.svg" alt="Australia"> </div>
                <h5>Australia</h5>
                <p>6.0+ Band</p>
                <p>7.0+ Band</p>
              </div>
              <div class="country-box mtbox2 p-3 ">
                <div class="c-box-flag"> <img class="lazyload me-4" data-src="/prep/assets/images/canada-flag.svg" alt="Canada"> </div>
                <h5>Canada</h5>
                <p>6.0+ Band</p>
                <p>7.0+ Band</p>
              </div>
              <div class="country-box mtbox3 p-3 ">
                <div class="c-box-flag"> <img class="lazyload me-4" data-src="/prep/assets/images/usa-flag.png" alt="USA"> </div>
                <h5>usa</h5>
                <p>6.0+ Band</p>
                <p>7.0+ Band</p>
              </div>
              <div class="country-box mtbox4 p-3 ">
                <div class="c-box-flag"> <img class="lazyload me-4" data-src="/prep/assets/images/uk-flag.svg" alt="UK"> </div>
                <h5>uk</h5>
                <p>6.0+ Band</p>
                <p>7.0+ Band</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bb-exam-info-box bg-light p-6 radius-10">
      <div class="row mb-4">
        <div class="col-md-4">
          <p>Date and Frequency</p>
        </div>
        <div class="col-md-8">
          <p class="text--regular text--primary">IELTS test dates are offered upto 4 times in a month making a total of 48 fixed dates in one calender year. The availability of IELTS dates in India may differ for Academic and General IELTS.</p>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-4">
          <p>Center and Admit Card</p>
        </div>
        <div class="col-md-8">
          <p class="text--regular text--primary">The IELTS Exam is offered across more than 50 locations across India. There is no admit card provided for IELTS examination.</p>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-4">
          <p>Result</p>
        </div>
        <div class="col-md-8">
          <p class="text--regular text--primary"> IELTS Exam results ase released 10 calendar days after the test for the paper based exam and 5-7 calendar days for the computer based test. The Candidate will receive only ONE original Test Report from (TRF). </p>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-4">
          <p>Score Reporting</p>
        </div>
        <div class="col-md-8">
          <p class="text--regular text--primary">A candidate may request up to 5 additional TRFs to be sent to the receiving institutions (universities, professional bodies, etc) within 1 month of taking the IELTS test. TRFs sent by courier will be sent via DHL and students will be charged accordingly. If the receiving institution accepts electronic submission of scores then that can be arranged through the IDP IELTS office free of charge.</p>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-4">
          <p>Score Validity</p>
        </div>
        <div class="col-md-8">
          <p class="text--regular text--primary">2 Years</p>
        </div>
      </div>
    </div>

	  <div class="bb-tabs explore mt-7">

	     <h3 class="section--title text--primary text--semi mb-8 title-three">Free Mock Tests</h3>
    <ul class="nav tabs" id="myTab" role="tablist">
      <li class="tabs--item"> <a class="tabs--link active" id="listening-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="countries" aria-selected="true">Listening</a> </li>
      <li class="tabs--item"> <a class="tabs--link" id="reading-tab" data-toggle="tab" href="#reading" role="tab" aria-controls="discipline" aria-selected="false">Reading</a> </li>
      <li class="tabs--item"> <a class="tabs--link" id="writing-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="discipline" aria-selected="false">Writing</a> </li>
      <li class="tabs--item"> <a class="tabs--link" id="speaking-tab" data-toggle="tab" href="#speaking" role="tab" aria-controls="discipline" aria-selected="false">Speaking</a> </li>
    </ul>
    <div class="tabs--content tab-content mt-12" id="myTabContent">
      <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening-tab">
        <div class="test-book-demo">
            @php
            $count = 1;
             foreach($getJsonTestData['listening'] as $lisnkey => $lisnval){ @endphp
                 <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
                   <div class="row p-4">
                     <div class="col-md-8"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14 ">Free</span>
                       <div class="mock-box-title mt-4">
                         <h3 class="text--semi text--dark me-4 mb-3 fs-20">{{  $lisnval->title  }}</h3>
                         <p class="text--regular text--light fs-12">12.1k Users</p>
                       </div>
                       <div class="cr-question">
                         <div class="qt-list fs-14"> <i class="bi bi-question-circle"></i> {{ $lisnval->totalquest }} Questions </div>
                         <div class="qt-list fs-14"> <i class="bi bi-graph-up"></i> {{ $lisnval->max_marks }}  Marks </div>
                         <div class="qt-list fs-14"> <i class="bi bi-clock"></i> {{ $lisnval->paper_duration }}  mins </div>
                       </div>
                       @php if(is_int(strpos($lisnval->title,"Cambridge"))) {
                           echo '<div style="margin-top:3px">'.'CAMBRIDGETEST'.'</div>';
                          } @endphp
                     </div>

                     @php
                       if(isset($user_detail->id)){
                           $url = 'testprep/dashboard/instruction.php?tsid='.$lisnval->tsid.'&catid='.$lisnval->category_id.'&tscatid='.$lisnval->ts_cat_assoc_id.'&ques='.$lisnval->totalquest.'&marks='.$lisnval->max_marks.'&dur='.$lisnval->paper_duration;
                           $buttontext = 'Start Now';
                       }else{
                           $url = 'testprep/signup-signin' ;
                            $buttontext = 'Unlock Now';
                       }   @endphp
                     <div class="col-md-4 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                       <div class="lock-button">
                         <button onclick="location.href = '{{  url($url); }}'"  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> {{ $buttontext }} </button>
                       </div>
                     </div>
                   </div>
                 </div>
                 @php  $count++;} @endphp




        </div>
      </div>
      <div class="tab-pane fade" id="reading" role="tabpanel" aria-labelledby="reading-tab">
   <div class="test-book-demo">

    @php
     $count = 1;
      foreach($getJsonTestData['reading'] as $lisnkey => $lisnval){ @endphp
          <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
            <div class="row p-4">
              <div class="col-md-8"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14 ">Free</span>
                <div class="mock-box-title mt-4">
                  <h3 class="text--semi text--dark me-4 mb-3 fs-20">{{  $lisnval->title  }}</h3>
                  <p class="text--regular text--light fs-12">12.1k Users</p>
                </div>
                <div class="cr-question">
                  <div class="qt-list fs-14"> <i class="bi bi-question-circle"></i> {{ $lisnval->totalquest }} Questions </div>
                  <div class="qt-list fs-14"> <i class="bi bi-graph-up"></i> {{ $lisnval->max_marks }}  Marks </div>
                  <div class="qt-list fs-14"> <i class="bi bi-clock"></i> {{ $lisnval->paper_duration }}  mins </div>
                </div>
                @php if(is_int(strpos($lisnval->title,"Cambridge"))) {
                    echo '<div style="margin-top:3px">'.'CAMBRIDGETEST'.'</div>';
                   } @endphp
              </div>

              @php
                if(isset($user_detail->id)){
                    $url = 'testprep/dashboard/instruction.php?tsid='.$lisnval->tsid.'&catid='.$lisnval->category_id.'&tscatid='.$lisnval->ts_cat_assoc_id.'&ques='.$lisnval->totalquest.'&marks='.$lisnval->max_marks.'&dur='.$lisnval->paper_duration;
                    $buttontext = 'Start Now';
                }else{
                    $url = 'testprep/signup-signin' ;
                     $buttontext = 'Unlock Now';
                }   @endphp
              <div class="col-md-4 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                <div class="lock-button">
                  <button onclick="location.href = '{{  url($url); }}'"  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> {{ $buttontext }} </button>
                </div>
              </div>
            </div>
          </div>
          @php  $count++;} @endphp



        </div>
      </div>
      <div class="tab-pane fade" id="writing" role="tabpanel" aria-labelledby="witing-tab">
        <div class="test-book-demo">


            @php
            $count = 1;
             foreach($getJsonTestData['writing'] as $lisnkey => $lisnval){ @endphp
                 <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
                   <div class="row p-4">
                     <div class="col-md-8"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14 ">Free</span>
                       <div class="mock-box-title mt-4">
                         <h3 class="text--semi text--dark me-4 mb-3 fs-20">{{  $lisnval->title  }}</h3>
                         <p class="text--regular text--light fs-12">12.1k Users</p>
                       </div>
                       <div class="cr-question">
                         <div class="qt-list fs-14"> <i class="bi bi-question-circle"></i> {{ $lisnval->totalquest }} Questions </div>
                         <div class="qt-list fs-14"> <i class="bi bi-graph-up"></i> {{ $lisnval->max_marks }}  Marks </div>
                         <div class="qt-list fs-14"> <i class="bi bi-clock"></i> {{ $lisnval->paper_duration }}  mins </div>
                       </div>
                       @php if(is_int(strpos($lisnval->title,"Cambridge"))) {
                           echo '<div style="margin-top:3px">'.'CAMBRIDGETEST'.'</div>';
                          } @endphp
                     </div>

                     @php
                       if(isset($user_detail->id)){
                           $url = 'testprep/dashboard/instruction.php?tsid='.$lisnval->tsid.'&catid='.$lisnval->category_id.'&tscatid='.$lisnval->ts_cat_assoc_id.'&ques='.$lisnval->totalquest.'&marks='.$lisnval->max_marks.'&dur='.$lisnval->paper_duration;
                           $buttontext = 'Start Now';
                       }else{
                           $url = 'testprep/signup-signin' ;
                            $buttontext = 'Unlock Now';
                       }   @endphp
                     <div class="col-md-4 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                       <div class="lock-button">
                         <button onclick="location.href = '{{  url($url); }}'"  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> {{ $buttontext }} </button>
                       </div>
                     </div>
                   </div>
                 </div>
                 @php  $count++;} @endphp






        </div>
      </div>
      <div class="tab-pane fade" id="speaking" role="tabpanel" aria-labelledby="speaking-tab">
        <div class="test-book-demo">


            @php
            $count = 1;
             foreach($getJsonTestData['speaking'] as $lisnkey => $lisnval){ @endphp
                 <div class="detail-mock-box mt-5 px-0 radius-10 mb-5">
                   <div class="row p-4">
                     <div class="col-md-8"> <span class="bg-danger text-white px-4 w-15 radius-50 fs-14  fs-14 ">Free</span>
                       <div class="mock-box-title mt-4">
                         <h3 class="text--semi text--dark me-4 mb-3 fs-20">{{  $lisnval->title  }}</h3>
                         <p class="text--regular text--light fs-12">12.1k Users</p>
                       </div>
                       <div class="cr-question">
                         <div class="qt-list fs-14"> <i class="bi bi-question-circle"></i> {{ $lisnval->totalquest }} Questions </div>
                         <div class="qt-list fs-14"> <i class="bi bi-graph-up"></i> {{ $lisnval->max_marks }}  Marks </div>
                         <div class="qt-list fs-14"> <i class="bi bi-clock"></i> {{ $lisnval->paper_duration }}  mins </div>
                       </div>
                       @php if(is_int(strpos($lisnval->title,"Cambridge"))) {
                           echo '<div style="margin-top:3px">'.'CAMBRIDGETEST'.'</div>';
                          } @endphp
                     </div>

                     @php
                       if(isset($user_detail->id)){
                           $url = 'testprep/dashboard/instruction.php?tsid='.$lisnval->tsid.'&catid='.$lisnval->category_id.'&tscatid='.$lisnval->ts_cat_assoc_id.'&ques='.$lisnval->totalquest.'&marks='.$lisnval->max_marks.'&dur='.$lisnval->paper_duration;
                         //  $buttontext = 'Start Now';
                           $buttontext = 'Start Now';
                       }else{
                           $url = 'testprep/signup-signin';
                            $buttontext = 'Unlock Now';
                       }   @endphp
                     <div class="col-md-4 d-flex align-item-center justify-content-md-end justify-content-center mt-md-0 mt-4">
                       <div class="lock-button">
                         <button onclick="location.href = '{{  url($url); }}'"  class="arrow arrow--button arrow--button__red arrow--button__ border-danger px-6 py-2"> <i class='bx bxs-lock-alt fs-15 me-3'></i> {{ $buttontext }} </button>
                       </div>
                     </div>
                   </div>
                 </div>
                 @php  $count++;} @endphp






        </div>
      </div>
    </div>
  </div>

  </div>
  <div class="col-lg-4">
    <div class="slidebar custom-tick radius-10 p-6"> <span class="bg-danger px-5 py-2 fs-14 text-white radius-50">Free</span>
      <p class="text--dark text--medium about--card--title mt-5 fw-600">Evaluation Test</p>
      <h2 class="fs-25 font-weight-bold mt-5 mb-6"></h2>
      <ul class="tick--container pb-4">
        <li class="tick--list text--dark">Check your predicted IELTS band</li>
        <li class="tick--list text--dark">Highlight key strengths and weaknesses</li>
        <li class="tick--list text--dark">Get personalised practice material</li>
        <li class="tick--list text--dark">Compete with potential IELTS test takers</li>
        <li class="tick--list text--dark">Instant Evaluation</li>
        <li class="tick--list text--dark">Takes less than 5 minutes</li>
      </ul>
      <div class="border-top pt-6">
        <button  class="arrow arrow--button arrow--button__black arrow--button__ w-100 text-center justify-content-center border-0"><span>Start Now</span></button>
      </div>
    </div>
    <div class=" overflow-hidden mt-6 mb-3 p-6 pt-5 " id="div-callme">
      <div class="call-box">
        <div class="call-boxicon"> <img src="{{ url('/prep/assets/images/green-call-icon-button.svg') }}" alt="Call Us"> </div>
        <div class="tb-info">
          <div class="cuntitle">Got Queries?</div>
          <div class="cunndesp">Book A free Counselling Session</div>
        </div>
      </div>
      <div class="counselling-detail ">
        <form id="counselling-form" novalidate="novalidate">
          <div id="message"> </div>
          <div class="assistance__input-holder" id="form-fields">
            <label class="assistance__input">
              <input type="tel" placeholder="Mobile No." name="mobile" class="ng-pristine ng-valid ng-touched">
              <input type="hidden" name="enquiry_type" value="counselling">
              <input type="hidden" name="action" value="enquiry">
            </label>
            <button class="btn btn-dark radius-50 px-6 py-md-2 py-3" id="call-me" translate="" type="submit">Call Me</button>
          </div>
        </form>
      </div>
    </div>
    <div class="blog--sidebar-new mt-6 slidebar radius-10 d-md-block d-none">
      <p class="text--dark text--medium about--card--title mt-5 fw-600 mx-6 pt-6 mb-5">Latest IELTS Blogs & Articles</p>
      {!! $left_blog_section  !!}
      
    </div>
    <div class="blog--sidebar-new mt-6 slidebar radius-10 sticky d-md-block d-none">
      <p class="text--dark text--medium about--card--title mt-5 fw-600 mx-6 pt-6 mb-5">Quick Links</p>
      <div class="list-quick-link ps-6 ">
        <ul class="bx-ul">

            @foreach($getPagetabs as $getPagetab)
            @if(strtolower($getPagetab->slug)=='ielts')

            @else
            @if(strtolower($palias)=='ielts')
            @php $href= url('exams/ielts'); @endphp
            @else
                @php

                    $href= route('testprep.exams',['type'=>strtolower($getPageInfo->type),'alias'=>$getPagetab->slug]);

                    @endphp
            @endforelse

            @endforelse


          <li> <a class="nav-link  @if(strtolower($palias) == $getPagetab->slug) active @endif " href="{{ $href }}"> <i class="bx bx-chevron-right"></i> {{ $getPagetab->atitle }}</a> </li>

           @endforeach

         </ul>
      </div>
    </div>
  </div>
</div>
</section>
  <section class="section  reach mt-0 mb-0 prep-feature  py-10">
    <div class="custom-container">
      <div class="row">
        <div class="col-md-5">
			<h3 class="section--title text--primary text--semi mb-8 title-three">Study Material</h3>


        </div>
        <div class="study--material owl-carousel"> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Practice Test</h3>
          <img class="lazyload " data-src="/prep/assets/images/material-icon1.webp" alt="Practice Test"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Mock Test</h3>
          <img class="lazyload " data-src="/prep/assets/images/material-icon2.webp" alt="Mock Test"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Vocabulary</h3>
          <img class="lazyload " data-src="/prep/assets/images/material-icon3.webp" alt="Vocabulary"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Writing Idea</h3>
          <img class="lazyload " data-src="/prep/assets/images/material-icon4.webp" alt="Writing Idea"> </a> <a href="./event-detail.html" class="item card--event ">
          <h3 class="mb-3">Evaluation Test</h3>
          <img class="lazyload " data-src="/prep/assets/images/material-icon1.webp" alt="Evaluation Test"> </a> </div>
      </div>
    </div>
  </section>
  {!! $blog_section !!}
@endsection
@section('scripts')
<script src="{{ URL::to('/prep/js/scroll.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".load-text").slice(0, 5).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".load-text:hidden").slice(0, 5).slideDown();
    if($(".load-text:hidden").length == 0) {
        $("#loadMore").fadeOut("slow");
    }
  });

})
</script>
@endsection
