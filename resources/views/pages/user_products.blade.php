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
