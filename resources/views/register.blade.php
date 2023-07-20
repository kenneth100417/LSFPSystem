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
          <form action="/add_user" method="POST" role="form" class="text-start" id="reg_form">
            @csrf {{--  Cross-site Request Forgery --}}
            <div class="card z-index-0 fadeIn3 fadeInBottom" id="signup-form">    
              <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
              <h6 class="font-weight-bolder text-start mx-4">Personal Information</h6>
              <div class="card-body reg-card">
                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="form-control" value={{old('firstname')}}>
                </div>
                @error('firstname')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2">
                  <input placeholder="Middlename (Optional)" name="middlename" id="middlename" type="text" class="form-control" value={{old('middlename')}}>
                </div>
                @error('middlename')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2" >
                  <input placeholder="Lastname" name="lastname" id="lastname" type="text" class="form-control" value={{old('lastname')}}>
                </div>
                @error('lastname')
                  <p class="text-danger">
                    <small> {{$message}} </small>
                  </p>
                @enderror

                <div class="input-group input-group-outline mb-2 date" id="datepicker">
                  <input placeholder="Birthdate" name="birthdate" id="birthdate" type="text" class="form-control" value={{old('birthdate')}}>
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
                  <input placeholder="Mobile Number" name="mobile_number" id="mobile_number" type="text" class="form-control" value={{old('mobile_number')}}>
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
              <div class="card z-index-0 fadeIn3 fadeInBottom " id="setupadd-form" hidden>    
                <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                <h6 class="font-weight-bolder text-start mx-4">Setup Address</h6>
                <div class="card-body reg-card">
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Street/Purok" type="text" class="form-control" name="street" id="street-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Barangay" type="text" class="form-control" name="barangay_text" id="barangay-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="City/Municipality" type="text" class="form-control" name="city_text" id="city-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="Province" type="text" class="form-control" name="province_text" id="province-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input placeholder="Country" type="text" class="form-control" name="country_text" id="country-text">
                  </div>
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Zip Code" type="text" class="form-control" name="zip_code" id="zip_code-text">
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
              <div class="card z-index-0 fadeIn3 fadeInBottom" id="account-form" hidden>    
                <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                <h6 class="font-weight-bolder text-start mx-4">Account Information</h6>
                <div class="card-body reg-card">
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Email" name="email" id="email1" type="email" class="form-control" value={{old('email')}}>
                  </div>
                  @error('email')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror

                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Password" name="password" id="password1" type="Password" class="form-control" >
                  </div>
                  @error('password')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror
                  
                  <div class="input-group input-group-outline mb-2">
                    <input  placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" type="Password" class="form-control">
                  </div>
                  @error('password_confirmation')
                    <p class="text-danger">
                      <small> {{$message}} </small>
                    </p>
                  @enderror

                  <div class="text-center">
                    <button type="submit" class="btn signup-btn w-100 my-2 mb-1">Next</button>
                    <button type="button" class="btn cancel-btn w-100 my-1 mb-1" onclick="showSetupAddForm();">Back</button>
                  </div>
                </div>
              </div>
          </form>
        </div>
        

  @include('partials.sections')

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
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').removeAttribute('hidden');
        document.getElementById('account-form').hidden = true;
    }
    function showSetupAccForm(){
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').hidden = true;
        document.getElementById('account-form').removeAttribute('hidden');
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