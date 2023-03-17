<!-- Confirm Seat Modal -->


<div class="modal fade cf-seat" id="confirm-seat" tabindex="-1" aria-labelledby="confirm-seat" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header border-0 ">
            <h4 class="modal-title text-center fw-bold w-100" id="exampleModalLabel">Payment Detail</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body" id="buynow-popup">
          
               
               

            </div>

        </div>
 
    </div>
</div>

<!-- Payment Success  Modal -->
<div id="paymentsuccess" class="modal fade  rgs-modal thankyouform">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
      </div>
      <div class="modal-body ">
        <form>
      
      
        <div class="bk-th-img"><img src="{{ url('/prep/assets/images/confirmed-booking.gif') }} " alt="Thank You"/> </div>
   <div class="pop-3-title text-center">Booking Confirmed!</div>
   
   
        <div class="confirm-tiem text-center  mb-3" ></div>  
      
    
      <div class="bk-thnk-desc">Our Advisor Will Contact you Shortly!</div>

        </form>
      </div>
    </div>
  </div>
</div>

<!--course details page --->
 <div class="modal modal-lg fade bg-none uni-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog p-0" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
             
              <!-- 16:9 aspect ratio -->
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>



<!-- otp Modal -->
<div class="otp-modal delete--modal requestModal modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body" id="otpContentContainer">        
      </div>
    </div>
  </div>
</div>

<!-- form submit success -->
<div class="delete--modal requestModal modal fade" id="requestSendModal" tabindex="-1" role="dialog" aria-labelledby="requestSendLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal" id="requestSendClose"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <img src="/assets/images/success-alert.svg" alt="success icon">
        <p class="text--dark delete--modal--meassage">Request for call back successful</p>
        <p class="text--light text--regular delete--modal--desc">Someone from our team will get back to you within 24 hours.</p>
      </div>
    </div>
  </div>
</div>

<!-- zoom modal --> 
<div class="otp-modal delete--modal requestModal social-modal modal fade" id="zoomModal" tabindex="-1" role="dialog" aria-labelledby="zoomModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content white-form">
          <div class="form--header">
            <h3 class="text--semi text--dark">Canamprep Virtual Office</h3>
          </div>
          <p class="otp--header text--regular text--light">Select mode of communication</p>
          <div class="form--row">
            <div class="form__group form--md__12">
              <a href="javascript:void(0)" class="zoom-action social-submit" data-toggle="modal" id="zoomRequest" data-target="zoomRequestModal">
                <img class="img-fluid" src="/assets/images/zoom-action.png" alt="Zoom Icon">
                <!--<p class="text--medium text--dark">Join Virtual Counseling via Zoom</p>-->
        <span class="text--medium text--dark">Join Virtual Counseling via Zoom</span>
              </a>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <a href="javascript:void(0)" class="zoom-action social-submit" data-toggle="modal" id="zoomSchedule" data-target="zoomScheduleModal">
                <img class="img-fluid" src="/assets/images/zoom-schedule.png" alt="Zoom Schedule Icon">
                <!--<p class="text--medium text--dark">Schedule an Online Appointment</p>-->
        <span class="text--medium text--dark">Schedule an Online Appointment</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- request zoom modal -->
