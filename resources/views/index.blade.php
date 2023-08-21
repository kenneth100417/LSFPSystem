
@include('partials.header')
<x-message />
          
          <!-- log in form -->
          <div class="card fadeIn3 fadeInBottom mt-n3 m-1" id="login-form">    
            <h4 class="font-weight-bolder text-center mt-4 card-title">Sign In</h4>
            <div class="card-body pb-n2">
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
                  <a class="login-link" href="#" data-bs-toggle="modal" data-bs-target="#changePassword">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn login-btn w-100 my-2 mb-1">Sign in</button>
                  
                </div>
                <p class="mt-4 text-sm text-center">
                  Don't have an account?
                  <a href="/register" class="login-link register-link text-bold"><br />Register</a>
                </p>
              </form>
            </div>
          </div>
        </div>

      {{-- change pass modal --}}
        {{-- <div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Recover Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-start">
                <form action="{{url('/change-password')}}" method="POST">
                  @csrf
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="email">Email</label>
                        <input name="email" class="form-control change-pass-input" type="email" placeholder="Email">
                      </div> 
                      <div class="col-lg-6">
                        <label for="email">Mobile number</label>
                        <input name="current-password" class="form-control change-pass-input" type="password" placeholder="Current Password">
                      </div>
                      <div class="col-lg-6 mt-4">
                        <label for="email">New Password</label>
                        <input name="password" class="form-control change-pass-input" type="password" placeholder="New Password">
                      </div>
                      <div class="col-lg-6 mt-4">
                        <label for="email">Confirm New Password</label>
                        <input name="password_confirmation" class="form-control change-pass-input" type="password" placeholder="Confirm New Password">
                      </div> 
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Change Password</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div> --}}

  @include('partials.sections')

  
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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


    //   // custom swiper

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
  @if (session('success'))
      
  <script type="text/javascript">

      setTimeout(message, 1000);

      function message(){
          Swal.fire(
                  'Updated Successfully!',
                  'Your profile has been Updated!',
                  'success'
              )
      }   
  </script>
@endif     

@if (session('error'))
<script type="text/javascript">

  setTimeout(message, 1000);

  function message(){t
      Swal.fire(
              'Update Failed!',
              'An error occured!',
              'error'
          )
  }   
</script>
@endif
  
  @include('partials.footer')