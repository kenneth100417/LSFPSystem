@include('components.admin.header')
  
    <livewire:admin.dashboard/>
    
    @stack('scripts')
  </main>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script type="text/javascript">


$('#alert').delay(5000).hide(0); 
  
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
<script>
  window.addEventListener('exists', event =>{
        Swal.fire({
          title: 'Product already in your cart.',
          text: '',
          icon: 'info',
          timer: 5000,
          showConfirmButton: true
      })

    });

    window.addEventListener('success', event =>{
        Swal.fire({
          title: 'Product is added to your cart.',
          text: '',
          icon: 'success',
          showConfirmButton: true
      }).then((result) => {
        if (result.isConfirmed) {
          location.reload();
        }
      })
    });

    window.addEventListener('greaterThanStock', event =>{
        Swal.fire({
          title: 'Insufficient Stock.',
          text: '',
          icon: 'info',
          timer: 5000,
          showConfirmButton: true
      })
    });

    window.addEventListener('notFound', event =>{
        Swal.fire({
          title: 'Product not Found.',
          text: '',
          icon: 'info',
          timer: 5000,
          showConfirmButton: true
      })
    });

    window.addEventListener('outOfStock', event =>{
        Swal.fire({
          title: 'Product out of Stock',
          text: '',
          icon: 'info',
          timer: 5000,
          showConfirmButton: true
      })
    });
    window.addEventListener('lessThanZero', event =>{
        Swal.fire({
          title: 'Quantity must be more than 0.',
          text: '',
          icon: 'info',
          timer: 5000,
          showConfirmButton: true
      })
    });
    window.addEventListener('null', event =>{
        Swal.fire({
          title: 'Please input quantity.',
          text: '',
          icon: 'info',
          timer: 5000,
          showConfirmButton: true
      })
    });

</script>



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
