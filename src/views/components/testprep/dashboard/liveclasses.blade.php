
              <div class="card--video__slider owl-carousel mt-4"  >
                @php $i = 1; @endphp
              @foreach($onlineBatches as $onlineBatch)

                <div class="item card--video border radius-10 overflow-hidden bg-white">
                  <figure class="card--video__figure"> <img class="img-fluid lazyload" data-src="{{ URL::to('/prep/assets/images/video-thumb-'.$i.'.webp') }}" alt="IELTS Quiz the day: How to use vocabulary?"> <img class="card--video__play" src="{{ URL::to('/prep/assets/images/play.svg') }}" alt="play button">
                    <div class="card--event__dates ">
                      <p class="card--event__date bg-danger"><span class=" card--event__date__number text--white">@php echo date('d'); @endphp</span><span class="card--event__date__month text--light text--white">@php echo date('M'); @endphp</span></p


                    </div>
                  </figure>
                  <div class="p-3 "> <img class="lazyload live-meet-logo" data-src="{{ URL::to('/prep/assets/images/student/ielts-logo2.svg') }}" alt="{{ $onlineBatch->title }}">
                    <p class="card--event__name text--primary text--semi mt-0 mb-2"> {{ $onlineBatch->title }}</p>
                    <p class="card--video__description text--light text--regular mt-0 pt-0 mb-3">@php echo $onlineBatch->User->fname .' '.$onlineBatch->User->lname ;  @endphp |  {{ $onlineBatch->classstarttime }} {{ $onlineBatch->classsendtime  }}</p>
                    <!--button class="button-rounded arrow--button__redBg  border-0 px-5 py-3" data-toggle="modal" data-target="#appointleadModal"  app_date="{{ date('m/d/y'); }}"  app_time="{{ date('H:i'); }}"  > <i class="fs-16 bx bx-bell bx-tada" ></i> Reminder Me</button-->
                    <button  class="button-rounded button-rounded__dark border-0 px-5 py-3" data-toggle="modal" data-target="#zoomRequestModal" >Enrol Now</button>
                  </div>
                </div>
              @php $i++; @endphp
              @endforeach
              </div>
            