@extends('layout.testprep.dashboard.main')
 
@section('main-container')
<body>
<x-testprep.dashboard.navbar />
<x-testprep.dashboard.aside />


<main class="dashboard user profileReview">
  <div class="dashboard--card">
    <div class="row">
      <div class="col-md-7">
        <div class="test--instruction with--action">
          <p class="dashboard--accordion__header big text--semi">INSTRUCTIONS</p>
          <ul>
            <li>Do not begin until you are ready</li>
            <li>The timer begins after you start your test</li>
            <li>Listen to the instructions for each question set and answer carefully</li>
            <li>Answer all questions</li>
            <li>While you are listening, write or select answers on your screen.</li>
            <li>You will have some time at the end of the test to change or rectify your answers</li>
            <li>Please use headphones for better clarity</li>
          </ul>
        </div>
      </div>
      <div class="col-md-5">
        <div class="program--card test--cards p-0">
          <div class="head-tag"> Beginner </div>
          <div class="bg--body-test">
            <h3 class="my-6"><i class="menu-icon tf-icons bx bx-headphone"></i> Listening</h3>
            <div class="tt--instruction">
              <div class="list--tt-icon"> <i class='bx bx-notepad'></i>
                <p> 40 Questions </p>
              </div>
              <div class="list--tt-icon"> <i class='bx bx-line-chart'></i>
                <p> 40 Marks </p>
              </div>
              <div class="list--tt-icon"> <i class='bx bx-time-five' ></i>
                <p> 30 mins </p>
              </div>
            </div>
            <div class="d-flex justify-content-center mb-4"><a href="./institute.html" class="arrow arrow--button arrow--button__black arrow--button__" ><span>Start Now</span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
@section('scripts')


@endsection