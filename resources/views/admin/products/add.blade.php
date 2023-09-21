@include('components.admin.header')
        
      
<section class="mx-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-white border-radius-lg mt-5">
                <div class="card-header p-0 mt-n4 mx-3 z-index-2 mb-n2">
                    <div class="bg-gradient-success border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-white text-capitalize ps-3">Add New Product</h6>
                        </div>
                        <div class="me-3">
                            <a class="btn btn-warning btn-sm" href="{{url('admin/products')}}">View All Products<i class="fa-solid fa-arrow-up-right-from-square ms-2" style="font-size: 14px"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-body px-0">
                    <form action="{{url('admin/products')}}" id="categoryForm" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class=" mx-4 pb-4" style="min-height: 15rem;">
                                        <div class="mt-3">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    <div class="mt-3">
                                                        <h6 class="">Product Name</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Product Name" style="box-shadow: 0 2px 5px #b6b6b6bf; font-size: 14px;" name="name" value="{{old('name')}}"/>
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
                                                        <h6 class="">Product Category</h6>
                                                        <div class="form-outline">
                                                        <Select type="text" id="" class="form-control  p-2 selectpicker" data-style="select-with-transition" placeholder="Product Category" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="category_id" value="{{old('category_id')}}">
                                                            @foreach ($categories as $category)
                                                                <option class="" value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        
                                                        
                                                        </Select>
                                                        </div>
                                                        @error('category_id')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <h6 class="">Original Price</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Original Price" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="original_price" value="{{old('original_price')}}"/>
                                                        </div>
                                                        @error('original_price')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <h6 class="">Selling Price</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Selling Price" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="selling_price" value="{{old('selling_price')}}"/>
                                                        </div>
                                                        @error('selling_price')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <h6 class="">Stock Quantity</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Stock Quantity" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="quantity" value="{{old('quantity')}}"/>
                                                        </div>
                                                        @error('quantity')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-9">
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
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="mt-3">
                                                        <h6 class="">Expiration Date</h6>
                                                        <div class=" input-group input-group-outline mb-2 date" id="datepicker">
                                                            <input placeholder="Expiration Date" name="expiry_date" id="expiry_date" type="text" class="form-control" value="{{old('expiry_date')}}" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;">
                                                            <span class="input-group-append">
                                                                <span class="input-group-text mx-2">
                                                                <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </span>
                                                            </div>
                                                            @error('expiry_date')
                                                            <p class="text-danger">
                                                                <small> {{$message}} </small>
                                                            </p>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <h5 class="mt-5 mb-0">SEO (Search Engine Otimization) Tags</h5>
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
                                                        <input type="Meta title" id="" class="form-control  p-2" placeholder="Slug" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="meta_title" value="{{old('meta_title')}}"/>
                                                        </div>
                                                        @error('meta_title')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mt-3">
                                                        <h6 class="">Meta Keyword</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Meta keyword" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="meta_keyword" value="{{old('meta_keyword')}}"/>
                                                        </div>
                                                        @error('meta_keyword')
                                                            <p class="text-danger">
                                                                <small>{{$message}}</small>
                                                            </p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="mt-3">
                                                        <h6 class="">Meta Description</h6>
                                                        <div class="form-outline">
                                                        <input type="text" id="" class="form-control  p-2" placeholder="Meta description" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" name="meta_description" value="{{old('meta_description')}}"/>
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
                                    </div>
                                                
                                        
                                </div>

                                <div class="col-lg-4">
                                    <div class="mt-5 d-flex justify-content-center" >
                                        <div class="" style="border-radius: 15px; width: 80%; height: 45vh; overflow:hidden;box-shadow: 1px 2px 5px #491815;">          
                                            <img type="image" src="/img/addProductImage.png" class="card-title" alt="Category image preview" id="category-pic" style="width: 100%;height: 100%;object-fit: cover;margin: 0;">
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="mt-3">
                                        <h6 class="">Product Image</h6>
                                        <input type="file" accept="image/x-png,image/jpeg"  class="form-control  p-2" style="box-shadow: 0 2px 5px rgba(182, 182, 182, 0.75); font-size: 14px;" id="category-pic-upload" name="image"/>
                                        @error('image')
                                            <p class="text-danger">
                                                <small>{{$message}}</small>
                                            </p>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mt-5">
                                        <button type="submit" class="btn btn-success btn-md mx-2 w-25">Save</button>
                                        <a href="{{url('admin/products')}}" class="btn btn-danger btn-md mx-2 w-25">Back</a>
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
@livewireScripts
<script type="text/javascript">

$('#expiry_date').datepicker({
       startDate: '+2d'
      });

// Event listener for the file input element

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
