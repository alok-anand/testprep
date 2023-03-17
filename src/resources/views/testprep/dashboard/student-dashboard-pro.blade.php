@extends('layout.testprep.dashboard.main')
 
@section('main-container')
<body>
<x-testprep.dashboard.navbar />

<aside class="dashboard--sidebar"> 
	
	<a href="#" class="dashboard--link text--regular icon--dashboard active">Dashboard</a> 	
	<a href="#" class="dashboard--link text--regular icon--program "> My Homework</a> 	
	<a href="#" class="dashboard--link text--regular icon--document ">My Mocktest</a>
	<a href="#" class="dashboard--link text--regular icon--shortlist ">My Resources</a>
	<a href="#" class="dashboard--link text--regular icon--live">My Live Class</a> 
	<a href="#" class="dashboard--link text--regular icon--drafts @@drafts">Practice Test</a> 
	<a href="#" class="dashboard--link text--regular icon--listening @@visa">Listening</a> 
	<a href="#" class="dashboard--link text--regular icon--reading ">Reading</a> 
		<a href="#" class="dashboard--link text--regular icon--writing ">Writing</a> 
		<a href="#" class="dashboard--link text--regular icon--speaking ">Speaking</a> 
			<a href="#" class="dashboard--link text--regular icon--session ">Grades</a> 
		<a href="#" class="dashboard--link text--regular icon--rate ">Rate your Advisor</a> 
		<a href="#" class="dashboard--link text--regular icon--leave ">Apply for Leave</a> 
	</aside>
<main class="dashboard user profileReview">
  @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
  {{ Session::get('message') }} 
