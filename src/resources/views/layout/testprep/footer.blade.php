<!-- Confirm Seat Modal -->
<style>
    .modal .custom--input {
  margin-bottom: 0 !important;
}
    
    
</style>

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
        <p class="text--light text--regular delete--modal--desc">Your Demo session request has been successfully submitted. You will hear from us shortly.</p>
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
        <div class="form__group form--md__12 mb-4">
          <label for="name" class="custom--input custom__name mb-0">
          <input type="text" id="name" name="name" value="" placeholder="Full Name*">
          <span class="text--regular text--light custom--label">Full Name*</span>
          </label>
          <span id="err_l_name" class="with-errors text-danger fs-12"></span>
        </div>
        </div>
        <div class="form--row mt-0">
        <div class="form__group form--md__12 mb-4">
          <label for="email" class="custom--input custom__email mb-0">
          <input type="email" id="email" name="email" value="" placeholder="Email Address*">
          <span class="text--regular text--light custom--label">Email Address*</span>
          </label>
          <span id="err_l_email" class="with-errors text-danger fs-12"></span>
        </div>
        </div>
        <div class="form--row mt-0">
        <div class="form__group form--md__12 mb-4">
          <label for="phone" class="custom--input custom__mobile mb-0">
          <input type="text" id="mobile" name="mobile" value="" placeholder="Phone*">
          <span class="text--regular text--light custom--label">Phone*</span>
          </label>
          <span id="err_l_mobile" class="with-errors text-danger fs-12"></span>
        </div>
        </div>
        <!--div class="form--row"-->
        
         <div class="form--group form--md__12 contact mb-4">
                <select data-size="2" class="position--heading__drop mb-0" data-style="custom--input" data-width="100%" title="Select Program" name="program" id="program">
                  <option value="">Select Course</option>
                  <option value="IELTS">IELTS</option>
                  <option value="PTE">PTE</option>
                  
                </select>
                 <!--span class="text--regular text--light custom--label">Select Course*</span-->
                 <span id="err_l_program" class="with-errors text-danger fs-12"></span>
              </div>
        <!--/div-->
        <div class="form--row">
        <div class="form__group form--md__12 mb-4">       
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
            <div class="form__group form--md__12 mb-4">
              <label class='input-group date custom--input custom__calendar mb-0' for="dob" id='datetimepicker1'>
                <input type='text' placeholder="Schedule Date*" id="dob" name="dob" value="" />
                <span class="text--regular text--light custom--label">Schedule Date*</span>
                <span class="input-group-addon">
                </span>
              </label>
        <span id="err_f_date" class="with-errors text-danger fs-12"></span>
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
        <span id="err_f_time" class="with-errors text-danger fs-12"></span>
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
            <div class="form__group form--md__12 mb-4">
              <label for="f-name" class="custom--input custom__name">
              <input type="text" id="name" name="name" placeholder="Full Name*">
               <span class="text--regular text--light custom--label">Full Name*</span>
              </label>
              <span id="err_a_name" class="with-errors text-danger fs-12"></span>
            </div>
          </div>
          <div class="form--row mt-0">
            <div class="form__group form--md__12 mb-4">
              <label for="email" class="custom--input custom__email">
              <input type="email" id="email" name="email" placeholder="Email*">
               <span class="text--regular text--light custom--label">Email*</span>
              </label>
              <span id="err_a_email" class="with-errors text-danger fs-12"></span>
            </div>
          </div>
          <div class="form--row mt-0">
            <div class="form__group form--md__12 mb-4">
              <label for="phone" class="custom--input custom__mobile">
              <input type="text" name="mobile" id="mobile" placeholder="Phone*">
               <span class="text--regular text--light custom--label">Phone*</span>
              </label>
              <span id="err_a_mobile" class="with-errors text-danger fs-12"></span>
            </div>
          </div>
          <div class="form--group form--md__12 contact mb-4">
                <select data-size="2" class="position--heading__drop" data-style="custom--input" data-width="100%" title="Select Course" name="program" id="program">
                  <option value="">Select Course</option>
                  <option value="IELTS">IELTS</option>
                  <option value="PTE">PTE</option>
                  
                </select>
                 <!--span class="text--regular text--light custom--label">Select Course*</span-->
                 <span id="err_z_program" class="with-errors text-danger fs-12"></span>
              </div>
          <div class="form--row">
            <div class="form__group form--md__12 mb-4">
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
        
        
        

<!-- Book Now Modal -->