<div class="otp-modal signin delete--modal requestModal social-modal modal fade" id="zoomRequestModal" tabindex="-1" role="dialog" aria-labelledby="zoomRequestModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content white-form">
          <div class="form--header">
            <h3 class="text--semi text--dark">Request for Demo Session</h3>
          </div>
          <p class="otp--header text--regular text--light">Please provide the following details to help us fix you a demo session.</p>
      <form autocomplete="off" class="white-form" id="zoom_lead_form" method="post">
        <div class="form--row">
        <div class="form__group form--md__12">
          <label for="name" class="custom--input custom__name">
          <input type="text" id="name" name="name" value="" placeholder="Full Name*">
          <span class="text--regular text--light custom--label">Full Name*</span>
          </label>
          <span id="err_z_name" class="with-errors"></span>
        </div>
        </div>
        <div class="form--row mt-0">
        <div class="form__group form--md__12">
          <label for="email" class="custom--input custom__email">
          <input type="email" id="email" name="email" value="" placeholder="Email Address*">
          <span class="text--regular text--light custom--label">Email Address*</span>
          </label>
          <span id="err_z_email" class="with-errors"></span>
        </div>
        </div>
        <div class="form--row mt-0">
        <div class="form__group form--md__12">
          <label for="phone" class="custom--input custom__mobile">
          <input type="text" id="mobile" name="mobile" value="" placeholder="Phone*">
          <span class="text--regular text--light custom--label">Phone*</span>
          </label>
          <span id="err_z_mobile" class="with-errors"></span>
        </div>
        </div>
        <!--div class="form--row"-->
        
         <div class="form--group form--md__12 contact">
                <select data-size="2" class="position--heading__drop" data-style="custom--input" data-width="100%" title="Select Program" name="program" id="program">
                  <option value="">Select Course</option>
                  <option value="IELTS">IELTS</option>
                  <option value="PTE">PTE</option>
                  
                </select>
                 <!--span class="text--regular text--light custom--label">Select Course*</span-->
                 <span id="err_z_program" class="with-errors"></span>
              </div>
        <!--/div-->
        <div class="form--row">
        <div class="form__group form--md__12">       
          <input type="hidden" name="page_name" value="zoom_lead" id="page_name" />
          <input type="hidden" name="message" value="" id="message" />
          <!--input type="hidden" name="prefference" value="" id="prefference" />
          <input type="hidden" name="pref_intake" value="" id="pref_intake" />
          <input type="hidden" name="nearestlocation" value="" id="nearestlocation" />
          <input type="hidden" name="counseling_mode" value="" id="counseling_mode" /-->
          <button type="submit" class="d-block text--medium button-rounded button-rounded__dark" style="width: 100%;" >Send OTP</button>
            
        </div>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>
 
<!-- Zoom schedule modal -->
<div class="otp-modal signin delete--modal requestModal social-modal session modal fade" id="zoomScheduleModal" tabindex="-1" role="dialog" aria-labelledby="zoomScheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content white-form">
          <div class="form--header">
            <h3 class="text--semi text--dark">Schedule a Demo Session</h3>
          </div>
          <p class="otp--header text--regular text--light">Please provide the date and time that works best for you.</p>
          <form autocomplete="off" class="white-form" id="appointment_form" method="post">
      <div class="form--row">
            <div class="form__group form--md__12">
              <label class='input-group date custom--input custom__calendar' for="dob" id='datetimepicker1'>
                <input type='text' placeholder="Schedule Date*" id="dob" name="dob" value="" />
                <span class="text--regular text--light custom--label">Schedule Date*</span>
                <span class="input-group-addon">
                </span>
              </label>
        <span id="err_f_date" class="with-errors"></span>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <div class="schedule__body">
                <div class="time__row">
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('10:00 AM');">10:00 AM</p>
                  </label>
          <!--label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('10:30 AM');">10:30 AM</p>
                  </label-->
                  <!--label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('11:00 AM');">11:00 AM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('11:30 AM');">11:30 AM</p>
                  </label-->
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('12:00 PM');">12:00 PM</p>
                  </label>
                  <!--label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('12:30 PM');">12:30 PM</p>
                  </label-->
                  <!--label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('01:00 PM');">01:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('01:30 PM');">01:30 PM</p>
                  </label-->
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('02:00 PM');">02:00 PM</p>
                  </label>
                  <!--label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('02:30 PM');">02:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('03:00 PM');">03:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('03:30 PM');">03:30 PM</p>
                  </label-->
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('04:00 PM');">04:00 PM</p>
                  </label>
                  <!--label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('04:30 PM');">04:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('05:00 PM');">05:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time1">
                    <p class="time__radio text--regular" onclick="setAppdateTime('05:30 PM');">05:30 PM</p>
                  </label-->
                  <!--<label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">06:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">06:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular" onclick="setAppdateTime('05:30 PM');">07:00 PM</p>
                  </label>-->
          <input type="hidden" name="time" id="time" value="">
                </div>
        <span id="err_f_time" class="with-errors"></span>
              </div>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <div class="submit">
                <!--<a href="javascript:void(0)" class="d-block text--medium button-rounded button-rounded__dark social-submit" id="ZoomsendRequest" >Submit</a>-->
                <button type="submit" class="d-block text--medium button-rounded button-rounded__dark" style="width:100%" >Submit</button>
              </div>
            </div>
          </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- appoint lead modal -->
