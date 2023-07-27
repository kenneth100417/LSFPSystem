@include('components.user-components.header')

<body class="g-sidenav-show  bg-gray-100">
    
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
    <div id="preloader"></div>  
    <div class="sidenav-header d-flex justify-content-start align-items-center mx-3">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

        <button class="profile-img-container d-flex justify-content-start align-items-center">
            <img src="{{url(auth()->user()->photo)}}" class=" profile-img" alt="profile">
        </button>
        <div class="text-start p-0 profile-name-email align-items-center mx-1">
            <h6 class="ms-1 font-weight-bold text-dark user-name">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h6>
            <p class="ms-1 text-dark user-email px-0">{{auth()->user()->email;}}</p>
        </div>
    </div>


  <hr class="horizontal mt-0 mb-2 nav-horizontal mx-3">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
        
            <li class="nav-item ">
                <a class="nav-link text-white tab " href="/user_dashboard">
                    
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-house w-100"></i>
                    </div>

                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab " href="/user_orders">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-cart-shopping w-100"></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Orders</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white tab active" href="/user_profile">
                    
                    <div class="text-success text-center me-2 d-flex align-items-center justify-content-center icon">
                        <i class="fa-solid fa-user "></i>
                    </div>
                    
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
        </ul>

            
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <form action="/logout" method="POST">
            @csrf
            <div class="mx-3 text-end">
                <button class="btn text-white bg-danger mt-4 w-50 nav-logout" href="" type="button" onclick="logout();">Log Out</button>
            </div>
        </form>
    </div>
  
</aside>

