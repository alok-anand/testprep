

<!-- floating social icons -->
<div class="floating-icons">
  <a href="javascript:void(0)" class="floating-icons__link" data-target="#zoomModal" data-toggle="modal">
    <img class="floating-icons__img" src="/prep/assets/images/zoom.png" alt="zoom icon">
    <span class="sr-only">Zoom</span>
  </a>
  <div class="bottom">
    <a href="javascript:void(0)" class="floating-icons__link" data-target="#phoneModal" data-toggle="modal">
      <img class="floating-icons__img" src="/prep/assets/images/phone.png" alt="phone icon">
      <span class="sr-only">Call</span>
    </a>
    <a href="javascript:void(0)" class="floating-icons__link" data-target="#whatsAppmodal" data-toggle="modal">
      <img class="floating-icons__img" src="/prep/assets/images/whatsapp.png" alt="whatsapp icon">
      <span class="sr-only">WhatsApp</span>
    </a>
  </div>
</div>
<!-- zoom modal -->
<div class="otp-modal delete--modal requestModal social-modal modal fade" id="zoomModal" tabindex="-1" role="dialog" aria-labelledby="zoomModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content white-form">
          <div class="form--header">
            <h1 class="text--semi text--dark">Canamprep Virtual Office</h1>
          </div>
          <p class="otp--header text--regular text--light">Select mode of communication</p>
          <div class="form--row">
            <div class="form__group form--md__12">
              <a href="javascript:void(0)" class="zoom-action social-submit" data-toggle="modal" id="zoomRequest" data-target="zoomRequestModal">
                <img class="img-fluid" src="./assets/images/zoom-action.png" alt="">
                <p class="text--medium text--dark">Join Virtual Counseling via Zoom</p>
              </a>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <a href="javascript:void(0)" class="zoom-action social-submit" data-toggle="modal" id="zoomSchedule" data-target="zoomScheduleModal">
                <img class="img-fluid" src="./assets/images/zoom-schedule.png" alt="">
                <p class="text--medium text--dark">Schedule an Online Appointment</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- request zoom modal -->
<div class="otp-modal delete--modal requestModal social-modal modal fade" id="zoomRequestModal" tabindex="-1" role="dialog" aria-labelledby="zoomRequestModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close success-close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content white-form">
          <div class="form--header">
            <h1 class="text--semi text--dark">Request for Zoom Session</h1>
          </div>
          <p class="otp--header text--regular text--light">Please provide the following details to help us fix you a zoom session.</p>
          <div class="form--row">
            <div class="form__group form--md__12">
              <label for="f-name" class="custom--input custom__name">
                <input type="text" id="f-name" placeholder="Full Name*">
              </label>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <label for="f-name" class="custom--input custom__email">
                <input type="text" id="f-name" placeholder="Email Address*">
              </label>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <label for="phone" class="custom--input custom__mobile">
                <input type="text" id="phone" placeholder="Phone*">
              </label>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <div class="submit">
                <a href="javascript:void(0)" class="d-block text--medium button-rounded button-rounded__dark social-submit" data-toggle="modal" id="ZoomsendRequest" data-target="ZoomSuccessModal">Submit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
<!-- Zoom schedule modal -->
<div class="otp-modal delete--modal requestModal social-modal session modal fade" id="zoomScheduleModal" tabindex="-1" role="dialog" aria-labelledby="zoomScheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <a href="javascript:void(0)" class="close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content white-form">
          <div class="form--header">
            <h1 class="text--semi text--dark">Schedule an Online Appointment</h1>
          </div>
          <p class="otp--header text--regular text--light">Please provide the date and time that works best for you.</p>
          <div class="form--row">
            <div class="form__group form--md__12">
              <label class='input-group date custom--input custom__calendar' for="dob" id='datetimepicker1'>
                <input type='text' placeholder="Date" id="dob" value="Schedule Time*" />
                <span class="input-group-addon">
                </span>
              </label>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <div class="schedule__body">
                <div class="time__row">
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">10:30 AM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">11:00 AM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">11:30 AM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">12:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">12:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">01:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">02:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">03:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">03:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">04:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">04:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">05:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">05:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">06:00 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">06:30 PM</p>
                  </label>
                  <label class="time__radio--label">
                    <input type="radio" name="time">
                    <p class="time__radio text--regular">07:00 PM</p>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form--row">
            <div class="form__group form--md__12">
              <div class="submit">
                <a href="javascript:void(0)" class="d-block text--medium button-rounded button-rounded__dark social-submit" data-toggle="modal" id="ZoomsendRequest" data-target="ZoomSuccessModal">Submit</a>
              </div>
            </div>
          </div>
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
        <p class="text--dark delete--modal--meassage">Request for zoom session successful!</p>
        <p class="text--light text--regular delete--modal--desc">You will receive information regarding zoom session via email within 24 hours.</p>
      </div>
    </div>
  </div>
</div>        
        
        
        

