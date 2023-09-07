@include('components.user.header')

<livewire:user.product.view :category="$category" :product="$product" :ratingval="$ratingval" :ratingcount="$ratingcount" :reviews="$reviews"/>



<script type="text/javascript">
  


    window.addEventListener('exists', event =>{
        Swal.fire({
          title: 'Product already added to cart.',
          text: '',
          icon: 'info',
          timer: 3000,
          showConfirmButton: false
      })
    });

    window.addEventListener('success', event =>{
        Swal.fire({
          title: 'Product successfully added to cart.',
          text: '',
          icon: 'success',
          timer: 3000,
          showConfirmButton: false
      })
    });

    window.addEventListener('greaterThanStock', event =>{
        Swal.fire({
          title: 'Insufficient Stock.',
          text: '',
          icon: 'info',
          timer: 3000,
          showConfirmButton: false
      })
    });

    window.addEventListener('notFound', event =>{
        Swal.fire({
          title: 'Product not Found.',
          text: '',
          icon: 'info',
          timer: 3000,
          showConfirmButton: false
      })
    });

    window.addEventListener('outOfStock', event =>{
        Swal.fire({
          title: 'Product out of Stock',
          text: '',
          icon: 'info',
          timer: 3000,
          showConfirmButton: false
      })
    });
    window.addEventListener('lessThanZero', event =>{
        Swal.fire({
          title: 'Quantity must be greater than 0.',
          text: '',
          icon: 'info',
          timer: 3000,
          showConfirmButton: false
      })
    });
    window.addEventListener('null', event =>{
        Swal.fire({
          title: 'Please input quantity.',
          text: '',
          icon: 'info',
          timer: 3000,
          showConfirmButton: false
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