<main class="main-content border-radius-lg ">
        <!-- Navbar -->

    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1">
            
            <img src="/img/logo.png" alt="Louella's Sweet Food Products" class="user-dash-logo">
            <x-message />
            
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    
                    <div class="search">
                        <input placeholder="Type to search here..." type="text" class="form-control search-input">
                    </div>
                    
                </div>
                <ul class="navbar-nav  justify-content-end">
                    
                    
                    <li class="nav-item d-flex align-items-center">
                        <a href="" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-cart-shopping me-sm-1 mx-2 nav-cart"></i>
                        </a>
                    </li>
                    
                    <li class="nav-item d-flex align-items-center">
                    <a href="" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa fa-bell me-sm-1 mx-2 nav-bell"></i>
                    </a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <a href="/user_profile" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1 mx-2 nav-user"></i>
                        </a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <form action="/logout" method="POST" id="logout" >
                            @csrf
                            <button  type="button" class="logout-btn" onclick="logout();">
                                <i class="fa fa-power-off mx-2 nav-power"></i>
                            </button>
                        </form>
                    </li>

                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body mx-2 " id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>   

   <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-4 mt-5">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 h-25">
                          <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 profile-card-header">
                            <div class="text-end position-absolute col-md-12">
                                <a href="" data-toggle="modal" data-target="#editProfile">
                                    <i class="profile-edit-icon fa-regular fa-pen-to-square mx-4"></i>
                                </a>
                            </div>
                            <div class="profile-header-content position-absolute z-index-5 d-flex justify-content-start align-items-center ms-3">
                                <div class="profile-img-container-lg">
                                    <img src="{{auth()->user()->photo}}" class="profile-img" alt="profile">
                                </div>
                                <div class="profile-text-container-lg ps-3">
                                    <h4 class="text-name text-white text-capitalize ">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h4>
                                    <p class="text-email text-success">{{auth()->user()->email;}}</p>
                                </div>
                            </div>
                          </div>
                        </div>
                        
                        <div class="card-body px-0 pb-2 mt-5 mx-5 profile">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <h5 class="mb-0">Profile Information</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="firsname">Firstname</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->firstname;}}" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="firsname">Middlename</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->middlename;}}" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="firsname">Lastname</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->lastname;}}" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="firsname">Birthdate</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->birthdate;}}" disabled>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mt-5">
                                        <h5 class="mb-0">Address</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="firsname">Home Address</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->address;}}" disabled>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-12 mt-5">
                                        <h5 class="mb-0">Account Information</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firsname">Email</label>
                                        <input class="form-control profile-input-form" type="email" value="{{auth()->user()->email;}}" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firsname">Mobile Number</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->mobile_number;}}" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firsname">Password</label>
                                        <input class="form-control profile-input-form" type="password" value="******" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
   </section>
  
    <!-- Modal -->
    <div class="modal fade modal-profile" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editProfileTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-body">
                <form action="/user_update"  method="POST" id="profile-update-form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                <div class="card my-4 mt-5 modal-card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 h-25">
                      <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 profile-card-header">
                        <div class="profile-header-content position-absolute z-index-5 d-flex justify-content-start align-items-center ms-3">
                            <div class="profile-img-container-lg">
                                <img type="image" src="{{auth()->user()->photo}}" class="profile-img edit-photo" alt="profile"  style="cursor: pointer;" id="profile-img">

                                <span class="profile-upload-icon" id="profile-pic-upload"><i class="fa-solid fa-camera"></i><br /><p style="font-size: 1vw;">Change Profile</p></span>

                                <input type="file" name="profile_pic" id="profile-pic" style="display: none; " accept="image/x-png,image/jpeg">
                                
                            </div>
                            <div class="profile-text-container-lg ps-3">
                                <h4 class="text-name text-white text-capitalize ">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h4>
                                <p class="text-email text-success">{{auth()->user()->email;}}</p>
                            </div>
                            
                        </div>
                      </div>
                    </div>
                    
                    
                    <div class="card-body px-0 pb-2 mt-5 mx-5 text-sm profile">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h5 class="mb-0">Profile Information</h5>
                                </div>
                                <div class="col-md-3">
                                    <label for="firstname">Firstname</label>
                                    <input name="firstname" class="form-control profile-input-form" type="text" value="{{auth()->user()->firstname;}}" placeholder="Firstname">
                                </div>
                                <div class="col-md-3">
                                    <label for="middlename">Middlename</label>
                                    <input name="middlename" class="form-control profile-input-form" type="text" value="{{auth()->user()->middlename;}}" placeholder="Middlename">
                                </div>
                                <div class="col-md-3">
                                    <label for="lastname">Lastname</label>
                                    <input name="lastname" class="form-control profile-input-form" type="text" value="{{auth()->user()->lastname;}}" placeholder="Lastname">
                                </div>
                                <div class="col-md-3">
                                    <label for="birthdate">Birthdate</label>
                                    <input name="birthdate" class="form-control profile-input-form" type="text" value="{{auth()->user()->birthdate;}}" placeholder="Birthdate">
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <h5 class="mb-0">Address</h5>
                                </div>
                                <div class="col-md-12">
                                    <label for="address">Home Address</label>
                                    <input class="form-control profile-input-form text-start" type="text" value="{{auth()->user()->address;}}" id="address" name="address" readonly="readonly">
                                </div>
                            </div>

                            
                            <div class="row mt-3">
                               
                                <div class="col-md-3">
                                    <label for="purok">Street/Purok</label>
                                    <input class="form-control profile-input-form add-input" type="text" value="" placeholder="Street/Purok" id="purok">
                                </div>
                                <div class="col-md-3">
                                    <label for="barangay">Barangay</label>
                                    <input class="form-control profile-input-form add-input" type="text" value="" placeholder="Barangay" id="barangay">
                                </div>
                                <div class="col-md-3">
                                    <label for="municipality">Municipality</label>
                                    <input class="form-control profile-input-form add-input" type="text" value="" placeholder="Municipality" id="municipality">
                                </div>
                                <div class="col-md-3">
                                    <label for="province">Province</label>
                                    <input class="form-control profile-input-form  add-input" type="text" value="" placeholder="Province" id="province">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="country">Country</label>
                                    <input class="form-control profile-input-form  add-input" type="text" value="" placeholder="Country" id="country">
                                </div>
                                <div class="col-md-3">
                                    <label for="zip-code">Zip Code</label>
                                    <input class="form-control profile-input-form  add-input" type="text" value="" placeholder="Zip Code" id="zip_code">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <h5 class="mb-0">Account Information</h5>
                                </div>
                                <div class="col-md-4">
                                    <label for="email">Email</label>
                                    <input  name="email" class="form-control profile-input-form" type="email" value="{{auth()->user()->email;}}" placeholder="Email">
                                    @error('email')
                                        <p class="text-danger">
                                            <small> {{$message}} </small>
                                        </p>
                                    @enderror

                                </div>
                                <div class="col-md-4">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input  name="mobile_number" class="form-control profile-input-form" type="text" value="{{auth()->user()->mobile_number;}}" placeholder="Mobile Number">
                                    @error('mobile_number')
                                        <p class="text-danger">
                                            <small> {{$message}} </small>
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="password"> Password </label>
                                    <button class="btn btn-info btn-sm py-2" style="border-radius: 15px;" data-toggle="modal" data-target="#change_password" type="button" data-dismiss="modal">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="modal-footer me-3">
                        
                            <button type="submit" class="btn btn-success modal-update-btn">Update</button>
                            <button type="button" class="btn btn-danger modal-cancel-btn" data-dismiss="modal">Cancel</button>
                        
                    </div>
                </form>
            </div>
            
          </div>
        </div>
        </div>
    </div>
        {{-- Change Password Modal --}}

    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="change_passwordTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-body">

                <div class="card my-4 mt-5 modal-card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 h-25">
                      <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 profile-card-header">
                        <div class="profile-header-content position-absolute z-index-5 d-flex justify-content-start align-items-center ms-3">
                            <div class="profile-img-container-lg w-15 h-auto">
                                <img type="image" src="{{auth()->user()->photo}}" class="profile-img" alt="profile">
                            </div>
                            <div class="profile-text-container-lg ps-3">
                                <h4 class="text-name text-white text-capitalize ">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h4>
                                <p class="text-email text-success">{{auth()->user()->email;}}</p>
                            </div>
                            
                        </div>
                      </div>
                    </div>
                    
                    <form action="/user_change_password"  method="POST" id="update-form">
                        @method('PUT')
                        @csrf
                    <div class="card-body px-0 pb-2 mt-5 mx-5 text-sm profile">
                        <div class="container">
                        
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <h5 class="mb-0">Account Information</h5>
                                </div>
                                <div class="col-md-4">
                                    <label for="email">Email</label>
                                    <input  name="email" class="form-control profile-input-form" type="email" value="{{auth()->user()->email;}}" placeholder="Email">
                                    @error('email')
                                        <p class="text-danger">
                                            <small> {{$message}} </small>
                                        </p>
                                    @enderror

                                </div>
                                <div class="col-md-4">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input  name="mobile_number" class="form-control profile-input-form" type="text" value="{{auth()->user()->mobile_number;}}" placeholder="Mobile Number">
                                    @error('mobile_number')
                                        <p class="text-danger">
                                            <small> {{$message}} </small>
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for=""> Old Password</label>
                                    <input   class="form-control profile-input-form" type="password" placeholder="Old Password">
                                </div>
                            </div>

                            <div class="row mb-3 mt-3">
                                <div class="col-md-4">
                                    <label for="password">New Password</label>
                                    <input  name="password" class="form-control profile-input-form" type="password" value="" placeholder="New Password">
                                    @error('password')
                                        <p class="text-danger">
                                            <small> {{$message}} </small>
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="password_confirmation">Confirm New Password</label>
                                    <input  name="password_confirmation" class="form-control profile-input-form" type="password" value="" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <p class="text-danger">
                                            <small> {{$message}} </small>
                                        </p>
                                    @enderror
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="modal-footer me-3">
                        
                            <button type="submit" class="btn btn-success modal-update-btn">Submit</button>
                            <button type="button" class="btn btn-danger modal-cancel-btn" data-toggle="modal" data-target="#editProfile" data-dismiss="modal">Cancel</button>
                        
                    </div>
                </form>
            </div>
            
          </div>
        </div>
        </div>
    </div>
    
