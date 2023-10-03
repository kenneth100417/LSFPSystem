@include('components.admin.header')
        
      
        <section class="mx-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-white border-radius-lg mt-5">
                        <div class="card-header p-0 mt-n4 mx-3 z-index-2 mb-n2">
                            <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-white text-capitalize ps-3">Add Product Category</h6>
                                </div>
                                <div class="me-3">
                                    <a class="btn btn-warning btn-sm" href="{{url('admin/category')}}">View All Categories<i class="fa-solid fa-arrow-up-right-from-square ms-2" style="font-size: 14px"></i></a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-body px-0">
                            <form action="{{url('admin/category/add')}}" id="categoryForm" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class=" mx-4 pb-4" style="min-height: 15rem;">
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div class="mt-3">
                                                                <h6 class="">Category Name</h6>
                                                                <div class="form-outline">
                                                                <input type="text" id="" class="form-control  p-2" placeholder="Category Name" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="name" value="{{old('name')}}"/>
                                                                </div>
                                                                @error('name')
                                                                    <p class="text-danger">
                                                                        <small>{{$message}}</small>
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="mt-3">
                                                                <h6 class="">Status</h6>
                                                                <div class="form-check">
                                                                    <input class="form-check-input category-checkbox" type="checkbox" id="flexCheckChecked" name="status" checked>
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                      Uncheck to hide category
                                                                    </label>
                                                                </div>
                                                                @error('status')
                                                                    <p class="text-danger">
                                                                        <small>{{$message}}</small>
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <h6 class="">Description</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Description" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="description" value="{{old('description')}}"/>
                                                        </div>
                                                        @error('description')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <h5 class="mt-4 mb-0">SEO (Search Engine Otimization) Tags</h5>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mt-3">
                                                                <h6 class="">Slug</h6>
                                                                <div class="form-outline">
                                                                <input type="text" id="" class="form-control  p-2" placeholder="Slug" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="slug" value="{{old('slug')}}"/>
                                                                </div>
                                                                @error('slug')
                                                                    <p class="text-danger">
                                                                        <small>{{$message}}</small>
                                                                    </p>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mt-3">
                                                                <h6 class="">Meta Title</h6>
                                                                <div class="form-outline">
                                                                <input type="text" id="" class="form-control  p-2" placeholder="Meta Title" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="meta_title" value="{{old('meta_title')}}"/>
                                                                @error('meta_title')
                                                                    <p class="text-danger">
                                                                        <small>{{$message}}</small>
                                                                    </p>
                                                                @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                    <div class="mt-3">
                                                        <h6 class="">Meta Keyword</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Meta Keyword" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="meta_keyword" value="{{old('meta_keyword')}}"/>
                                                        </div>
                                                        @error('meta_keyword')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    <div class="mt-3">
                                                        <h6 class="">Meta Description</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Meta Description" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="meta_description" value="{{old('meta_description')}}"/>
                                                        </div>
                                                        @error('meta_description')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                                
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mt-5 d-flex justify-content-center" >
                                                <div class="" style="border-radius: 15px; width: 80%; height: 45vh; overflow:hidden;box-shadow: 1px 2px 5px #491815;">          
                                                    <img type="image" src="/img/category/category.png" class="card-title" alt="Category image preview" id="category-pic" style="width: 100%;height: 100%;object-fit: cover;margin: 0;">
                                                </div>
                                                
                                                
                                            </div>
                                            <div class="mt-3">
                                                <h6 class="">Upload Category Image</h6>
                                                <button type="button" class="btn btn-info w-100" id="select-img-btn">Select Image</button>
                                                @error('image')
                                                    <p class="text-danger">
                                                        <small>{{$message}}</small>
                                                    </p>
                                                @enderror
                                                <input type="file" accept="image/x-png,image/jpeg"  class="form-control" style="display: none;" id="category-pic-upload" name="image" title="Upload image"/>
                                                
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center mt-4">
                                                <button type="submit" class="btn btn-success btn-md mx-2 w-25">Save</button>
                                                <button type="button" class="btn btn-warning btn-md mx-2 w-25" onclick="clearForm();">Clear</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    
    </main>
<script type="text/javascript">
// Event listener for the file input element
    var uploadBtn = document.getElementById('select-img-btn');
    var uploadInput = document.getElementById('category-pic-upload');

    uploadBtn.addEventListener('click', function(){
        uploadInput.click();
    });

let profilePicInput = document.getElementById('category-pic-upload');

profilePicInput.addEventListener('change', handleFileSelect, false);

function handleFileSelect(event) {
  const file = event.target.files[0];
  const imageType = /^image\//;

  if (imageType.test(file.type)) {
    const reader = new FileReader();

    reader.onload = function () {
      const previewImage = document.getElementById('category-pic');
      previewImage.src = reader.result;
    };

    reader.readAsDataURL(file);
  } else {
    alert('Please select an image file.');
  }
}

// clear form

function clearForm(){
    document.getElementById("categoryForm").reset();
}
</script>
@if (session('success'))
      
    <script type="text/javascript">

        setTimeout(message, 2000);

        function message(){
            Swal.fire({
                    type: 'success',
                    title: 'Successfully Saved!',
                    timer: 5000,
                });
            // swal.fir({ type: 'success', title: 'Saved.', 
            // showConfirmButton: false, timer: 3000 
            // }).then((result) => {
            //     if (result.dismiss === Swal.DismissReason.timer) {
            //         $("#new_reminder").modal("hide");                            
            //     }
            // });
        //     swal.fire({
        //         type: "success",
        //     title: "Red Alert!",
        //     text: "I will close in 4 seconds.",
        //     timer: 4000,
        //     showConfirmButton: false
        // });
        }   
    </script>
@endif     

@if (session('error'))
<script type="text/javascript">

    setTimeout(message, 2000);

    function message(){t
        Swal.fire(
                'Ooops!',
                'An error occured!',
                'error',
                5000,
                false
            )
    }   
</script>
@endif


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
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
    confirmButtonColor: '#DC3545',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Log Out'
    }).then((result) => {
    if (result.isConfirmed) {
       document.getElementById('logout').submit();
    }
    })
}

// window.setTimeout(function() {
//     $(".alert").fadeTo(500, 0).slideUp(500, function(){
//         $(this).remove(); 
//     });
// }, 4000);
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


//   category pic






</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
