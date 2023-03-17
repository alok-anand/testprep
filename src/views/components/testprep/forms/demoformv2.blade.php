<section class="section section__black m-0" id="demo-form">
    <div class="custom-container">

      <div class="row">
        <div class="col-md-5">

                 <p class="section--tag text--light">Book Demo Class</p>

          <h2 class="section--title text--white text--semi">90% of students enrolled at Canamprep Crack IELTS 8.7x faster</h2>
        </div>
        <div class="col-md-7">
          <form class="black-form" autocomplete="off" id="black-form" method="post" name="demoform" action="{{ url('/testprep/demoform') }}">
            @csrf

            <div class="form--row">
                <!--pre>
                    @php
                    print_r($errors->all());
                    @endphp
                 </pre-->
              <div class="form__group form--md__12">
                <label for="name" class="custom--input custom__name">
                  <input type="text" id="name" placeholder="Full Name*" name="name" >
                </label>
                <span id="err_z_name" class="text-danger fs-12"></span>
                <span class="text-danger">
                    @error('name')
                      {{ $message }}
                    @enderror
                  </span>
              </div>
            </div>
            <div class="form--row">
              <div class="form__group form--lg__6">
                <label for="mobile" class="custom--input custom__mobile">
                  <input type="text" id="mobile" placeholder="Mobile" name="phone">
                </label>
                <span id="err_z_mobile" class="text-danger fs-12"></span>
                <span class="text-danger">
                @error('phone')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="form__group form--lg__6">
                <label for="email" class="custom--input custom__email" name="phone">
                  <input type="email" id="email" placeholder="Email Address*" name="email">
                </label>
                <span id="err_z_email" class="text-danger fs-12"></span>
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                      @enderror
                    </span>
              </div>
            </div>
            <div class="form--row">
              <div class="form__group form--lg__6">

                <label for="city" class="custom--input custom__citys"  >
                    <input type="text" id="city" placeholder="city" name="city">

                     </label>
                      <span id="err_z_city" class="text-danger fs-12"></span>
                <span class="text-danger">
                @error('city')
                    {{ $message }}
                  @enderror
                </span>
              </div>
              <div class="form__group form--lg__6">
                <select data-size="7" class="pop--select" data-style="btn-pop" data-width="100%" title="Select Program" name="course" id="course" >
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
                 <span id="err_z_course" class="text-danger fs-12"></span>
                <span class="text-danger">
                    @error('course')
                      {{ $message }}
                    @enderror
                </span>
              </div>

            </div>

              <!--div class="form-row mt-4">
                <div class="form-group" style="margin-left: 12px;">
                    <div class="form-check acpetcheck-tremcndtn">
                        <input class="form-check-input" type="checkbox" value="agree" id="invalidCheck" name="agree" >
                        <label class="form-check-label" for="invalidCheck">
                        <p class="fs-12 text-white ms-3">By selecting this, you agree to Canam’s <a class="text-red-hover" href="{{ url('/testprep/privacy-policy') }}" target="_blank">Privacy policy</a> and <a class="text-red-hover" href="{{ url('/testprep/terms-and-conditions') }}" target="_blank">Terms &amp; Conditions</a>. You agree to be contacted by Canam by phone, e-mail, or messages.</p>
                        </label>
                        <div class="with-errors" id="err_invalidCheck"></div>
                    </div>
                </div>
            </div-->

            <div class="form--row">
              <div class="form__group d-flex align-items-center justify-content-end mt-5 ">
              <button  type="submit"  class="arrow arrow--button arrow--button__white border-0" ><span>Book Now</span></button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
</section>
