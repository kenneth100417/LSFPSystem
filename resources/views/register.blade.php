@include('partials.header')
          @if (session('success'))
          <div class="alert alert-success" role="alert"> {{session('success')}} 
          </div>
          @endif

          @if (session('error'))
          <div class="alert alert-danger" role="alert"> {{session('error')}} 
          </div>
          @endif

          {{-- Setup Personal Info --}}
          <form action="/add_user" method="POST" role="form" class="text-start" id="reg_form" name="reg_form">
            @csrf {{--  Cross-site Request Forgery --}}
            <div class="card z-index-0 fadeIn3 fadeInBottom mt-n5 " id="signup-form">    
              <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
              <h6 class="font-weight-bolder text-start mx-4 mb-n3">Personal Information</h6>
              <div class="card-body reg-card">
                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="form-control" value="{{old('firstname')}}" required>
                </div>
                @error('firstname')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Middlename (Optional)" name="middlename" id="middlename" type="text" class="form-control" value="{{old('middlename')}}" >
                </div>
                @error('middlename')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2" >
                  <input placeholder="Lastname" name="lastname" id="lastname" type="text" class="form-control" value="{{old('lastname')}}" required>
                </div>
                @error('lastname')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2 date" id="datepicker">
                  <input placeholder="Birthdate" name="birthdate" id="birthdate" type="text" class="form-control" value="{{old('birthdate')}}" required>
                  <span class="input-group-append">
                    <span class="input-group-text mx-2">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </span>
                </div>
                @error('birthdate')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Mobile Number" name="mobile_number" id="mobile_number" type="text" class="form-control" value="{{old('mobile_number')}}" required>
                </div>
                @error('mobile_number')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="form-btn text-center">
                  <button type="button" class="btn signup-btn w-100 my-2 mb-1" onclick="showSetupAddForm();">Next</button>
                </div>
                <p class="mt-3 text-sm text-center mb-0">
                  Already have an account?
                  <a href="/" class="login-link register-link text-bold mb-0"><br />Log in</a>
                </p>
                </div>
              </div>

              {{-- Setup Address --}}
              <div class="card z-index-0 fadeIn3 fadeInBottom  register-add-card" id="setupadd-form" hidden>    
                <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                <h6 class="font-weight-bolder text-start mx-4 mb-n3">Setup Address</h6>
                <div class="card-body reg-card">
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Street/Purok" type="text" class="form-control" name="street_text" id="street-text" value="{{old('street')}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Barangay" type="text" class="form-control" name="barangay_text" id="barangay-text" value="{{old('barangay-text')}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="City/Municipality" type="text" class="form-control" name="city_text" id="city-text" value="{{old('city-text')}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="Province" type="text" class="form-control" name="province_text" id="province-text" value="{{old('province-text')}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="Country" type="text" class="form-control" name="country_text" id="country-text" value="{{old('country-text')}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Zip Code" type="text" class="form-control" name="zip_code_text" id="zip_code-text" value="{{old('zip_code-text')}}" required>
                  </div>
                  <input type="hidden" id="address" name="address">
                  <input type="hidden" id="access" name="access" value="0">
                  <input type="hidden" id="photo" name="photo" value="/img/Profile_pic/Profile_temp.png">
                  <div class="text-center">
                    <button type="button" class="btn setupadd-btn w-100 my-2 mb-1" onclick="showSetupAccForm();">Next</button>
                    <button type="button" class="btn cancel-btn w-100 my-1 mb-1" onclick="showRegForm();">Back</button>
                  </div>
                </div>
              </div>

              {{-- Setup Account Info --}}
              <div class="card z-index-0 fadeIn3 fadeInBottom mt-n5" id="account-form"  hidden>    
                <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                <h6 class="font-weight-bolder text-start mx-4 mb-n3">Account Information</h6>
                <div class="card-body reg-card">
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Email" name="email" id="email1" type="email" class="form-control" value="{{old('email')}}" required>
                  </div>
                  @error('email')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror

                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Password" name="password" id="regPassword" type="password" class="form-control" required>
                    <div class="align-items-center" style="position: absolute; right: 10px; top: 7px;">
                      <a id="regEye" href=""><i class="fa fa-eye-slash" aria-hidden="true" id="eyeIcon"></i></a>
                    </div>
                  </div>
                  @error('password')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror
                  
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" type="Password" class="form-control" required>
                  </div>
                  @error('password_confirmation')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror

                  <div class="text-center">
                    <button type="button" class="btn signup-btn w-100 my-2 mb-1" onclick="verifySubmit();">Next</button>
                    <button type="button" class="btn cancel-btn w-100 my-1 mb-1" onclick="showSetupAddForm();">Back</button>
                    <small class="mt-1">By clicking next, you agree to our <a href="javascript:void(0)" data-toggle="modal" data-target="#termsAndConditions">Terms & Conditions</a>.</small>
                  </div>
                </div>
              </div>
          </form>
        </div>
        

  @include('partials.sections')
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script>
          $("#regEye").on('click', function(event) {
            event.preventDefault();
              if($('#regPassword').attr("type") == "text"){
                  $('#regPassword').attr('type', 'password');
                  $('#eyeIcon').addClass( "fa-eye-slash" );
                  $('#eyeIcon').removeClass( "fa-eye" );
              }else if($('#regPassword').attr("type") == "password"){
                  $('#regPassword').attr('type', 'text');
                  $('#eyeIcon').removeClass( "fa-eye-slash" );
                  $('#eyeIcon').addClass( "fa-eye" );
              }
          });

            if(window.screen.width < 767){
              document.getElementById('main').style.display = "none";
              document.getElementById('product').style.display = "none";
              document.getElementById('top-products').style.display = "none";
              document.getElementById('about').style.display = "none";
              document.getElementById('contact').style.display = "none";
              document.getElementById('search').style.display = "none";
            }
        </script>
  <script type="text/javascript">
    
    


    $('#spanYear').html(new Date().getFullYear());
    $('#reg_form').change(function(){
        let add = document.getElementById('address');
        let street = document.getElementById('street-text').value;
        let barangay = document.getElementById('barangay-text').value;
        let city = document.getElementById('city-text').value;
        let province = document.getElementById('province-text').value;
        let country = document.getElementById('country-text').value;
        let zip = document.getElementById('zip_code-text').value;
        

        let address = street.concat(', ', barangay, ', ', city, ', ' ,province, ', ', country, ', ', zip);

        add.value = address;
    });
    
    function showRegForm(){
        document.getElementById('signup-form').removeAttribute('hidden');
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('account-form').hidden = true;
    }   

    function showSetupAddForm(){

        var firstname = document.reg_form.firstname.value;
        var lastname = document.reg_form.lastname.value;
        var birthdate = document.reg_form.birthdate.value;
        var mobile_number = document.reg_form.mobile_number.value;

        if (firstname === "" || lastname === "" || birthdate === "" || mobile_number === ""){
          Swal.fire({
            title: 'Ooops!',
            text: "Please make sure to fill the needed information.",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
              showRegForm();
            }
          })
        }



        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').removeAttribute('hidden');
        document.getElementById('account-form').hidden = true;
    }

    function showSetupAccForm(){
        var street = document.reg_form.street_text.value;
        var brgy = document.reg_form.barangay_text.value;
        var city = document.reg_form.city_text.value;
        var province = document.reg_form.province_text.value;
        var country = document.reg_form.country_text.value;
        var zip = document.reg_form.zip_code_text.value;

        
        if (street === "" || brgy === "" || city === "" || province === "" || country === "" || zip === ""){
          Swal.fire({
            title: 'Ooops!',
            text: "Please make sure to fill the needed information.",
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false,
            allowEscapeKey: false
          }).then((result) => {
            if (result.isConfirmed) {
              showSetupAddForm();
            }
          })
        }


        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('account-form').removeAttribute('hidden');
    }

    function verifySubmit(){
      var email = document.reg_form.email.value;
      var pass = document.reg_form.password.value;
      var passConfirm = document.reg_form.password_confirmation.value;

      if(email === "" || pass === "" || passConfirm === ""){
        Swal.fire({
            title: 'Ooops!',
            text: "Please fill up the required information.",
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
      }else if(pass != passConfirm ){
        Swal.fire({
            title: 'Ooops!',
            text: "Password Confirmation does not match.",
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
        document.getElementById('reg_form').submit();
      }
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