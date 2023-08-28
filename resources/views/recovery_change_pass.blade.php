
@include('partials.header')
<x-message />
          
          <!-- log in form -->
          <div class="card fadeIn3 fadeInBottom mt-n3 m-1" id="login-form">    
            <h4 class="font-weight-bolder text-center mt-4 card-title">Create New Password</h4>
            <p class="text-sm text-danger mx-3">(Create a strong password with atleast 6 characters and is combination of letters, numbers and symbols.)</p>
            <div class="card-body pb-n1">
              <form action="{{ url('/create-new-password/'.request()->segment(2) ) }}" method="POST" role="form" class="text-start" name="new_pass_form" id="new_pass_form">

                @csrf
                @error('email')
                  <p class="text-danger text-center">
                    <small> {{$message}} </small>
                  </p>
                @enderror
                <div class="input-group input-group-outline mb-1">
                  <input placeholder="New Password" name="password" type="password" class="form-control" value="" >
                </div>
                <div class="input-group input-group-outline mt-2">
                  <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm New Password">
                </div>
                
                <div class="text-center mt-3">
                  <button type="button" class="btn login-btn w-100 my-2 mb-1" onclick="onSubmit();">Submit</button>
                  <a type="button" class="btn cancel-btn w-100 my-1 mb-1" href="/">Cancel Recovery</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>


  @include('partials.sections')

  
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script type="text/javascript">

  // check log in form

  function onSubmit(){
    var pass = document.new_pass_form.password.value;
    var confirmPass = document.new_pass_form.password_confirmation.value;

    if(pass === ""){
      Swal.fire({
            title: 'Ooops!',
            text: "Password is required.",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
              showSetupAccForm();
            }
          })
    }else if(confirmPass === ""){
      Swal.fire({
            title: 'Ooops!',
            text: "Please confirm your new password.",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
              showSetupAccForm();
            }
          })
    }else if(confirmPass !== pass){
      Swal.fire({
            title: 'Ooops!',
            text: "Password confirmation does not match.",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
              showSetupAccForm();
            }
          })
    }else{
        document.getElementById('new_pass_form').submit();
      }
  }
  









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
        Swal.fire({
            title: 'Congratulations!',
            text: "Your account has been recovered. Sign in now to check latest updates.",
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sign In',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "{{url('/')}}";
            }
          })
      }   
  </script>
@endif     

@if (session('error'))
<script type="text/javascript">

  setTimeout(message, 1000);

  function message(){t
    Swal.fire({
            title: 'Ooops!',
            text: "An Error occured. Try again later.",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{url('/forgot-password')}}";
            }
          })
  }   
</script>
@endif

  
  @include('partials.footer')