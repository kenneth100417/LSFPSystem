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
</head>

<body>
  <header>
      <nav class="navbar fixed navbar-expand-md mr-5">
          <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="logo">
          <i class="navbar-toggler fa-solid fa-bars" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          </i>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav text-center justify-content-end">
              <li class="nav-item mx-3">
                <a class="nav-link nav-btn" href="#">Products</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link nav-btn" href="#">About</a>
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
    <div class="container-fluid d-flex flex-row-reverse">
      <div class="row">
        <div class="col-md-3">
          <div class="mt-3 mx-5">
            <form class="form-inline search-container ">
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
  <Section>
      <div class="container mt-4 text-center">
          <div class="row">
              <div class="col-md-3">
                <!-- log in form -->
                <div class="card z-index-0 fadeIn3 fadeInBottom mt-3 m-2" id="login-form">    
                    <h4 class="font-weight-bolder text-center mt-4">Sign In</h4>
                  <div class="card-body">
                    <form role="form" class="text-start">
                      <div class="input-group input-group-outline my-2">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control">
                      </div>
                      <div class="text-end mb-2">
                        <a class="login-link" href="">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn login-btn w-100 my-2 mb-1">Sign in</button>
                      </div>
                      <p class="mt-3 text-sm text-center">
                        Don't have an account?
                        <a href="#" class="login-link register-link text-bold" onclick="showRegForm()"><br />Register</a>
                      </p>
                    </form>
                  </div>
                </div>

                <!-- signup form -->
                <div class="card z-index-0 fadeIn3 fadeInBottom" id="signup-form" hidden>    
                  <h4 class="font-weight-bolder text-center mt-4">Sign Up</h4>
                  <div class="card-body">
                    <form role="form" class="text-start">
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Firstname</label>
                        <input type="text" class="form-control" required>
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Midlename</label>
                        <input type="text" class="form-control" required>
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Lastname</label>
                        <input type="text" class="form-control" required>
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Birthdate</label>
                        <input type="text" class="form-control" required>
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Mobilenumber</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" required>
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Password</label>
                        <input type="Password" class="form-control" required>
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn login-btn w-100 my-2 mb-1" onclick="showSetupAddForm();">Next</button>
                      </div>
                      <p class="mt-3 text-sm text-center mb-0">
                        Already have an account?
                        <a href="#" class="login-link register-link text-bold mb-0" onclick="showLogInForm();"><br />Log in</a>
                      </p>
                    </form>
                  </div>
                </div>

                <!-- set up address form -->

                <div class="card z-index-0 fadeIn3 fadeInBottom mt-0 m-" id="setupadd-form" hidden>    
                  <h4 class="font-weight-bolder text-center mt-4">Setup Address</h4>
                  <div class="card-body">
                    <form role="form" class="text-start">
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Street</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Barangay</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Municipality</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Province</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Zip Code</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn login-btn w-100 my-4 mb-1" onclick="showOtpVerifyForm();">Next</button>
                      </div>
                      <p class="mt-3 text-sm text-center">
                        Already have an account?
                        <a href="#" class="login-link register-link text-bold" onclick="showLogInForm();"><br />Log in</a>
                      </p>
                    </form>
                  </div>
                </div>

                <!-- verify OTP Form -->
                <div class="card z-index-0 fadeIn3 fadeInBottom mt-5 m-2" id="otpverify-form" hidden>    
                  <h4 class="font-weight-bolder text-center mt-4">We need to verify<br /> if it's you!</h4>
                  <div class="card-body">
                    <form role="form" class="text-start">
                      <p class="text-center mt-0" style="font-size: 14px;">A 6-digit OTP has been sent to your mobile number {{}}.</p>
                      <div class="input-group input-group-outline mb-2">
                        <label class="form-label">Enter OTP Code</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn login-btn w-100 my-4 mb-1" onclick="verify();">Verify</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-9 text-center mt-1">
                  <H4 class="lsfp">Louella's</H4>
                  <H1 class="text-bold lsfp">Sweet Food Products</H1>
                  <p class="lsfp">Louella's Sweet Food Products, Producktong Bicolano!</p>
                  <div class="explore-btn-container mt-5 col-md-9">
                    <button class="btn explore-btn mt-5">Explore Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
                  </div>
              </div>
          </div>
      </div>
  </Section>
  <script type="text/javascript">
    function showRegForm(){
      console.log('clicked');
      document.getElementById('login-form').hidden = true;
      document.getElementById('signup-form').removeAttribute('hidden');
    }
    function showLogInForm(){
      document.getElementById('login-form').removeAttribute('hidden');
      document.getElementById('signup-form').hidden = true;
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
  </script>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.5"></script>
  <script src="https://kit.fontawesome.com/71aac4163c.js" crossorigin="anonymous"></script>
  
</body>

</html>