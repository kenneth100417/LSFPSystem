<div>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-12 mt-4">
                    <div class="card admin-account-cards" style="height: 102%">
                        
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <h5 class="card-title">Admin Accounts</h5>
                                </div>
                                <div class="text-success cursor-pointer">
                                    <a data-toggle="modal" data-target="#addAdmin"><i class="fa-solid fa-user-plus"></i></a>
                                </div>
                            </div>
                            <hr class="horizontal mt-0 mb-2 nav-horizontal">
                            <div class="mt-3">
                                <ul class="navbar-nav ">
                                    @forelse ($admins as $admin)
                                        <li class="">
                                            <div class="d-flex px-2 py-1 align-items-center justify-content-start" style="overflow: hidden">
                                                <div>
                                                    <img src="{{$admin->photo}}" class="avatar avatar-md me-3 border-radius-lg">
                                                </div>
                                                <div class="d-flex flex-column justify-content-start">
                                                    <h6 class="mb-0 text-sm text-dark">{{$admin->firstname}} {{$admin->lastname}}</h6>
                                                    <p class="mb-0 text-sm text-success">{{$admin->email}}</p>
                                                </div>
                                            </div>
                                            <hr class="horizontal mt-2 mb-2 bg-dark">
                                        </li>
                                    @empty
                                        
                                    @endforelse
                                    
                                    
                                </ul>

                            </div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="card my-4 mt-5" style="height: 93%">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 h-25">
                          <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 profile-card-header">
                            <div class="float-end position-absolute col-md-12 edit-profie-icon" >
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <a href="" data-toggle="modal" data-target="#editProfile" title="Edit Profile">
                                        <i class="profile-edit-icon fa-regular fa-pen-to-square mx-4"></i>
                                    </a>
                                </div>
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
                        
                        <div class="card-body px-0 pb-2 mt-3 mx-5 profile">
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

                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label for="firsname">Home Address</label>
                                        <input class="form-control profile-input-form" type="text" value="{{auth()->user()->address;}}" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3">
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
                                        <label for="password"> Password </label><br>
                                        <button class="btn btn-info btn-sm py-2" style="border-radius: 15px;" data-toggle="modal" data-target="#change_password" type="button" data-dismiss="modal">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Admin Form -->
   <div class="modal fade modal-profile" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="editProfileTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="/add_admin"  method="POST" id="add-admin-form" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
            <div class="card my-4 mt-5 modal-card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 h-25">
                  <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3 profile-card-header">
                    <div class="profile-header-content position-absolute z-index-5 d-flex justify-content-start align-items-center ms-3">
                        <div class="profile-img-container-lg">
                            <img type="image" src="/img/Profile_pic/profile_temp.png" class="profile-img edit-photo" alt="profile" style="cursor: pointer;" id="profile-img">

                            <span class="profile-upload-icon" id="profile-pic-upload"><i class="fa-solid fa-camera"></i><br /><p style="font-size: 1vw;">Upload Profile</p></span>

                            <input type="file" name="profile_pic" id="profile-pic" style="display: none; " accept="image/x-png,image/jpeg">
                            
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
                                <input name="firstname" id="fname" class="form-control profile-input-form" type="text" value="" placeholder="Firstname" required>
                                @error('firstname')
                                <p class="text-danger">
                                    <small> {{$message}} </small>
                                </p>
                            @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="middlename">Middlename</label>
                                <input name="middlename" id="mname" class="form-control profile-input-form" type="text" value="" placeholder="Middlename" required>
                                @error('middlename')
                                <p class="text-danger">
                                    <small> {{$message}} </small>
                                </p>
                            @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="lastname">Lastname</label>
                                <input name="lastname" id="lname" class="form-control profile-input-form" type="text" value="" placeholder="Lastname" required>
                                @error('lastname')
                                <p class="text-danger">
                                    <small> {{$message}} </small>
                                </p>
                            @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="birthdate">Birthdate</label>
                                <input name="birthdate" id="bdate" class="form-control profile-input-form" type="text"  placeholder="Birthdate" required>
                                @error('birthdate')
                                <p class="text-danger">
                                    <small> {{$message}} </small>
                                </p>
                            @enderror
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <h5 class="mb-0">Address</h5>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control profile-input-form text-start" type="text" value="" id="Address" name="address" readonly="readonly" hidden>
                            </div>
                        </div>

                        
                        <div class="row">
                           
                            <div class="col-md-3">
                                <label for="purok">Street/Purok</label>
                                <input class="form-control profile-input-form admin-add-input" type="text" value="" placeholder="Street/Purok" id="Purok" required>
                            </div>
                            <div class="col-md-3">
                                <label for="barangay">Barangay</label>
                                <input class="form-control profile-input-form admin-add-input" type="text" value="" placeholder="Barangay" id="Barangay" required>
                            </div>
                            <div class="col-md-3">
                                <label for="municipality">Municipality</label>
                                <input class="form-control profile-input-form admin-add-input" type="text" value="" placeholder="Municipality" id="Municipality" required>
                            </div>
                            <div class="col-md-3">
                                <label for="province">Province</label>
                                <input class="form-control profile-input-form  admin-add-input" type="text" value="" placeholder="Province" id="Province" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="country">Country</label>
                                <input class="form-control profile-input-form  admin-add-input" type="text" value="" placeholder="Country" id="Country" required>
                            </div>
                            <div class="col-md-3">
                                <label for="zip-code">Zip Code</label>
                                <input class="form-control profile-input-form  admin-add-input" type="text" value="" placeholder="Zip Code" id="Zip_code" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 mt-5">
                                <h5 class="mb-0">Account Information</h5>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input autocomplete="off" name="email" class="form-control profile-input-form" type="Email" value="" placeholder="Email" required >
                                @error('email')
                                    <p class="text-danger">
                                        <small> {{$message}} </small>
                                    </p>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <label for="mobile_number">Mobile Number</label>
                                <input autocomplete="off" name="mobile_number" class="form-control profile-input-form" type="text" value="" placeholder="Mobile Number" required >
                                @error('mobile_number')
                                    <p class="text-danger">
                                        <small> {{$message}} </small>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="password">Password</label>
                                <input autocomplete="off" name="password" class="form-control profile-input-form" type="password" value="" placeholder="Password" id="pass"  required>
                                @error('password')
                                    <p class="text-danger">
                                        <small> {{$message}} </small>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input autocomplete="off" name="password_confirmation" class="form-control profile-input-form" type="password" id="confirm-pass" placeholder="Confirm Password" required>
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
                    
                        <button type="submit" class="btn btn-success modal-update-btn" id="addBtn" disabled>Update</button>
                        <button type="button" class="btn btn-danger modal-cancel-btn" data-dismiss="modal">Cancel</button>
                    
                </div>
            </form>
        </div>
        
      </div>
    </div>
    </div>
