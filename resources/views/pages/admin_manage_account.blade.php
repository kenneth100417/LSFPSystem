@include('components.admin.header')

    
      
        <livewire:admin.manage-accounts.index/>
    
    </main>
        

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script type="text/javascript">
  // datepicker
  $('#bdate').datepicker({
       endDate: '-16y'
      });

// button disable if not edited
let updateForm = document.getElementById('profile-update-form');
let changePassForm = document.getElementById('change-pass-form');

updateForm.addEventListener('change', function(){
    let updateBtn = document.getElementById('updateBtn');
    updateBtn.disabled = false;
});

changePassForm.addEventListener('change', function(){
    let submitBtn = document.getElementById('submitBtn');
    let oldPass = document.getElementById('old-pass').value;
    let newPass = document.getElementById('new-pass').value;
    let confirmPass = document.getElementById('confirm-pass').value;

    
    if(oldPass != '' && newPass != '' && confirmPass != ''){

        if(newPass.trim().length < 6){
            Swal.fire({
            title: 'Ooops!',
            text: "New password must be 6 characters.",
            icon: 'info',
            showConfirmButton: true
            });
            newPass = '';
        }else if(newPass != confirmPass){
            Swal.fire({
            title: 'Ooops!',
            text: "Password confirmation does not match.",
            icon: 'info',
            showConfirmButton: true
            });
            confirmPass = '';
        }else{
            submitBtn.disabled = false;
        }

    }
   
});

//Add form
let addform = document.getElementById('add-admin-form');
let addBtn = document.getElementById('addBtn');



//Add Admin ADDRESS
$('.admin-add-input').change(function(){
    let Purok = document.getElementById('Purok').value;
    let Barangay = document.getElementById('Barangay').value;
    let Municipality = document.getElementById('Municipality').value;
    let Province = document.getElementById('Province').value;
    let Country = document.getElementById('Country').value;
    let Zip_code = document.getElementById('Zip_code').value;
    let New_address = document.getElementById('Address');

   
  
    let Address = Purok+', '+Barangay+', '+Municipality+', '+Province+', '+Country+', '+Zip_code;

    New_address.value = Address;
    //console.log(address);
});

addBtn.addEventListener('click', function(){
 
  
        if(Purok == '' && Barangay == '' && Municipality == '' && Province == '' && Purok == '' && Zip_code == ''){
            Swal.fire({
                title: 'Ooops!',
                text: "Address fields are required.",
                icon: 'info',
                showConfirmButton: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        addBtn.disabled = true;
                    }
                })
        }else{
            addBtn.disabled = false;
        }

   
});

let pass = document.getElementById('pass');
let confirmPass = document.getElementById('confirm-pass');

pass.addEventListener('change', function(){
    if(pass.value.trim().length < 6){
            Swal.fire({
            title: 'Ooops!',
            text: "New password must be atleast 6 characters.",
            icon: 'info',
            showConfirmButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    addBtn.disabled = true;
                }
            })
        }
});

confirmPass.addEventListener('change', function(){
    
    if(pass.value != confirmPass.value){
            Swal.fire({
            title: 'Ooops!',
            text: "Password confirmation does not match.",
            icon: 'info',
            showConfirmButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    addBtn.disabled = true;
                }
            })
        }else{
            addBtn.disabled = false;
        }
});






//ADDRESS
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

// profile pic apload trigger
const profilePic2 = document.getElementById('profile-pic-upload2');
const profilePicInput2 = document.getElementById('profile-pic2');

profilePic2.addEventListener('click', function() {
      // Trigger the hidden file input when the image is clicked
      profilePicInput2.click();
    });


// Event listener for the file input element
profilePicInput2.addEventListener('change', handleFileSelect, false);

function handleFileSelect(event) {
  const file = event.target.files[0];
  const imageType = /^image\//;

  if (imageType.test(file.type)) {
    const reader = new FileReader();

    reader.onload = function () {
      const previewImage2 = document.getElementById('profile-img2');
      previewImage2.src = reader.result;
    };

    reader.readAsDataURL(file);
  } else {
    alert('Please select an image file.');
  }
}



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
    confirmButtonColor: '#DC3545',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Log Out'
    }).then((result) => {
    if (result.isConfirmed) {
       document.getElementById('logout').submit();
    }
    })
}

// custom swiper
//custom swiper
    // const swiperEl = document.getElementById('swiper');

    // const params = {
    //   injectStyles: [`
    //   .swiper-pagination-bullet {
    //     display: none;
    //   }

    //   .swiper-pagination{
    //     display: none;
    //   }

    //   `],
    //   pagination: {
    //     clickable: true,
    //   },
    // }

    // Object.assign(swiperEl, params);

    // swiperEl.initialize();



// preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
});


</script>
@if (session('success'))
      
    <script type="text/javascript">

        setTimeout(message, 1000);

        function message(){
            Swal.fire(
                    'Updated Successfully!',
                    'Profile updated successfully',
                    'success'
                )
        }   
    </script>
@endif     

@if (session('error'))
<script type="text/javascript">

    setTimeout(message, 1000);

    function message(){
        Swal.fire(
                'Update Failed!',
                'An error occured while processing update.',
                'info'
            )
    }   
</script>
@endif

@if (session('changePassSuccess'))
      
    <script type="text/javascript">

        setTimeout(message, 1000);

        function message(){
            Swal.fire(
                    'Success!',
                    'Your password is updated successfully.',
                    'success'
                )
        }   
    </script>
@endif     

@if (session('changePassError'))
<script type="text/javascript">

    setTimeout(message, 1000);

    function message(){
        Swal.fire(
                'Update Failed!',
                'Current Password does not match with Old Password',
                'info'
            )
    }   
</script>
@endif

@if (session('addAdminSuccess'))
      
    <script type="text/javascript">

        setTimeout(message, 1000);

        function message(){
            Swal.fire(
                    'Success!',
                    'Admin account created successfully.',
                    'success'
                )
        }   
    </script>
@endif     

@if (session('addAdminError'))
<script type="text/javascript">

    setTimeout(message, 1000);

    function message(){
        Swal.fire(
                'Ooops!',
                'An error occured while creating an admin account.',
                'info'
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