<div class="delete--modal requestModal modal fade" id="appointleadModal" tabindex="-1" role="dialog" aria-labelledby="requestSendLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal"><span class="sr-only">close</span></a>
    <div class="modal-body">
      <div class="stepper--content white-form">
        
        <h2 class="pop--heading text--dark text--semi">Start your journey to study abroad</h2>
        <p class="pop--subHeading text--regular text--light">Please fill in the information and we will get back to you with more information.</p>
        <form autocomplete="off" class="white-form" id="appointment_lead_form" method="post">
          <div class="form--row">
            <div class="form__group form--md__12">
              <label for="f-name" class="custom--input custom__name">
              <input type="text" id="name" name="name" placeholder="Full Name*">
               <span class="text--regular text--light custom--label">Full Name*</span>
              </label>
              <span id="err_a_name" class="with-errors"></span>
            </div>
          </div>
          <div class="form--row mt-0">
            <div class="form__group form--md__12">
              <label for="email" class="custom--input custom__email">
              <input type="email" id="email" name="email" placeholder="Email*">
               <span class="text--regular text--light custom--label">Email*</span>
              </label>
              <span id="err_a_email" class="with-errors"></span>
            </div>
          </div>
          <div class="form--row mt-0">
            <div class="form__group form--md__12">
              <label for="phone" class="custom--input custom__mobile">
              <input type="text" name="mobile" id="mobile" placeholder="Phone*">
               <span class="text--regular text--light custom--label">Phone*</span>
              </label>
              <span id="err_a_mobile" class="with-errors"></span>
            </div>
          </div>
          <div class="form--group form--md__12 contact">
                <select data-size="2" class="position--heading__drop" data-style="custom--input" data-width="100%" title="Select Course" name="program" id="program">
                  <option value="">Select Course</option>
                  <option value="IELTS">IELTS</option>
                  <option value="PTE">PTE</option>
                  
                </select>
                 <!--span class="text--regular text--light custom--label">Select Course*</span-->
                 <span id="err_z_program" class="with-errors"></span>
              </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <input type="hidden" name="page_name" value="appointment_lead" id="page_name" />
              <input type="hidden" name="appdate" value="" id="appdate" />
              <input type="hidden" name="apptime" value="" id="apptime" />
              <!--input type="hidden" name="message" value="" id="message" />
              <input type="hidden" name="prefference" value="" id="prefference" />
              <input type="hidden" name="pref_intake" value="" id="pref_intake" />
              <input type="hidden" name="nearestlocation" value="" id="nearestlocation" />
              <input type="hidden" name="counseling_mode" value="" id="counseling_mode" /-->
              <button type="submit" class="d-block text--medium button-rounded button-rounded__dark" style="width: 100%;" >Send OTP</button>
              
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>

<!-- zoom Success modal -->
<div class="delete--modal requestModal modal fade" id="ZoomSuccessModal" tabindex="-1" role="dialog" aria-labelledby="requestSendLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal" aria-label="close"><span class="sr-only">close</span></a>
      <div class="modal-body">
                   <!-- Order Success Checkmark -->
            <div class="checkmark-wrapper mt-5">
                <span class="checkmark"></span>
            </div>
            <!-- Order Success Checkmark -->
        <p class="text--dark delete--modal--meassage">Request for Demo session successful!</p>
        <p class="text--light text--regular delete--modal--desc">You will receive information regarding zoom session via email within 24 hours.</p>
      </div>
    </div>
  </div>
</div>        
        
        
        

