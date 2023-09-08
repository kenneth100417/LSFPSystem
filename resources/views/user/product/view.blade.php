@include('components.user.header')

<livewire:user.product.view :category="$category" :product="$product" :ratingval="$ratingval" :ratingcount="$ratingcount" :reviews="$reviews"/>



<script type="text/javascript">
  


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

    
    // var input_quantity = document.getElementById('quantity');
    // input_quantity.addEventListener('change',function(){
    //   if(input_quantity.value <= 0){
    //   Swal.fire({
    //       title: 'Quantity must be greater than 0.',
    //       text: '',
    //       icon: 'info',
    //       timer: 3000,
    //       showConfirmButton: true
    //   })
    //   input_quantity.value = "";
    // }else if(input_quantity.value = ""){
    //   Swal.fire({
    //       title: 'Please input quantity.',
    //       text: '',
    //       icon: 'info',
    //       timer: 3000,
    //       showConfirmButton: true
    //   })
    //   input_quantity.value = "";
    // }
    // })
</script>
@include('components.user.footer')