
@include('partials.header')
<x-message />
          
          <!-- log in form -->
          <div class="card fadeIn3 fadeInBottom mt-n3 m-1" id="login-form">    
            <h4 class="font-weight-bolder text-center mt-4 card-title">Recover Account</h4>
            <p class="text-sm text-danger mx-3">(Please provide your email and mobile number to verify your identity.)</p>
            <div class="card-body pb-n1">
              <form action="/forgot-password-verify" method="POST" role="form" class="text-start" name="forgot_pass_form" id="forgot_pass_form">

                @csrf
                @error('email')
                  <p class="text-danger text-center">
                    <small> {{$message}} </small>
                  </p>
                @enderror
                <div class="input-group input-group-outline mb-1">
                  <input placeholder="Email" name="email" type="email" class="form-control" value="" >
                </div>
                <div class="input-group input-group-outline mt-2">
                  <input name="mobile_number" type="text" class="form-control" placeholder="Mobile Number">
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
    var email = document.forgot_pass_form.email.value;
    var num = document.forgot_pass_form.mobile_number.value;

    if(email === ""){
      Swal.fire({
            title: 'Ooops!',
            text: "Email is required.",
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
    }else if(num === ""){
      Swal.fire({
            title: 'Ooops!',
            text: "Mobile number is required.",
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
        document.getElementById('forgot_pass_form').submit();
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

@error('error')
<script>
  Swal.fire(
              'Ooops!',
              '{{$message}}',
              'error'
          )
</script>
@enderror
  @include('partials.footer')