<!-- Book Now Modal -->
<div class="otp-modal delete--modal requestModal modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> <a href="javascript:void(0)" class="close" data-dismiss="modal"><span class="sr-only">close</span></a>
      <div class="modal-body">
        <div class="stepper--content otp" id="step2">
          <div class="form--header">
            <h1 class="text--semi text--dark">Enter Your Details</h1>
          </div>
          <form class="white-form" autocomplete="off">
            <div class="form--row">
              <div class="form__group form--md__12">
                <label for="f-name" class="custom--input custom__name">
                  <input type="text" id="f-name" placeholder="Full Name*">
                  <span class="text--regular text--light custom--label">Full Name</span> </label>
              </div>
              <div class="form__group form--lg__12">
                <label for="mobile" class="custom--input custom__mobile">
                  <input type="text" id="mobile" placeholder="Mobile">
                  <span class="text--regular text--light custom--label">Phone No.</span> </label>
              </div>
              <div class="form__group form--lg__12">
                <label for="email" class="custom--input custom__email">
                  <input type="text" id="email" placeholder="email">
                  <span class="text--regular text--light custom--label">Email</span> </label>
              </div>
            </div>
          </form>
          
          <!-- invalid otp code --> 
          <!-- <div class="form--group">
            <div class="otp-wrapper invalid">
              <input class="otp-input" type="tel" maxlength="1" data-index="0">
              <input class="otp-input" type="tel" maxlength="1" data-index="1">
              <input class="otp-input" type="tel" maxlength="1" data-index="2">
              <input class="otp-input" type="tel" maxlength="1" data-index="3">
            </div>
            <p class="text--red text--regular invalid-message">Invalid OTP</p>
          </div> -->
          
          <div class="submit"> <a href="#requestSendModal" class="d-block text--medium button-rounded button-rounded__dark" data-toggle="modal" id="sendRequest" data-target="requestSendModal">Submit</a> </div>
        </div>
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
          <div class="footer--social-body"> <a href="https://www.facebook.com/canamprep" class="facebook" target="_blank"><span class="sr-only">Facebook</span></a> <a href="https://www.youtube.com/c/Masterprep" class="youtube" target="_blank"><span class="sr-only">Youtube</span></a> <a href="https://www.instagram.com/canam.prep/" class="instagram" target="_blank"><span class="sr-only">Instagram</span></a> <a href="https://www.linkedin.com/company/canamprep/" class="linked" target="_blank"><span class="sr-only">Linked In`</span></a> <!--a href="#" class="twitter" target="_blank"><span class="sr-only">Twitter</span></a--> </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Canam</h2>
            <ul>
              <li><a href="./about.html" class="text--primary text--regular">About us</a></li>
              <li><a href="./career.html" class="text--primary text--regular">Career</a></li>
              <li><a href="./event.html" class="text--primary text--regular">Events</a></li>
              <li><a href="./article.html" class="text--primary text--regular">Blogs and Articles</a></li>
              <li><a href="./contact.html" class="text--primary text--regular">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Exam</h2>
            <ul>
              <li><a href="./about.html" class="text--primary text--regular">IELTS</a></li>
              <li><a href="./career.html" class="text--primary text--regular">TOEFL</a></li>
              <li><a href="./event.html" class="text--primary text--regular">PTE</a></li>
              <li><a href="./article.html" class="text--primary text--regular">CELPIP</a></li>
              <li><a href="./contact.html" class="text--primary text--regular">CAEL CE</a></li>
              <li><a href="./signup.html" class="text--primary text--regular">UKVI Test</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Explore</h2>
            <ul>
              <li><a href="./program.html" class="text--primary text--regular">Programs</a></li>
              <li><a href="./institute.html" class="text--primary text--regular">Institutes</a></li>
            </ul>
          </div>
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Services</h2>
            <ul>
              <li><a href="./services.html" class="text--primary text--regular">For Students</a></li>
              <li><a href="./services.html#institute" class="text--primary text--regular">For Institutes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="footer--menu-body">
            <h2 class="footer--menu-body__title text--primary">Study Abroad</h2>
            <ul>
              <li><a href="#" class="text--primary text--regular">Canada</a></li>
              <li><a href="#" class="text--primary text--regular">USA</a></li>
              <li><a href="#" class="text--primary text--regular">New Zealand</a></li>
              <li><a href="#" class="text--primary text--regular">Australia</a></li>
              <li><a href="#" class="text--primary text--regular">United Kingdom</a></li>
              <li><a href="#" class="text--primary text--regular">Singapore</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer--bottom row">
        <div class="footer--bottom__left col-lg-10">
          <div class="footer--bottom__left--one"> <a href="./disclaimer.html" class="text--primary text--regular">Disclaimer</a> <span>•</span> <a href="./privacy.html" class="text--primary text--regular">Privacy Policy</a> <span>•</span> <a href="./terms.html" class="text--primary text--regular">Terms & Conditions</a> 
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