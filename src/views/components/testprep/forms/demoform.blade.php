<section class=" sign book-demo pt-md-16 py-10 pb-0 ">
    <div class="custom-container ">
      <div class="student--header ">
        <h2 class="section--title text--primary text--semi mb-5">Book your <span class="text-danger">Free Demo</span> session</h2>
        <p class="col-md-6 text--light text--regular p-0 mb-5">Get a free academic counselling session</p>
      </div>
      <!--pre>
      @php
      print_r($errors->all());
      @endphp
    </pre-->
      <div class="row">
        <div class="col-md-6 d-md-block d-none"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/ielts-banner.webp') }}" alt="IELTS Enroll"> </div>
        <div class="col-md-5 offset-md-1">
          <form class="white-form form cp-book-form radius-10 mt-md-0 mt-0" autocomplete="off" method="post" name="demoform" action="{{ url('/testprep/demoform') }}" >
            @csrf
            <div class="stepper--content active" id="step1r">
              <div class="form--header d-md-flex flex-column mb-2">
                <h5 class="bg-white p-3 fs-14 w-100 d-md-flex align-items-center" ><img class="img-fluid lazyload me-3" data-src="{{ URL::to('/prep/assets/images/st-trophy.png') }}" alt="Trophy"><span><strong>1 Million Users</strong> - Canamprep Hits A Milestone</span></h5>
                <p class="he-title fs-25 fs-sm-18 w-100 font-weight-bold my-3 "><span class="text-danger">Let us assist you</span> for free!</p>
                <p class="text--light text--regular p-0 mb-3 w-100 fs-14">Save at least 7 hours with our experts help</p>
              </div>
              <div class="form--group">
                <label for="user" class="custom--input custom__name">
                  <input type="text" id="email" placeholder="name" name="name">
                  <span class="text--regular text--light custom--label">Full Name</span> 
                 
                </label>
                 <span class="text-danger">
                  @error('name')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="form--group">
                <label for="email" class="custom--input custom__email"  >
                  <input type="text" id="email" placeholder="email" name="email" >
                  <span class="text--regular text--light custom--label">Email</span> 
                     
                </label>
                <span class="text-danger">
                  @error('email')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="form--group">
                <label for="phone" class="custom--input custom__mobile">
                  <input type="text" id="phone" placeholder="mobile" name="phone">
                  <span class="text--regular text--light custom--label">Mobile</span> 
                </label>
                 <span class="text-danger">
                  @error('phone')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="form--group">
                <label for="city" class="custom--input custom__citys"  >
                  <input type="text" id="city" placeholder="city" name="city">
                  <span class="text--regular text--light custom--label">City</span>
                   </label>
                   <span class="text-danger">
                  @error('city')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="form--group form--md__12 contact">
                <select data-size="7" class="position--heading__drop" data-style="custom--input" data-width="100%" title="Select Course" name="course">
                  <option value="">Select Course</option>
                  <option value="IELTS-Academic">IELTS-Academic</option>
                  <option value="IELTS-General">IELTS-General</option>
                  <option value="CELPIP">CELPIP</option>
                  <option value="PTE">PTE</option>
                  <option value="TOFEL">TOEFL</option>
                  <option value="GRE">GRE</option>
                  <option value="GMAT">GMAT</option>
                  <option value="SPOKEN ENGLISH">SPOKEN ENGLISH</option>
                  <option value="Duolingo">Duolingo</option>
                </select>
                 <span class="text-danger">
                  @error('course')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="submit mt-3">
                <p class="text--light text--regular fs-12 mb-2">By submitting you agree to our <a class="fs-12" href="#" >terms</a> and <a class="fs-12" href="#">privacy policy</a>.</p>
                <!--button type="button" onclick="window.location.href = 'javascript:void(0)'" class="arrow arrow--button arrow--button__black arrow--button__nextBtn w-100 border-0 d-flex justify-content-center"> <img class="img-fluid lazyload me-3" data-src="{{ URL::to('/prep/assets/images/charge-icon.svg') }}" alt="IELTS Enroll"> Get Expert Help!</button-->

              </div>
            </div>
            <div class="stepper--content otp" id="step2"> <a href="#" class="arrow arrow--link arrow--link__red arrow--link__back btn-prev"><span>Back</span></a>
              <div class="form--header">
                <h1 class="text--semi text--dark">Enter OTP</h1>
              </div>
              <p class="otp--header text--regular text--light"> Please enter the verification code shared to <span class="text--dark text--medium">91****8345 </span> </p>
              <div class="form--group">
                <div class="otp-wrapper">
                  <input class="otp-input" type="tel" maxlength="1" data-index="0">
                  <input class="otp-input" type="tel" maxlength="1" data-index="1">
                  <input class="otp-input" type="tel" maxlength="1" data-index="2">
                  <input class="otp-input" type="tel" maxlength="1" data-index="3">
                </div>
              </div>
              <div class="already resend">
                <p class="text--regular text--dark">Still not recieved OTP? <a href="#" class="text--red text--medium">Resend OTP</a></p>
              </div>
              <button type="submit" class="submit"> <a href="#" class="text--medium button-rounded button-rounded__dark">Submit</a> </div>
                <button type="submit" class="text--medium button-rounded button-rounded__dark"> Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>