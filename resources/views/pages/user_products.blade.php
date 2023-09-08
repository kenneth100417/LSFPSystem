@include('components.user.header')

<livewire:user.product.all/>

@include('components.user.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->

{{-- <script>
  var swiper = new Swiper(".mySwiper", {
    //slidesPerView: 5,
    // spaceBetween: 10,,
    direction: "horizontal",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    freeMode:{
      enabled : true,
      sticky: true,
    },
    grid: {
      rows: 2,
    },
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
  });
</script> --}}
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
          timer: 5000,
          showConfirmButton: true
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