</main>
    


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>

<script type="text/javascript">
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }

  //   alerts

function logout(){
    Swal.fire({
    title: 'Are you sure you want to Log out?',
    text: "",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Log Out'
    }).then((result) => {
    if (result.isConfirmed) {
       document.getElementById('logout').submit();
    }
    })
}


// preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
});


$('.add-input').change(function(){
    let purok = document.getElementById('purok').value.concat(' ');
    let barangay = document.getElementById('barangay').value.concat(', ');
    let municipality = document.getElementById('municipality').value.concat(', ' );
    let province = document.getElementById('province').value.concat(', ');
    let country = document.getElementById('country').value.concat(', ');
    let zip_code = document.getElementById('zip_code').value;
    let new_address = document.getElementById('address');

    let address = purok.concat(barangay, municipality, province, country, zip_code);

    new_address.value = address;
    console.log(address);
});

// Bootstrap Modal
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});

// profile pic apload trigger
const profilePic = document.getElementById('profile-pic-upload');
const profilePicInput = document.getElementById('profile-pic');

profilePic.addEventListener('click', function() {
      // Trigger the hidden file input when the image is clicked
      profilePicInput.click();
    });



// Event listener for the file input element
profilePicInput.addEventListener('change', handleFileSelect, false);

function handleFileSelect(event) {
  const file = event.target.files[0];
  const imageType = /^image\//;

  if (imageType.test(file.type)) {
    const reader = new FileReader();

    reader.onload = function () {
      const previewImage = document.getElementById('profile-img');
      previewImage.src = reader.result;
    };

    reader.readAsDataURL(file);
  } else {
    alert('Please select an image file.');
  }
}
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

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.5"></script>
  </body>

</html>