<!-- apply popup -->
<div class="delete--modal requestModal applyModal modal fade" id="GoalModal" tabindex="-1" role="dialog" aria-labelledby="applyLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p class="text--dark delete--modal--message">Set Your Goals</p>
        <p class="applyModal--uni mb-3"> <span class="text--light text--regular">Choose Your tentative IELTS test date</span> </p>
        <form class="white-form form" name="goals"  method="post" action="/testprep/set_goal">
                  @csrf
                  <div class="form--row">
            <div class="form__group form--md__12">
              <label class='input-group date custom--input custom__calendar' for="dob" id='datetimepicker1'>
                <input type='text' placeholder="Date" id="dob" value="Choose Date*" name="targateDate" />
                <span class="input-group-addon">
                </span>
              </label>
            </div>
          </div>
      
      <div class="bg-lighter mt-3 p-3">
                                  <div class="ch-test">
                                    <div class="select-test">
                                      <div class="icon-field"> <i class=" bx bx-headphone"></i>
                                        <p class="text--light text--regular fs-14">Listening</p>
                                      </div>
                                      <div class="mb-md-3">
                                     
                                        <select class="form-select" id="ListeningSelect" aria-label="Default select example" name="listening">
                      
                        <option selected="">Band</option>
                             <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="select-test">
                                      <div class="icon-field"> <i class="bx bx-pencil"></i>
                                        <p class="text--light text--regular fs-14">Writing</p>
                                      </div>
                                      <div class="mb-md-3">
                                      
                                        <select class="form-select" id="WritingSelect" aria-label="Default select example" name="writing">
                          <option selected="">Band </option>
                                              <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="select-test">
                                      <div class="icon-field"> <i class="bx bx-book-reader"></i>
                                        <p class="text--light text--regular fs-14">Reading</p>
                                      </div>
                                      <div class="mb-md-3">
                                    
                                        <select class="form-select" id="ReadingSelect" aria-label="Default select example" name="reading">
                          <option selected="">Band </option>
                                        <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="select-test">
                                      <div class="icon-field"> <i class="bx bx-user-voice"></i>
                                        <p class="text--light text--regular fs-14">Speaking</p>
                                      </div>
                                      <div class="mb-3">
                                    
                                        <select class="form-select" id="SpeakingSelect" aria-label="Default select example" name="speaking">
                          <option selected="">Band </option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
        
        
                  
                  <p class="text-danger mb-0 fw-500 fs-13">*All fields are Reuired</p>
                                </div>
      
      
              <div class="border p-4 mt-3 dashboardRightBar" id="overallscorepopdiv">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center justify-content-center">
                  <p class="text--dark text--medium dashboardRightBar--title fw-800">Overall Band</p>
                </div>
                <div class="col-md-4">
                  <div class="uProfile__right text-center">
                    <div  id="overallscorepop">
                      <!--div class="progress-bar position" data-number="74" data-percent="70" data-duration="1000" data-color="#F4F5F6, #1BB161"></div>
                      <p class="circular--label text--dark text-medium"><span class="scroe-band">7</span> <span class="band-title text--light">Band</span></p-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
      
      <div class="text-center text--light text--regular fw-500 fs-12 w-100">*The Score Set is for your Reference only</div>
      
        <!--div class="delete--modal--control"> <a href="./apply.html" class="button-rounded button-rounded__dark">Set Goal</a> </div-->
          <div class="delete--modal--control" id="showsubmit" style="display: none;">
            <button type="submit" class="button-rounded button-rounded__dark">Submit</button>
          </div>
        </form>
      
      
      
      </div>
    </div>
  </div> 
</div>
<!-- apply popup -->   


<!-- Diagnostic Test Modal info -->   
    
  <div class="modal fade mt-5" id="myDiagnosticModal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
            </div>
            <div class="modal-body">
                <h5 class="fs-20 fw-600 mb-5">How to reap the maximum benefits from Canamprep Platform?</h5>
               <div class="db-text-box">
              <div class="dbicon">
          
           <img class="img-fluid" src="/prep/assets/images/info1.png" alt="Icon">
          
                             </div>
              <div class="dbpbox">
                  <h4>Diagnostic Test</h4>
                  <p class="text--regular text--light fs-14">Potential Learners should take the diagnostic test to see their current standing. It
                    also enables our platform to recommended courses and plans according to your unique needs. </p>
              </div>
               </div>
           
           <div class="db-text-box">
              <div class="dbicon">
          
            
           <img class="img-fluid" src="/prep/assets/images/info2.png" alt="Icon">

              </div>
              <div class="dbpbox">
                  <h4>Enrol for PrepPlus </h4>
                  <p class="text--regular text--light fs-14">All learners are strongly recommended to enrol for the PrepPlus course recommended by our AI
