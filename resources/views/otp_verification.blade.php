@include('partials.header')

          @if (session('success'))
          <div x-data="{show: true}" x-init="setTimeout(()=> show =   false, 5000)" class="alert alert-success alert-message fixed-bottom" role="alert">
            {{ session('success') }}
          </div>
          @endif

          @if (session('error'))
          <div class="alert alert-success alert-message fixed-bottom alert-dismissible fade show" role="alert">
            {{ session('error') }}
          </div>
          @endif

          <!-- verify OTP Form -->
          <div class="card z-index-0 fadeIn3 fadeInBottom mt-n4 m-2 " id="otpverify-form">    
            <h4 class="font-weight-bolder text-center mt-4">We need to verify<br /> if it's you!</h4>
            <div class="card-body">
              <form role="form" class="text-start" method="POST" action="{{ route('otp.verify_code') }}">
                
                @csrf

                <p class="text-center mt-0" style="font-size: 14px;">A 6-digit OTP has been sent to your mobile number <span id="mobile_no" style="font-weight: bold;">{{auth()->user()->mobile_number}}</span>.</p>
                <div class="input-group input-group-outline mb-2">
                  <label class="form-label">Enter OTP Code</label>
                  <input type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" id="otp">
                </div>
                @error('otp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="text-center">
                  <button type="submit" class="btn verify-btn w-100 my-3 mb-1">Verify</button>
                  <button type="button" class="btn resend-btn w-100 my-1 mb-1" onclick="window.location='{{ route('otp.resend') }}' ">Resend OTP</button>
                </div>
              </form>
            </div>
          </div>
        </div>

       @include('partials.sections')
       <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript">
    //  if(window.screen.width < 767){
    //   document.getElementById('main').style.display = "none";
    //  }



    $('#spanYear').html(new Date().getFullYear());
    function showRegForm(){
        document.getElementById('signup-form').removeAttribute('hidden');
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('otpverify-form').hidden = true;
    }   
    function showSetupAddForm(){
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').removeAttribute('hidden');
        document.getElementById('otpverify-form').hidden = true;
    }
    function showOtpVerifyForm(){
        let mobileNo = document.getElementById('mobile_number').value;  
        let spanMobileNumber = document.getElementById('mobile_no');

        spanMobileNumber.textContent = mobileNo;
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('otpverify-form').removeAttribute('hidden');
    }
    // datepicker
    $('#birthdate').datepicker({
       endDate: '-16y'
      });


      // custom swiper

    //   const swiperEl1 = document.getElementById('swiper1');
    //   const swiperEl2 = document.getElementById('swiper2');

    // const params = {
    //   injectStyles: [`
    //   .swiper-pagination-bullet {
    //     width: 10px;
    //     height: 10px;
    //     text-align: center;
    //     line-height: 20px;
    //     font-size: 12px;
    //     color: #000;
    //     opacity: 1;
    //     background: rgba(0, 0, 0, 0.2);
    //   }

    //   .swiper-pagination-bullet-active {
    //     color: #fff;
    //     background: #178c3a;
    //     width: 12px;
    //     height: 12px;
    //   }

    //   .swiper-pagination{
    //     margin-top: 100px;
    //   }
    //   `],
    //   pagination: {
    //     clickable: true,
    //   },
    // }

    // Object.assign(swiperEl1, params);
    // Object.assign(swiperEl2, params);

    // swiperEl1.initialize();
    // swiperEl2.initialize();

    // preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
});
  </script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      // slidesPerView: 5,
      // spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      freeMode:{
        enabled : true,
        sticky: true,
      },
      breakpoints: {
        480: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 10,
        },
      },
    });
  </script>
  
  @include('partials.footer')