</body>
<footer class="footer">
    <div class="custom-container">
      <div class="row">
        <div class="col-lg-4"> <a href="#" class="footer--logo"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/cp-logo-footer.svg') }}" alt="CanamPrep"> <span class="sr-only">Footer Logo</span> </a>
          <p class="text--regular text--primary footer--desc">Canam help students explore opportunities for overseas education and provides counselling and assistance for the admission process.</p>
          <div class="footer--social-body"> <a href="https://www.facebook.com/canamprep" class="facebook" target="_blank"><span class="sr-only">Facebook</span></a> <a href="https://www.youtube.com/@canamprep" class="youtube" target="_blank"><span class="sr-only">Youtube</span></a> <a href="https://www.instagram.com/canam.prep/" class="instagram" target="_blank"><span class="sr-only">Instagram</span></a> <a href="https://www.linkedin.com/company/canamprep/" class="linked" target="_blank"><span class="sr-only">Linked In`</span></a> <!--a href="#" class="twitter" target="_blank"><span class="sr-only">Twitter</span></a--> </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Canam</h2>
            <ul>
              <li><a href="{{ url('/about-us') }}" class="text--primary text--regular">About us</a></li>
              <li><a href="{{ url('/career') }}" class="text--primary text--regular">Career</a></li>
              <li><a href="{{ url('/events') }}" class="text--primary text--regular">Events</a></li>
              <li><a href="{{ url('/blog') }}" class="text--primary text--regular">Blogs and Articles</a></li>
              <li><a href="{{ url('/contact-us') }}" class="text--primary text--regular">Contact Us</a></li>
                <li><a href="{{ url('/quick-query') }}" class="text--primary text--regular">Quick query</a></li>
                 <li><a href="{{ url('/stories') }}" class="text--primary text--regular">Stories</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Exam</h2>
            <ul>
              <li><a href="{{ url('/testprep/ielts') }}" class="text--primary text--regular">IELTS</a></li>
              <li><a href="{{ url('/testprep/toefl') }}" class="text--primary text--regular">TOEFL</a></li>
              <li><a href="{{ url('/testprep/pte') }}" class="text--primary text--regular">PTE</a></li>
              <li><a href="{{ url('/testprep/celpip') }}" class="text--primary text--regular">CELPIP</a></li>
              <li><a href="{{ url('/testprep/cael') }}" class="text--primary text--regular">CAEL CE</a></li>
              <li><a href="{{ url('/testprep/duolingo') }}" class="text--primary text--regular">DUOLINGO</a></li>
         <!--     <li><a href="{{ url('/testprep/ielts') }}" class="text--primary text--regular">UKVI Test</a></li>-->
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Explore</h2>
            <ul>
              <li><a href="{{ url('/programs') }}" class="text--primary text--regular">Programs</a></li>
              <li><a href="{{ url('/universities') }}" class="text--primary text--regular">Institutes</a></li>
            </ul>
          </div>
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Services</h2>
            <ul>
              <li><a href="{{ url('/services') }}" class="text--primary text--regular">For Students</a></li>
              <li><a href="{{ url('/services##institute') }}" class="text--primary text--regular">For Institutes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Study Abroad</h2>
            <ul>
              
              <li><a href="{{ url('/study-in-australia') }}" class="text--primary text--regular">Australia</a></li>
              <li><a href="{{ url('/study-in-canada') }}" class="text--primary text--regular">Canada</a></li>
              <li><a href="{{ url('/study-in-usa') }}" class="text--primary text--regular">USA</a></li>
              <li><a href="{{ url('/study-in-newzealand') }}" class="text--primary text--regular">New Zealand</a></li>
              
              <li><a href="{{ url('/study-in-uk') }}" class="text--primary text--regular">United Kingdom</a></li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="footer--bottom row">
        <div class="footer--bottom__left col-lg-10">
          <div class="footer--bottom__left--one"> <a href="{{ url('/testprep/disclaimer') }}" class="text--primary text--regular">Disclaimer</a> <span>•</span> <a href="{{ url('/testprep/privacy-policy') }}" class="text--primary text--regular">Privacy Policy</a> <span>•</span> <a href="{{ url('/testprep/terms-and-conditions') }}" class="text--primary text--regular">Terms & Conditions</a> 
            <!-- <span class="web">â€¢</span> --> 
          </div>
          <!-- <div class="footer--bottom__left--two">
            <select class="country-picker" data-width="fit" data-size="5" data-style="custom-btn">
              <option data-content="<p><img src='./assets/images/uk-flag.png' />Select Region</p>">Select Region</option>
              <option data-content="<p><img src='./assets/images/usa-flag.png' />USA</p>">USA</option>
              <option data-content="<p><img src='./assets/images/china-flag.png' />China</p>">China</option>
              <option data-content="<p><img src='./assets/images/canada-flag.png' />Canada</p>">Canada</option>
              <option data-content="<p><img src='./assets/images/uae-flag.png' />UAE</p>">UAE</option>
              <option data-content="<p><img src='./assets/images/ir-flag.png' />Ireland</p>">Ireland</option>
              <option data-content="<p><img src='./assets/images/singapore-flag.png' />Singapore</p>">Singapore</option>
            </select>
          </div> --> 
        </div>
        <div class="col-lg-12 d-md-flex justify-content-between">
          <p class="text--light text--regular copy">Copyright &copy; 2023 Canamprep Group All rights reserved.</p>
          <p class="text--light text--regular copy mt-1">Punjab Govt. License No. 173/ 19-09-2017 ( Formerly Canam Technologies Limited )</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ URL::to('/prep/js/lazysizes.min.js') }}"></script>
<script src="{{ URL::to('/prep/js/app.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ URL::to('/prep/js/custom.js') }}?v={{ time() }}"></script>
<script src="{{ URL::to('/prep/js/login-signup.js') }}?v={{ time() }}"></script>
@yield('scripts')
<script>
            $(document).ready(function () {
                $(".toast").toast('show');
                $('.close-btn').click(function () {
                    $(".toast").toast('hide');
                    $('.mainToast').hide();
                });
            });
            $(function () {
                $('.custom__calendar').datepicker({
                    autoclose: true,
                    orientation: "auto",
                });
                $('#datetimepicker1').click(function () {
                    var popup = $(this).offset();
                    var popupTop = popup.top - 0;
                    $('.datepicker').css({
                        'top': popupTop
                    });
                });
            });
        </script>
</html>