algorithm after taking the evaluation Test. Save time and costs by clearing IELTS in the first attempt. </p>
              </div>
          </div>
           
           
           <div class="db-text-box">
              <div class="dbicon">
                
           <img class="img-fluid" src="/prep/assets/images/info3.png" alt="Icon">
              </div>
              <div class="dbpbox">
                  <h4>360* Learning </h4>
                  <p class="text--regular text--light fs-14">Gain access to the top 5% IELTS trainers, ebooks, pdf’s, full length mock tests, topic specific vocabulary
for all modules, sample 7 + band writing essays on topics, past IELTS exams and much more.  </p>
              </div>
          </div>
          
           
           
           <div class="db-text-box">
              <div class="dbicon">
              
           <img class="img-fluid" src="/prep/assets/images/info4.png" alt="Icon">
              </div>
              <div class="dbpbox border-0 mb-0">
                  <h4>Crack it</h4>
                  <p class="text--regular text--light fs-14">9 out of 10 learners achieve there desired band score after enrolling for the recommended prep plus
program. Average PrepPlus user saves 2 weeks in there IELTS journey.   </p>
              </div>
          </div>
           
           
      
      
            </div>
      
        <div class="modal-footer">
                      <a id="got_it" href="#" class="button-rounded button-rounded__dark">Got It!</a>
                    </div>   
        
        </div>
    </div>
</div>  
    
<!-- Diagnostic Test Modal info -->   

<!-- scripts --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<script src="/prep/js/lazysizes.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js" integrity="sha512-yhdujT21BI/kqk9gcupTh4jMwqLhb+gc6Ytgs4cL0BJjXW+Jo9QyllqLbuluI0cBHqV4XsR7US3lemEGjogQ0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<script src="{{ URL::to('/prep/js/app.js') }}"></script> 
@yield('scripts')
<script>
            $(function () {
                $('.custom__calendar').datepicker({
                    autoclose: true,
                    orientation: "top auto",
                });
            });
        </script> 
<script>
            $(".progress-bar").loading();
            $(document).ready(function () {
                $('.toast').toast('show');
            });
  
            $(window).on('click',function(){
            $('#myDiagnosticModal').modal('hide');
        }); 
  
  
  //    var options = {
  //         series: [{
  //           name: "Desktops",
  //           data: [5,6, 7, 5, 9]
  //       }],
  //         chart: {
  //         height: 300,
  //         type: 'line',
  //         zoom: {
  //           enabled: false
  //         }
  //       },
  //       dataLabels: {
  //         enabled: false
  //       },
  //       stroke: {
  //         curve: 'smooth'
  //       },
        
  //       grid: {
  //         row: {
  //           colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
  //           opacity: 0.5
  //         },
  //       },
       
    
  //    yaxis: {
  //         title: {
  //           text: 'BAND'
  //         },
        
  //       },  
       
       
  //       fill: {
  //   type: "gradient",
  //   gradient: {
  //     shadeIntensity: 1,
  //     opacityFrom: 0.7,
  //     opacityTo: 0.9,
  //     colorStops: [
  //       {
  //         offset: 0,
  //         color: "#FDB97C ",
  //         opacity: 1
  //       },
  //       {
  //         offset: 20,
  //         color: "#EE4057",
  //         opacity: 1
  //   }
  //     ]
  //   }
  // },
         

       
  //       xaxis: {
  //         categories: ['1', '3', '5', '7', '8', '9', ],
      
      
  //       title: {
  //           text: 'DATE'
  //         },
      
    
  //       },
       
       
  //       };

  //       var chart = new ApexCharts(document.querySelector("#mock-graph"), options);
  //       chart.render();
  
  
  
  // practice test graph //
  
  
  
  
        </script>
</body>
</html>