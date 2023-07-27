
@include('partials.header')

          <!-- log in form -->
          <div class="card fadeIn3 fadeInBottom mt-3 m-1" id="login-form">    
            <h4 class="font-weight-bolder text-center mt-4 card-title">Sign In</h4>
            <div class="card-body">
              <form action="/login" method="POST" role="form" class="text-start">

                @csrf
                @error('email')
                  <p class="text-danger text-center">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-1">
                  <input placeholder="Email" name="email" type="email" class="form-control" value={{old('email')}} >
                </div>
                <div class="input-group input-group-outline mt-2">
                  <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="text-end mb-2">
                  <a class="login-link" href="">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn login-btn w-100 my-2 mb-1">Sign in</button>
                </div>
                <p class="mt-3 text-sm text-center">
                  Don't have an account?
                  <a href="/register" class="login-link register-link text-bold"><br />Register</a>
                </p>
              </form>
            </div>
          </div>
        </div>

  @include('partials.sections')

  
  
  <script type="text/javascript">
    $('#spanYear').html(new Date().getFullYear());
    function showRegForm(){
      console.log('clicked');
      document.getElementById('login-form').hidden = true;
      document.getElementById('signup-form').removeAttribute('hidden');
      document.getElementById('setupadd-form').hidden = true;
      document.getElementById('otpverify-form').hidden = true;
    }
    function showLogInForm(){
      document.getElementById('login-form').removeAttribute('hidden');
      document.getElementById('signup-form').hidden = true;
      document.getElementById('setupadd-form').hidden = true;
      document.getElementById('otpverify-form').hidden = true;
    }
    function showSetupAddForm(){
      document.getElementById('login-form').hidden = true;
      document.getElementById('signup-form').hidden = true;
      document.getElementById('setupadd-form').removeAttribute('hidden');
      document.getElementById('otpverify-form').hidden = true;
    }
    function showOtpVerifyForm(){
      document.getElementById('login-form').hidden = true;
      document.getElementById('signup-form').hidden = true;
      document.getElementById('setupadd-form').hidden = true;
      document.getElementById('otpverify-form').removeAttribute('hidden');
    }
    // datepicker
    $('#birthdate').datepicker({
       endDate: '-16y'
      });


      // custom swiper

      const swiperEl1 = document.getElementById('swiper1');
      const swiperEl2 = document.getElementById('swiper2');

    const params = {
      injectStyles: [`
      .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        text-align: center;
        line-height: 20px;
        font-size: 12px;
        color: #000;
        opacity: 1;
        background: rgba(0, 0, 0, 0.2);
      }

      .swiper-pagination-bullet-active {
        color: #fff;
        background: #178c3a;
        width: 12px;
        height: 12px;
      }

      .swiper-pagination{
        margin-top: 100px;
      }
      `],
      pagination: {
        clickable: true,
      },
    }

    Object.assign(swiperEl1, params);
    Object.assign(swiperEl2, params);

    swiperEl1.initialize();
    swiperEl2.initialize();

    // preloader
  var loader = document.getElementById('preloader');

  window.addEventListener("load", function(){
      loader.style.display = "none";
  });

  </script>
  
  
  @include('partials.footer')