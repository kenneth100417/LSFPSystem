
<!--   Core JS Files   -->
@livewireScripts


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<script type="text/javascript">

window.addEventListener('show-cancel-confirmation', event =>{
    Swal.fire({
    title: 'Are you sure you want to cancel your order?',
    text: "You can reorder this in 'Cancelled' tab.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Cancel',
    cancelButtonText:'Abort',
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emit('cancelConfirmed')
    }
  })
});

window.addEventListener('show-received-message', event =>{
    Swal.fire({
    title: "Thank you for purchasing Louela's Sweet Food Products!",
    text: "Rate this products in 'Completed' tab.",
    icon: '',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Rate Now',
    cancelButtonText:'Later',
  }).then((result) => {
    if (result.isConfirmed) {
      location.href = "{{url('/user_completed')}}"
    }
  })
});

window.addEventListener('buy-again', event =>{
    Swal.fire({
    title: "Are you sure you want to place this order again?",
    text: "View your pending orders in 'Order Request' tab.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Buy Again',
    cancelButtonText:'Cancel',
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emit('buyAgain')
    }
  })
});

window.addEventListener('place-order', event =>{
    Swal.fire({
    title: "Are you sure you want to place this order again?",
    text: "View your pending orders in 'Order Request' tab.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Place Order',
    cancelButtonText:'Cancel',
  }).then((result) => {
    if (result.isConfirmed) {
      Livewire.emit('buyAgain')
    }
  })
});


window.addEventListener('outOfStock', event =>{
    Swal.fire({
    title: "Ooops!",
    text: "Out of Stock",
    icon: 'info',
    showConfirmButton: True
  })
});

window.addEventListener('notFound', event =>{
    Swal.fire({
    title: "Ooops!",
    text: "Product not found.",
    icon: 'info',
    showConfirmButton: True
  })
});

window.addEventListener('open-invoice-modal', event =>{
  $('#invoiceModal').modal('toggle');
});


window.addEventListener('goto-order-requests', event =>{
  location.href = "{{url('/user_orders')}}"
});

  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }


  //open rating modal
  window.addEventListener('open-rating-modal', event =>{
    $('#ratingModal').modal('toggle');
  });

  //validation for rating modal form
  // let ratingForm = document.getElementById('ratingForm');
  // ratingForm.addEventListener('change', function(){
  //   let star = document.getElementByName('rating').value
  //   alert(star);
  // });

    const radioButtons = document.querySelectorAll('input[name="rating"]');
    let selectedValue = null;
    let submitBtn = document.getElementById('submitBtn');
    let starRating = document.getElementById('starRating');

    radioButtons.forEach(radioButton => {
        radioButton.addEventListener('change', (event) => {
            selectedValue = event.target.value;
              submitBtn.disabled = false;
              starRating.value = selectedValue;
        });
    });




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



// preloader
var loader = document.getElementById('preloader');

window.addEventListener("load", function(){
    loader.style.display = "none";
});


</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="./assets/js/material-dashboard.min.js?v=3.0.5"></script>
@if (session('ratingSuccess'))
      
    <script type="text/javascript">

        setTimeout(message, 1000);

        function message(){
            Swal.fire(
                    'Success!',
                    'Thank you for sharing your experience with us!',
                    'success'
                )
        }   
    </script>
@endif     

@if (session('ratingError'))
<script type="text/javascript">

    setTimeout(message, 1000);

    function message(){
        Swal.fire(
                'Ooops',
                'An error occured while processing your request.',
                'info'
            )
    }   
</script>
@endif
  </body>

</html>