</div>

   <!-- Modal -->
   <div class="modal fade modal-profile" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="editProfileTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="/admin_update"  method="POST" id="profile-update-form" enctype="multipart/form-data">
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
                            <p class="text-email text-success">Email: {{auth()->user()->email}}</p>
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
                    
                        <button type="submit" class="btn btn-success modal-update-btn" id="updateBtn" disabled>Update</button>
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
                        <div class="profile-img-container-lg ">
                            <img type="image" src="{{auth()->user()->photo}}" class="profile-img edit-photo" alt="profile">
                        </div>
                        <div class="profile-text-container-lg ps-3">
                            <h4 class="text-name text-white text-capitalize ">{{auth()->user()->firstname." ".auth()->user()->lastname;}}</h4>
                            <p class="text-email text-success">{{auth()->user()->email;}}</p>
                        </div>
                        
                    </div>
                  </div>
                </div>
                
                <form action="{{url('/admin_change_pass')}}"  method="POST" id="change-pass-form">
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
                                <input  name="email" class="form-control profile-input-form" type="email" value="{{auth()->user()->email}}" placeholder="Email">
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
                                <input name="current_password"  class="form-control profile-input-form" type="password" placeholder="Old Password" id="old-pass">
                            </div>
                        </div>

                        <div class="row mb-3 mt-3">
                            <div class="col-md-4">
                                <label for="password">New Password</label>
                                <input  name="password" class="form-control profile-input-form" type="password" value="" placeholder="New Password" id="new-pass">
                                @error('password')
                                    <p class="text-danger">
                                        <small> {{$message}} </small>
                                    </p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input  name="password_confirmation" class="form-control profile-input-form" type="password" value="" placeholder="Confirm Password" id="confirm-pass">
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
                    
                        <button id="submitBtn" type="submit" class="btn btn-success modal-update-btn" disabled>Submit</button>
                        <button type="button" class="btn btn-danger modal-cancel-btn" data-toggle="modal" data-target="#editProfile" data-dismiss="modal">Cancel</button>
                    
                </div>
            </form>
        </div>
        
      </div>
    </div>
    </div>
</div>


</div>
