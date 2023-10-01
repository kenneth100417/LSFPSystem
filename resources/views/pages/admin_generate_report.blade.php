@include('components.admin.header')

<div class="d-flex justify-content-center align-items-center mt-5">
  <a class="btn btn-success" href="{{url('/open_pdf')}}">Open PDF</a>
</div>
</main>
    

        
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
<script>
    
  $('#select2').select2({
    placeholder: 'Select a Product',
    closeOnSelect: true
  });
    // Listen for Select2 changes and update Livewire
  $('#select2').on('change', function() {
    Livewire.emit('selectedProduct', $(this).val());
    
  });

  var quantity = document.getElementById('quantity');
  var instock = document.getElementById('stock');

  
   
    quantity.addEventListener('change', (event) => {
      if(parseInt(instock.value) == 0){
          Swal.fire({
          title: 'Oops!',
          text: "The product is out of stock.",
          icon: 'info',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Ok'
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          }) 
        }else if(quantity.value > parseInt(instock.value)){
          Swal.fire({
            title: 'Product Insufficient Stock!',
            text: "The maximum quantity allowed is ".concat(instock.value),
            icon: 'info',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok'
          }).then((result) => {
            if (result.isConfirmed) {
              quantity.value = "";
            }
          }) 
        }
    });
  
    window.addEventListener('transactionAdded', event =>{
        Swal.fire({
          title: 'Success!',
          text: 'Transaction Added!',
          icon: 'success',
          showConfirmButton: true
      }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        }) 
    });
    window.addEventListener('outOfStock', event =>{
        Swal.fire({
          title: 'Oops!',
          text: "The product is out of stock.",
          icon: 'info',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Ok'
        }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        }) 
    });

    window.addEventListener('TransactionError', event =>{
        Swal.fire({
          title: 'Error!',
          text: 'There is an error occured while processing transaction.',
          icon: 'error',
          showConfirmButton: true
      })
    });


  
        
  

</script>


<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<script type="text/javascript">
  //select2
 
    // $('#select2').select2({});
    // $('#select2').on('change', function (e) {
    //           var data = $('#select2').select2("val");
    //           this.set('search', data);
    // });
 



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

// document.getElementById('searchInput').addEventListener('focus', function(){
//      document.getElementById("dropdown-menu").style.display="block";
// });

// document.getElementById('searchInput').addEventListener('change', function(){
//     document.getElementById("dropdown-menu").style.display="block";
// });

    

</script>



<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.5"></script>
  </body>

</html>