</div>
@endif
  <div class="row">
    <div class="col-lg-7 mb-4">
      <div class="dashboard--accordion nextStep p-6 student--profile-left">
        <div class="dashboard--accordion__header border-bottom mb-4">
          <p>Student Profile</p>
        </div>
        <div class="row">
          <div class="col-md-9 order-md-1 order-2 ">
            <ul class="review--list">

              <li> <span class="text--light text--regular">Name :</span> <span class="text--dark text--medium">{{ $student-> fname }}  {{ $student->lname }}</span> </li>
              <li> <span class="text--light text--regular">Email ID:</span> <span class="text--dark text--medium">{{ $student-> email }}</span> </li>
              <li> <span class="text--light text--regular">Batch Detail :</span> <span class="text--dark text--medium">@if(!empty( $batch->batch_name)){{ $batch->batch_name }} @else {{ 'Unassigned '}} @endif</span> </li>
              <li> <span class="text--light text--regular">Instructor :</span> <span class="text--dark text--medium">@if(!empty( $batch->user->fname)) {{ $batch->user->fname }} @endif @if(!empty( $batch->user->fname)) {{ $batch->user->fname }} @endif</span> </li>
              <li> <span class="text--light text--regular">Study Plan :</span> <span class="text--dark text--medium">@if(!empty($student->student_active_package->package_master->package_name )){{ $student->student_active_package->package_master->package_name }}@endif</span> </li>
              <li> <span class="text--light text--regular">Completion Date :</span> <span class="text--dark text--medium">@if(!empty($student->student_active_package->expired_on )){{ $student->student_active_package->expired_on }}@endif</span> </li>
              <li> <span class="text--light text--regular">Counselled By :</span> <span class="text--dark text--medium">Ravneet Kaur</span> </li>
            </ul>
          </div>
          <div class="col-md-3 order-md-2 order-1 dashboardprofileimgs">
            <div class="uProfile__left"> 
              <!--img src="/prep/assets/images/user.png" class="img-fluid" alt=""-->
              <img src="{{ $student->profile_pic }}" class="img-fluid" alt="">
              <div class="uProfile__detail"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 mb-4">
      <div class="dashboard--accordion nextStep p-6">
        <div class="dashboard--accordion__header border-bottom mb-4">
          <p>My Goal</p>
        </div>
        <div class="goal-band dashboardRightBar " id="">
          <div class="top--list">
            <div class="uProfile__right">
              <div class="circular-chart" id="listening_goal">
                <!--div class="progress-bar position" data-number="74" data-percent="70" data-duration="1000" data-color="#F4F5F6, #5c3ef9" id="listening"></div-->
                
                <!--p class="circular--label text--dark text-medium"><span class="scroe-band">7</span> <span class="band-title text--light">Band</span></p-->
              </div>
              <p class="text--semi text--black user-name fs-14 mt-3">Listening</p>
            </div>
            <div class="uProfile__right">
              <div class="circular-chart" id="reading_goal" >
                <!--div class="progress-bar position" data-number="74" data-percent="80" data-duration="1000" data-color="#F4F5F6, #eeb52c"></div-->
                <!--p class="circular--label text--dark text-medium"><span class="scroe-band">8</span> <span class="band-title text--light">Band</span></p-->
              </div>
              <p class="text--semi text--black user-name fs-14 mt-3">Reading</p>
            </div>
            <div class="uProfile__right">
              <div class="circular-chart" id="writing_goal">
                <!--div class="progress-bar position" data-number="74" data-percent="70" data-duration="1000" data-color="#F4F5F6, #e64918"></div-->
                <p class="circular--label text--dark text-medium"><span class="scroe-band">7</span> <span class="band-title text--light">Band</span></p>
              </div>
              <p class="text--semi text--black user-name fs-14 mt-3"> Writing </p>
            </div>
            <div class="uProfile__right" >
              <div class="circular-chart" id="speaking_goal">
                <!--div class="progress-bar position" data-number="74" data-percent="60" data-duration="1000" data-color="#F4F5F6, #1d84e3"></div>
                <p class="circular--label text--dark text-medium"><span class="scroe-band">6</span> <span class="band-title text--light">Band</span></p-->
              </div>
              <p class="text--semi text--black user-name fs-14 mt-3" id="speaking"> Speaking </p>
            </div>
          </div>
          <div class="bottom--list mt-3">
            <div class="border p-4">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center justify-content-center">
                  <p class="text--dark text--medium dashboardRightBar--title fw-800">Overall Band</p>
                </div>
                <div class="col-md-4">
                  <div class="uProfile__right text-center" >
                    <div class="circular-chart" id="overall_goal">
                      <!--div class="progress-bar position" data-number="74" data-percent="70" data-duration="1000" data-color="#F4F5F6, #1BB161"></div>
                      <p class="circular--label text--dark text-medium"><span class="scroe-band">7</span> <span class="band-title text--light">Band</span></p-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="program--card--footer d-flex justify-content-center"> <a  href="javascript:void(0)" data-toggle="modal" data-target="#GoalModal" class="button-rounded button-rounded__dark">Set your Goal</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 mb-4">
      <div class="dashboard--accordion nextStep p-6 st--performance">
        <div class="dashboard--accordion__header mb-4">
          <p>Student Performance </p>
        </div>
        @php
              $reading =  (isset($student_performance['Reading'][0]['band_score']) && !empty($student_performance['Reading'][0]['band_score'])?$student_performance['Reading'][0]['band_score']: 0);

              $reading_old =  (isset($student_performance['Reading'][1]['band_score']) &&  !empty($student_performance['Reading'][1]['band_score'])?$student_performance['Reading'][1]['band_score']: 0);
              
               $writing =  (isset($student_performance['Writing'][0]['band_score']) && !empty($student_performance['Writing'][0]['band_score'])?$student_performance['Writing'][0]['band_score']: 0);
              
              $writing_old =  (isset($student_performance['Writing'][1]['band_score']) &&  !empty($student_performance['Writing'][1]['band_score'])?$student_performance['Writing'][1]['band_score']: 0);


               $listening =  (isset($student_performance['Listening'][0]['band_score']) && !empty($student_performance['Listening'][0]['band_score'])?$student_performance['Listening'][0]['band_score']: 0);
              
              $listening_old =  (isset($student_performance['Listening'][1]['band_score']) &&  !empty($student_performance['Listening'][1]['band_score'])?$student_performance['Listening'][1]['band_score']: 0);

              $speaking =  (isset($student_performance['Speaking'][0]['band_score']) &&  !empty($student_performance['Speaking'][0]['band_score'])?$student_performance['Speaking'][0]['band_score']: 0);

               $speaking_old =  (isset($student_performance['Speaking'][1]['band_score']) && !empty($student_performance['Speaking'][1]['band_score'])?$student_performance['Speaking'][1]['band_score']: 0);
              
               $overall  = round(($listening + $reading+ $writing +$speaking)/4*2)/2; 
              
