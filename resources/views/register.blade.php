<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/img/logo.png">
  <title>
    Louella's Sweet Food Products
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="css\style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  



</head>

<body>
  <x-message />
  <header>
      <nav class="navbar fixed navbar-expand-md mr-5 fixed-top mt-2">
          <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="logo">
          <i class="navbar-toggler fa-solid fa-bars" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          </i>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav text-center justify-content-end">
              <li class="nav-item mx-3">
                <a class="nav-link nav-btn" href="#home">Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link nav-btn" href="#product">Products</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link nav-btn" href="#about">About</a>
              </li>
              <li class="nav-item mx-3 ">
                <button class="btn nav-btn-contact px-3">
                  <a class="nav-link nav-btn-con mt-0" href="#">Contact Us</a>
                </button>
              </li>
              </ul>
          </div>
      </nav>
  </header>
<div class="page-container">
    
  <Section id="home">
    <div class="container-fluid d-flex flex-row-reverse search-container" >
      <div class="row">
        <div class="col-md-3">
          <div class="">
            <form class="form-inline search-container">
              <div class="input-group search-group">
                <input class="form-control search-input mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-outline-success search-btn my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      <div class="container mt-4 text-center">
          <div class="row">
              <div class="col-md-3 card-container">

                <!-- signup form -->
                <form action="/add_user" method="POST" role="form" class="text-start" id="reg_form">
                    @csrf 
                <div class="card z-index-0 fadeIn3 fadeInBottom" id="signup-form">    
                  <h4 class="font-weight-bolder text-center mt-3">Sign Up</h4>
                  <div class="card-body">
                    
                      {{--  Cross-site Request Forgery --}}
                      <div class="input-group input-group-outline mb-2">
                        <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="form-control" value={{old('firstname')}}>
                      </div>
                      @error('firstname')
                        <p class="text-danger">
                          <small> {{$message}} </small>
                        </p>
                      @enderror
                      <div class="input-group input-group-outline mb-2">
                        <input placeholder="Middlename" name="middlename" id="middlename" type="text" class="form-control" value={{old('middlename')}}>
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
                      @error('Birthdate')
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
                        <button type="button" class="btn signup-btn w-100 my-2 mb-1" onclick="showSetupAddForm();">Next</button>
                      </div>
                      <p class="mt-3 text-sm text-center mb-0">
                        Already have an account?
                        <a href="/" class="login-link register-link text-bold mb-0"><br />Log in</a>
                      </p>
                  </div>
                </div>

                <!-- set up address form -->

                <div class="card z-index-0 fadeIn3 fadeInBottom " id="setupadd-form" hidden>    
                  <h4 class="font-weight-bolder text-center mt-4">Setup Address</h4>
                  <div class="card-body">
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
                        <input placeholder="Region" type="text" class="form-control" name="region_text" id="region-text">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <input placeholder="Country" type="text" class="form-control" name="country_text" id="country-text">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <input  placeholder="Zip Code" type="text" class="form-control" name="zip_code" id="zip_code-text">
                      </div>
                      <input type="hidden" id="address" name="address">
                      <input type="hidden" id="access" name="access" value="0">
                      <div class="text-center">
                        <button type="submit" class="btn setupadd-btn w-100 my-4 mb-1" onclick="showOtpVerifyForm();">Next</button>
                        <button type="button" class="btn cancel-btn w-100 my-1 mb-1" onclick="showRegForm();">Back</button>
                      </div>
                  </div>
                </div>
            </form>
              </div>
              <div class="col-md-9 text-center mt-1 title-container">
                  <H4 class="lsfp">Louella's</H4>
                  <H1 class="text-bold lsfp">Sweet Food Products</H1>
                  <p class="lsfp-tagline">Every Bite is Delight!</p>
                  <p class="lsfp-desc">At Louella's Sweet Food Products, we take pride in sourcing only the highest quality ingredients for our chocolate, ensuring that every piece is a true indulgence for your taste buds.</p>
                  <div class="explore-btn-container mt-3 col-md-9">
                    <a href="#product"><button class="btn explore-btn mt-5"> Explore Now <span><i class="fa-solid fa-arrow-right"></i></span></button></a>
                  </div>
              </div>
          </div>
      </div>
  </Section>

  {{-- Product Section --}}

  <section id="product" style="height: 100vh; width: 100vw;">
    <div class="container-fluid d-flex flex-row-reverse search-container" >
      <div class="row">
        <div class="col-md-3">
          <div class="">
            <form class="form-inline search-container">
              <div class="input-group  search-group">
                <input class="form-control search-input mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-outline-success search-btn my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="text-center container py-5">
        <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>
    
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5><span class="badge bg-primary ms-2">New</span></h5>
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5><span class="badge bg-success ms-2">Eco</span></h5>
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/shoes%20(3).webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(23).webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5>
                        <span class="badge bg-success ms-2">Eco</span><span
                          class="badge bg-danger ms-2">-10%</span>
                      </h5>
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100"></div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">$61.99</h6>
              </div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                  class="w-100" />
                <a href="#!">
                  <div class="mask">
                    <div class="d-flex justify-content-start align-items-end h-100">
                      <h5>
                        <span class="badge bg-primary ms-2">New</span><span
                          class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-10%</span>
                      </h5>
                    </div>
                  </div>
                  <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </div>
                </a>
              </div>
              <div class="card-body">
                <a href="" class="text-reset">
                  <h5 class="card-title mb-3">Product name</h5>
                </a>
                <a href="" class="text-reset">
                  <p>Category</p>
                </a>
                <h6 class="mb-3">
                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- about --}}
  <section id="about" style="height: 100vh; width: 100vw;">
    <div>
        <h1>hello, page 3 test</h1>
    </div>
  </section>
</div>
    
    <script type="text/javascript">

    $('#reg_form').change(function(){
        let add = document.getElementById('address');
        let street = document.getElementById('street-text').value;
        let barangay = document.getElementById('barangay-text').value;
        let city = document.getElementById('city-text').value;
        let province = document.getElementById('province-text').value;
        let region = document.getElementById('region-text').value;
        let country = document.getElementById('country-text').value;
        let zip = document.getElementById('zip_code-text').value;
        

        let address = street.concat(', ', barangay, ', ', city, ', ' ,province, ', ', region, ', ', country, ', ', zip);

        add.value = address;
        console.log(add.value);
    });
    
    function showRegForm(){
        document.getElementById('signup-form').removeAttribute('hidden');
        document.getElementById('setupadd-form').hidden = true;
    }   
    function showSetupAddForm(){
        document.getElementById('signup-form').hidden = true;
        document.getElementById('setupadd-form').removeAttribute('hidden');
    }
    
    // datepicker
    $('#birthdate').datepicker({
       endDate: '-16y'
    });
  </script>
    
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-dashboard.min.js?v=3.0.5"></script>
  <script src="https://kit.fontawesome.com/71aac4163c.js" crossorigin="anonymous"></script>
  
</body>

</html>