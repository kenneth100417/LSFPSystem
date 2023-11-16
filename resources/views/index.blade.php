
@include('partials.header')
<x-message />
          
  <!-- log in form -->
  <div class="card fadeIn3 fadeInBottom mt-n3 m-1" id="login-form">    
    <h4 class="font-weight-bolder text-center mt-4 card-title">Sign In</h4>
    <div class="card-body pb-n2">
      <form action="/login" method="POST" role="form" class="text-start" name="login_form" id="login_form">
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
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <div class="align-items-center" style="position: absolute; right: 10px; top: 7px;">
          <a id="eye" href=""><i class="fa fa-eye-slash" aria-hidden="true" id="eye-icon"></i></a>
        </div>
      </div>
      <div class="text-end mb-2">
        <a class="login-link" href="/forgot-password" >Forgot Password?</a>
      </div>
      <div class="text-center">
        <button type="button" class="btn login-btn w-100 my-2 mb-1" onclick="onSubmit();">Sign in</button>
      </div>
      <p class="mt-4 text-sm text-center">
        Don't have an account?
        <a href="/register" class="login-link register-link text-bold"><br />Register</a>
      </p>
      </form>
    </div>
  </div>
</div>

@include('partials.sections')

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script type="text/javascript">

  // check log in form
  function onSubmit(){
    var email = document.login_form.email.value;
    var pass = document.login_form.password.value;

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
    }else if(pass === ""){
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
    }else{
        document.getElementById('login_form').submit();
      }
  }
  
  function openProduct(){
    Swal.fire(
      'Acount is required!',
      'Please log in to order products.',
      'warning'
    )
  }

  $("#eye").on('click', function(event) {
    event.preventDefault();
    if($('#password').attr("type") == "text"){
      $('#password').attr('type', 'password');
      $('#eye-icon').addClass( "fa-eye-slash" );
      $('#eye-icon').removeClass( "fa-eye" );
    }else if($('#password').attr("type") == "password"){
      $('#password').attr('type', 'text');
      $('#eye-icon').removeClass( "fa-eye-slash" );
      $('#eye-icon').addClass( "fa-eye" );
    }
    });

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
      endDate: '-18y'
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
@error('error')
  <script>
    Swal.fire(
      'Ooops!',
      'An Error Occured.',
      'error'
    )
  </script>
@enderror

@if(session()->has('emailSent'))
  <script>
    Swal.fire(
      'Sent!',
      'Your email has been sent.',
      'success'
    )
  </script>
@endif
  
@include('partials.footer')