@endphp
        <div class="row">
          <div class="col-md-8 order-md-1 order-2 ">
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="nextStep--item uslider--card">
                  <div class="stt-icon"> <i class="menu-icon tf-icons bx bx-headphone text-danger"></i> </div>
                  <div class="nextStep--item__desc st-dash">
                    <div class="header-sp">
                      <p class="text--light text--regular fs-16">Listening</p>
                      <div class="sp-status">
                        <?php    
                                 $list_arrow = '';
                                $list_class = '';
                                $list_perc ='';
                                
                                if(!empty($listening_old) && $listening_old != 0 ) { 
                                $list_perc = round((($listening-$listening_old)/$listening_old)*100 ,0);
                                
                                $list_arrow = 'bx-down-arrow-alt';
                                $list_class = 'down-status text-danger'; 
                                  
                                  if($list_perc > 0)
                                  {
                                    //$perc = $perc - 100;
                                  $list_class= 'up-status text-success';
                                   $list_arrow = 'bx-up-arrow-alt';
                                  }

                                $list_perc  = $list_perc .'%';

                                }
                                ?>
                        <div class=" {{  $list_class }} fs-14">{{ $list_perc }} <i class="bx {{ $list_arrow }}"></i> <i class="bx bx-help-circle " data-container="body" data-toggle="tooltip" data-placement="top" title="" data-original-title="Progress Status" aria-label="Progress Status"></i> </div>
                      </div>
                    </div>
                    <p class="text--dark text--medium fs-18 mt-3">Band {{ $listening }} </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="nextStep--item uslider--card">
                  <div class="stt-icon"> <i class=" bx bx-book-reader text-danger"></i> </div>
                  <div class="nextStep--item__desc st-dash">
                    <div class="header-sp">
                      <p class="text--light text--regular fs-16">Reading</p>
                       <?php    
                                 $read_arrow = '';
                                $read_class = ''; 
                                 $read_perc ='';
                                if(!empty($reading_old) && $reading_old != 0 ) { 
                                $read_perc = round((($reading-$reading_old)/$reading_old)*100 ,0);
                                
                                $read_arrow = 'bx-down-arrow-alt';
                                $read_class = 'down-status text-danger'; 
                                  
                                  if($read_perc > 0)
                                  {
                                    //$perc = $perc - 100;
                                  $read_class= 'up-status text-success';
                                   $read_arrow = 'bx-up-arrow-alt';
                                  }

                                $read_perc  = $read_perc .'%';

                                }
                                ?>
                      <div class="sp-status">
                        <div class="{{  $read_class }} fs-14">{{ $read_perc }}  <i class="bx {{ $read_arrow }}"></i> <i class="bx bx-help-circle " data-container="body" data-toggle="tooltip" data-placement="top" title="" data-original-title="Progress Status" aria-label="Progress Status"></i> </div>
                      </div>
                    </div>
                    <p class="text--dark text--medium fs-18  mt-3">Band {{ $reading }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="nextStep--item uslider--card">
                  <div class="stt-icon"> <i class="bx bx-pencil text-danger"></i> </i> </div>
                  <div class="nextStep--item__desc st-dash">
                    <div class="header-sp">
                      <p class="text--light text--regular fs-16">Writing</p>
                      <?php    
                                $write_arrow = '';
                                $write_class = '';
                                $write_perc = ''; 
                                  
                                if(!empty($writing_old) && $writing_old != 0 ) { 
                                $write_perc = round((($writing-$writing_old)/$writing_old)*100 ,0);
                                
                                $write_arrow = 'bx-down-arrow-alt';
                                $write_class = 'down-status text-danger'; 
                                  
                                  if($write_perc > 0)
                                  {
                                    //$perc = $perc - 100;
                                  $write_class= 'up-status text-success';
                                   $write_arrow = 'bx-up-arrow-alt';
                                  }

                                $write_perc  = $write_perc .'%';

                                }
                                ?>
                      <div class="sp-status">
                        <div class="{{  $write_class }} fs-14">{{ $write_perc }}<i class="bx {{ $write_arrow }}"></i> <i class="bx bx-help-circle " data-container="body" data-toggle="tooltip" data-placement="top" title="" data-original-title="Progress Status" aria-label="Progress Status"></i> </div>
                      </div>
                    </div>
                    <p class="text--dark text--medium fs-18  mt-3">Band {{ $writing }}</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="nextStep--item uslider--card">
                  <div class="stt-icon"> <i class="bx bx-pencil text-danger"></i> </div>
                  <div class="nextStep--item__desc st-dash">
                    <div class="header-sp">
                      <p class="text--light text--regular fs-16">Speaking</p>
                       <?php    
                                 $speak_arrow = '';
                                $speak_class = '';
                                $speak_perc = '';
                                if(!empty($speaking_old) && $speaking_old != 0 ) { 
                                $speak_perc = round((($speaking-$speaking_old)/$speaking_old)*100 ,0);
                                
                                $speak_arrow = 'bx-down-arrow-alt';
                                $speak_class = 'down-status text-danger'; 
                                  
                                  if($speak_perc > 0)
                                  {
                                    //$perc = $perc - 100;
                                  $speak_class= 'up-status text-success';
                                   $speak_arrow = 'bx-up-arrow-alt';
                                  }

                                $speak_perc  = $speak_perc .'%';

                                }
                                ?>
                      <div class="sp-status">
                        <div class="{{  $speak_class }} fs-14">{{ $speak_perc}} <i class="bx {{ $speak_arrow }}"></i> <i class="bx bx-help-circle " data-container="body" data-toggle="tooltip" data-placement="top" title="" data-original-title="Progress Status" aria-label="Progress Status"></i> </div>
                      </div>
                    </div>
                    <p class="text--dark text--medium fs-18 mt-3">Band {{ $speaking }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 order-md-2 order-1 dashboardRightBar d-flex justify-content-center align-items-center flex-column" >
            <div class="uProfile__right text-center">
              <div class="circular-chart">
                <div class="progress-bar position" data-number="80" data-percent="90" data-duration="1000" data-color="#F4F5F6, #1BB161"></div>
                <p class="circular--label text--dark text-medium"><span class="scroe-band">8</span> <span class="band-title text--light">Band</span></p>
              </div>
            </div>
            <p class="text--dark text--medium dashboardRightBar--title fw-800 mt-5">Overall Band</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12  mb-4">
      <div class="dashboard event p-0 height-auto"> 
        
        <!-- shortlist -->
        <div class="dashboard--accordion">
          <div class="dashboard--accordion__header big text--semi" id="shortlistOne" data-toggle="collapse" data-target="#shortlistcollapseOne" aria-expanded="true" aria-controls="shortlistcollapseOne">Mock Test</div>
          <div id="shortlistcollapseOne" class="dashboard--accordion__answer collapse show" aria-labelledby="shortlistOne" data-parent="#dashboard_accordion">
            <div class="accordion-item shortlist-table explore">
              <ul class="nav tabs p-0 mb-5" id="myTab" role="tablist">
                <li class="tabs--item"> <a class="tabs--link active" id="listening-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="listening" aria-selected="true">Listening</a> </li>
                <li class="tabs--item"> <a class="tabs--link" id="writing-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="writing" aria-selected="false">Writing</a> </li>
                <li class="tabs--item"> <a class="tabs--link" id="reading-tab" data-toggle="tab" href="#reading" role="tab" aria-controls="reading" aria-selected="false">Reading</a> </li>
                <li class="tabs--item"> <a class="tabs--link" id="speaking-tab" data-toggle="tab" href="#speaking" role="tab" aria-controls="speaking" aria-selected="false">Speaking</a> </li>
              </ul>
              <div class="tabs--content tab-content mt-0" id="myTabContent">
                <div class="tab-pane fade show active" id="listening" role="tabpanel" aria-labelledby="listening-tab">
                  <div class="card-body px-0 pb-0">
                    <div id="mock-Listening"></div>
                  </div>
                </div>
              
              <div class="tab-pane fade" id="writing" role="tabpanel" aria-labelledby="writing-tab">
                <div class="card-body px-0 pb-0">
                  <div id="mock-Writing"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="reading" role="tabpanel" aria-labelledby="reading-tab">
                <div class="card-body px-0 pb-0">
                  <div id="mock-Reading"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="speaking" role="tabpanel" aria-labelledby="speaking-tab">
                <div class="card-body px-0 pb-0">
                  <div id="mock-Speaking"></div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	  
	  
	      <div class="col-md-12  mb-4">
      <div class="dashboard event p-0 height-auto"> 
        
        <!-- shortlist -->
        <div class="dashboard--accordion">
          <div class="dashboard--accordion__header big text--semi" id="shortlistOne" data-toggle="collapse" data-target="#shortlistcollapseOne" aria-expanded="true" aria-controls="shortlistcollapseOne">Practice Test</div>
          <div id="shortlistcollapseOne" class="dashboard--accordion__answer collapse show" aria-labelledby="shortlistOne" data-parent="#dashboard_accordion">
            <div class="accordion-item shortlist-table explore">
              <ul class="nav tabs p-0 mb-5" id="myTab" role="tablist">
                <li class="tabs--item"> <a class="tabs--link active" id="listening-tab" data-toggle="tab" href="#praclistening" role="tab" aria-controls="listening" aria-selected="true">Listening</a> </li>
                <li class="tabs--item"> <a class="tabs--link" id="writing-tab" data-toggle="tab" href="#pracwriting" role="tab" aria-controls="writing" aria-selected="false">Writing</a> </li>
                <li class="tabs--item"> <a class="tabs--link" id="reading-tab" data-toggle="tab" href="#pracreading" role="tab" aria-controls="reading" aria-selected="false">Reading</a> </li>
                <li class="tabs--item"> <a class="tabs--link" id="speaking-tab" data-toggle="tab" href="#pracspeaking" role="tab" aria-controls="speaking" aria-selected="false">Speaking</a> </li>
              </ul>
              <div class="tabs--content tab-content mt-0" id="myTabContent">
                <div class="tab-pane fade  show active" id="praclistening" role="tabpanel" aria-labelledby="listening-tab">
                  <div class="card-body px-0 pb-0">
                    <div id="practice-Listening"></div>
                  </div>
                </div>
             
              <div class="tab-pane fade" id="pracwriting" role="tabpanel" aria-labelledby="writing-tab">
                <div class="card-body px-0 pb-0">
                  <div id="practice-Writing"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="pracreading" role="tabpanel" aria-labelledby="reading-tab">
                <div class="card-body px-0 pb-0">
                  <div id="practice-Reading"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="pracspeaking" role="tabpanel" aria-labelledby="speaking-tab">
                <div class="card-body px-0 pb-0">
                  <div id="practice-Speaking"></div>
                </div>
              </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	  
	  
	  @php /* @endphp
    <div class="col-md-12  mb-4">
      <div class="dashboard event p-0 height-auto"> 
        <!-- shortlist -->
        <div class="dashboard--accordion">
          <div class="dashboard--accordion__header big text--semi" id="shortlistOne" data-toggle="collapse" data-target="#shortlistcollapseOne" aria-expanded="true" aria-controls="shortlistcollapseOne">Homework</div>
          <div class="program--slider--heading with-searchbar mt-3">
            <div class="left w-100 d-flex justify-content-between">
              <div class="dropdown show"> <a class="filter-btn text--regular text--light dropdown-toggle ms-0"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Show Entries</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> <a class="dropdown-item" href="#">10</a> <a class="dropdown-item" href="#">25</a> <a class="dropdown-item" href="#">50</a> <a class="dropdown-item" href="#">100</a> </div>
              </div>
              <div class="searchbar--secondary">
                <input type="text" placeholder="Search">
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive text-nowrap  d-module bt-table">
              <table class="table">
                <thead class="table-dark text-white">
                  <tr>
                    <th class="text-white">Sr. No.</th>
                    <th class="text-white">Assign Date</th>
                    <th class="text-white">Due Date</th>
                    <th class="text-white">Module</th>
                    <th class="text-white">Submit Status</th>
                    <th class="text-white">Start</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0 bg-white">
                  <tr>
                    <td>1.</td>
                    <td>1st August, 2022</td>
                    <td>10 August, 2022</td>
                    <td>Listening</td>
                    <td><div class="okstatus text-success"><i class="bx bx-check"></i></div></td>
                    <td><a href="#" class="arrow arrow--link arrow--link__red arrow--link__" id="@@id"><span>Start Now</span></a></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>1st August, 2022</td>
                    <td>10 August, 2022</td>
                    <td>Writing</td>
                    <td><div class="okstatus text-success"><i class="bx bx-check"></i></div></td>
                    <td><a href="#" class="arrow arrow--link arrow--link__red arrow--link__" id="@@id"><span>Start Now</span></a></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>1st August, 2022</td>
                    <td>10 August, 2022</td>
                    <td>Listening</td>
                    <td><div class="okstatus text-danger"><i class="bx bx-x"></i></div></td>
                    <td><a href="#" class="arrow arrow--link arrow--link__red arrow--link__" id="@@id"><span>Start Now</span></a></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>1st August, 2022</td>
                    <td>10 August, 2022</td>
                    <td>Listening</td>
                    <td><div class="okstatus text-success"><i class="bx bx-check"></i></div></td>
                    <td><a href="#" class="arrow arrow--link arrow--link__red arrow--link__" id="@@id"><span>Start Now</span></a></td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>1st August, 2022</td>
                    <td>10 August, 2022</td>
                    <td>Listening</td>
                    <td><div class="okstatus text-success"><i class="bx bx-check"></i></div></td>
                    <td><a href="#" class="button-rounded button-rounded__dark">Done</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mt-5 mp-pagination border-top d-flex justify-content-between pt-3 fs-12">
              <div class="dataTables_info text--regular text--light" id="assigned_homework_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
              <div class="dataTables_paginate paging_simple_numbers" id="assigned_homework_paginate"><a class="paginate_button previous disabled text--regular text--light" aria-controls="assigned_homework" data-dt-idx="0" tabindex="-1" id="assigned_homework_previous">Previous</a><span></span><a class="paginate_button next disabled text--regular text--light ms-3" aria-controls="assigned_homework" data-dt-idx="1" tabindex="-1" id="assigned_homework_next">Next</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @php */ @endphp
    <div class="col-md-12  mb-4 ">
      <div class="dashboard event p-0 height-auto"> 
        <!-- shortlist -->
        <div class="dashboard--accordion">
          <div class="dashboard--accordion__header big text--semi" id="shortlistOne" data-toggle="collapse" data-target="#shortlistcollapseOne" aria-expanded="true" aria-controls="shortlistcollapseOne">Mock Test</div>
          <div class="card-body p-0 mt-3">
            <div class="table-responsive text-nowrap  d-module bt-table">
              <table class="table  pt-4" id="assigned_homework">
                <thead class="table-dark text-white">
                  @php  //echo('<pre>'); print_r($all_mock_tests); //print_r($student_performance['Listening']); 
                    $all_mock_dates = array_column($all_mock_tests,'stu_created'); @endphp
                    @if(empty($all_mock_dates))

                      <div class="dashboard--accordion__empty">
                <img class="img-fluid" src="/prep/assets/images/short-empty.svg" alt="empty icon">
                <p class="text--light text--regular">You don’t have 
attempt any module test</p>
              </div>
                    @endif
                  <tr>
                    <th class="text-white">Date Of Mock</th>
                    <th class="text-white">Listening</th>
                    <th class="text-white">Writing</th>
                    <th class="text-white">Reading</th>
                    <th class="text-white">Speaking</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0 bg-white">
                   
                   @foreach($all_mock_dates as $mock_date)
                  <tr>
                    <td>{{ $mock_date }} </td>
                    <td>
                    @foreach($student_performance['Listening'] as $stu_list_perf)
                      @if($stu_list_perf['stu_created']== $mock_date)
                        {{ $stu_list_perf['band_score'] }}
                      @endif
                     @endforeach
                    </td>
                    <td> @foreach($student_performance['Writing'] as $stu_list_perf)
                      @if($stu_list_perf['stu_created']== $mock_date)
                        {{ $stu_list_perf['band_score'] }}
                      @endif
                     @endforeach</td>
                    <td> @foreach($student_performance['Reading'] as $stu_list_perf)
                      @if($stu_list_perf['stu_created']== $mock_date)
                        {{ $stu_list_perf['band_score'] }}
                      @endif
                     @endforeach</td>
                    <td>  @foreach($student_performance['Speaking'] as $stu_list_perf)
                      @if($stu_list_perf['stu_created']== $mock_date)
                        {{ $stu_list_perf['band_score'] }}
                      @endif
                     @endforeach</td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
				
			
				
            </div>
            <!--div class="mt-5 mp-pagination border-top d-flex justify-content-between pt-3 fs-12">
              <div class="dataTables_info text--regular text--light" id="assigned_homework_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
              <div class="dataTables_paginate paging_simple_numbers" id="assigned_homework_paginate"><a class="paginate_button previous disabled text--regular text--light" aria-controls="assigned_homework" data-dt-idx="0" tabindex="-1" id="assigned_homework_previous">Previous</a><span></span><a class="paginate_button next disabled text--regular text--light ms-3" aria-controls="assigned_homework" data-dt-idx="1" tabindex="-1" id="assigned_homework_next">Next</a></div>
            </div-->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

@endsection
@section('scripts')
<script>
  jQuery(document).ready(function($) {
  $( "#Set-Goal" ).on('shown.bs.modal', function(){
   
    $( "#tentative-date" ).datepicker({
      minDate: 0,
      dateFormat: 'yy-mm-dd',

      beforeShow: function() {

        setTimeout(function(){
            $('.ui-datepicker').css('z-index', 99999999999999);
        }, 0);
    }
    });
    // alert("I want this to appear after the modal has opened!");
});
$('#showsubmit').hide();
  $('#ListeningSelect,#SpeakingSelect,#WritingSelect,#ReadingSelect').on('change', function() { 
    goal =   Number((parseInt($('#ListeningSelect').val(),10) + parseInt($('#WritingSelect').val(),10) + parseInt($('#SpeakingSelect').val(),10) + parseInt($('#ReadingSelect').val(),10)) / 4).toFixed(1) ;
    goal = Math.round(goal*2)/2;

//alert(goal);
           var options = {
  chart: {
    height: 120,
    type: "radialBar",
    
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "40%",
        background: "#fff",
        position: "front"
      },
      track: {
        background: "#e7e7e7",
        strokeWidth: "100%",
        margin: 5, // margin is in pixels
        dropShadow: {
          enabled: false,
          top: 0,
          left: 0,
          blur: 3,
          opacity: 0.5
        }
      },

      dataLabels: {
        showOn: "always",     
      value: {
          formatter: function(val) {
            return goal;
          },
          color: "#111",
          fontSize: "25px",
        fontWeight:"bold",
         offsetY: -10,
          show: true
        
        },      
        name: {  
      
          offsetY: 15,
          show: true,
          color: "#888",
          fontSize: "7px"
        }
       
      }
    }
  },
  
  fill: {
  type: 'solid',
  colors: ['#EA5962']
},

  series: [ goal/9*100],
  stroke: {
    lineCap: "round"
  },
  labels: ["Band"]
};

        var chart = new ApexCharts(document.querySelector("#overallscorepop") , options);
        
    if($('#ListeningSelect').val() !== 'Band' && $('#SpeakingSelect').val() !== 'Band' && $('#WritingSelect').val() !== 'Band' && $('#ReadingSelect').val() !== 'Band'){ -
     
      
       
        chart.render();
        $('#showsubmit').show();
         $('#overallscorepopdiv').show();
      
    }
});
$('#overallscorepopdiv').hide();
 });

    
</script>  
<script>
  function goal_radial_bar(goal,series,selector,color)
  {
  console.log(goal);
   // console.log(dates);
   //  console.log(key);
   //  console.log(graph);

  var options = {
  chart: {
    height: 110,
    type: "radialBar",
    
  },
  plotOptions: {
    radialBar: {
      hollow: {
        margin: 0,
        size: "40%",
        background: "#fff" ,
        position: "front"
      },
      track: {
        background: '#e7e7e7',
        strokeWidth: "100%",
        margin: 5, // margin is in pixels
        dropShadow: {
          enabled: false,
          top: 0,
          left: 0,
          blur: 3,
          opacity: 0.5
        }
      },

      dataLabels: {
        showOn: "always",     
      value: {
          formatter: function(val) {
            return goal<?php //echo $goal['Goal_s'] ; ?>; 
          }, 
          color: "#111",
          fontSize: "25px",
        fontWeight:"bold",
         offsetY: -10,
          show: true
        
        },      
        name: {  
      
          offsetY: 15,
          show: true,
          color: "#000",
          fontSize: "7px"
        }
       
      }
    }
  },
  
  fill: {
  type: 'solid',
  colors: [color]
},

  series: [series <?php //echo ($goal['Goal_s']/9)*100 ; ?>],
  stroke: {
    lineCap: "round"
  },
  labels: ["Band"]
};

        var chart = new ApexCharts(document.querySelector("#"+selector), options);
        chart.render();
  }
   var goal_l = @php echo $student['Goal_l'] ; @endphp;
    var series_l = @php echo ($student['Goal_l']/9)*100 ; @endphp;
    goal_radial_bar(goal_l,series_l,'listening_goal','#696CFF');

      var goal_r = @php echo $student['Goal_r'] ; @endphp;
    var series_r = @php echo ($student['Goal_r']/9)*100 ; @endphp;
    goal_radial_bar(goal_r,series_r,'reading_goal','#FFAB00');

      var goal_s = @php echo $student['Goal_s'] ; @endphp;
    var series_s = @php echo ($student['Goal_s']/9)*100 ; @endphp;
    goal_radial_bar(goal_s,series_s,'speaking_goal','#FF3E1D');

      var goal_w = @php echo $student['Goal_w'] ; @endphp;
    var series_w = @php echo ($student['Goal_w']/9)*100 ; @endphp;
    goal_radial_bar(goal_w,series_w,'writing_goal','#03C3EC');

  var goal_avg = @php echo $student['Goal_avg'] ; @endphp;
    var series_avg = @php echo ($student['Goal_avg']/9)*100 ; @endphp;
    goal_radial_bar(goal_avg,series_avg,'overall_goal','#03C3EC');
  </script>
  <script >
function set_graph(data,dates,key,graph)
{ 
   // console.log(data);
   // console.log(dates);
   //  console.log(key);
   //  console.log(graph);
var options = {
          series: [{
            name: "Band",
            data: data
        }
        ],
          chart: {
          height: 400,
          type: 'line',
          zoom: {
            enabled: false
          },
    toolbar: {
      show: false
    }
        },

       // colors: ['#EA5962', '#77B6EA'],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
       
    
     yaxis: {
          title: {
            text: 'BAND'
          },
        
                min: 0,
                max: 9,
                tickAmount:9
        },  
       
       
        fill: {
    type: "gradient",
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.7,
      opacityTo: 0.9,
      colorStops: [
        {
          offset: 0,
          color: "#FDB97C ",
          opacity: 1
        },
        {
          offset: 20,
          color: "#EE4057",
          opacity: 1
    }
      ]
    }
  },
         

       
        xaxis: {
          categories: dates
,
      
      
        title: {
            text: 'DATE OF PRACTICE TEST'
          },
      
    
        },
       
        };

       // console.log('#'+graph+'-'+key);
        var chart = new ApexCharts(document.querySelector('#'+graph+'-'+key), options);
        chart.render();
}
</script>
<script>
   

   @php $test_types =  array('pr' =>'practice','mk'=>'mock'); @endphp
  @foreach($test_types as $test_key => $test_type)
@foreach(${$test_type.'_result'} as ${$test_key.'_key'} => ${$test_key.'_result'})
 var key = "@php echo ${$test_key.'_key'}; @endphp";
 var test_dates = @php echo json_encode(array_column(${$test_key.'_result'},'stu_created')); @endphp;
 var test_bands = @php echo json_encode(array_column(${$test_key.'_result'},'band_score')); @endphp;
 var test_type = "@php echo $test_type @endphp";
  set_graph(test_bands,test_dates,key,test_type);
@endforeach

@endforeach


</script>
@endsection