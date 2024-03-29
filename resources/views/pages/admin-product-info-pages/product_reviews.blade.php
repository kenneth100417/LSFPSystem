@include('components.admin.header')


<section>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 d-flex justify-content-center">
                    <div class="" style="border-radius: 15px; width: 80%; height: 45vh; overflow:hidden;box-shadow: 1px 2px 5px #491815;">          
                      <img type="image" src="/uploads/products/{{$product->image}}" class="card-title" alt="Product image preview" style="width: 100%;height: 100%;object-fit: cover;margin: 0;">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="text-start mt-3 mx-2">
                      <div class="text-nowrap me-3" >
                        <h5 class="product-name mb-0" style="font-size: 30px !important;">{{$product->name}}</h5>
                      </div>
                      <div class="d-flex justify-content-between align-items-center mb-n3">
                        <div class="align-items-center d-inline-block text-truncate" style="max-width:500px;">
                          <p class=""><a href="#!" class="text-muted">{{$product->category->name}}</a></p>
                        </div>
                        
                      </div>
                      <hr class="bg-dark mt-n2"/>
                      <div class="d-flex justify-content-between mt-2">
                        <div class="d-flex">
                          <label for="rating" class="text-md text-dark">{{$product->ratings->count()}} Rating{{$product->ratings->count() > 1 ? 's':''}}: </label>
                          <div class=" px-2 text-md">
                            @for($i = 1; $i <= number_format($ratingval); $i++)
                              <i class="fa fa-star checked"></i>
                            @endfor
                            @for($i = number_format($ratingval)+1; $i <= 5; $i++)
                              <i class="fa fa-star"></i>
                            @endfor
                          </div>
                        </div>
                        <div class="align-items-center">
                          <p class="text-success" style="font-weight: 550">{{$product->quantity_sold}} Sold <span class="text-dark">|</span>  <span class="{{$product->quantity - $product->quantity_sold == "0" ?  'text-danger':'text-info'}}" >{{$product->quantity - $product->quantity_sold == "0" ?  'Sold Out':$product->quantity - $product->quantity_sold.' in Stock'}}</span></p>
                        </div>
                      </div>
                      <div>
                        <label for="description" class="text-md text-dark">Description:</label>
                        <p class="mt-n2 mx-1" style="text-align: justify; ">{{$product->description}}</p>
                      </div>
                      <div class="d-flex justify-content-end">
                        {{-- <div class="mt-2 d-flex ">
                          <label for="quantity" class="text-md text-dark">Quantity:</label>
                          <div>
                            
                            @for($i = 1; $i <=  $product->quantity_sold - $product->quantity; $i++)
                              {{$max = $i;}}
                            @endfor
                            
                            <input wire:model = "add_quantity" :value = "add_quantity" type="number" min="1" max="{{$i}}" name="" id="quantity" class="form-control px-2 py-1 mx-3" placeholder="Quantity" style="max-width: 100px !important; border: 1px solid gray">
                          </div>
                        </div> --}}
                        <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n1">
                            <div>
                                <p class=" text-danger mb-0 mx-1"><s>&#8369;{{$product->original_price}}</s></p>
                            </div>
                            <div>
                                <h4 class="text-dark mb-2 mx-1 product-selling-price">&#8369;{{$product->selling_price}}</h4>
                            </div>
                        </div>
                      </div>
                      {{-- <div class="d-flex justify-content-end mt-3">
                        <form role="form" action='/buy/{{$product->id}}' method="POST">
                          @csrf
                        <button type="button" class="btn btn-success add-cart-btn me-2" style="font-size: 12px !important" wire:click="addToCart({{$product->id}})" id="addToCartBtn">Add to Cart</button>
                        <button type="submit" class="btn btn-warning buy-btn mx-2" style="font-size: 12px !important">Buy Now</button>
                        </form>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card mt-3">
            <div class="card-body">
              <div>
                <h5 class="mt-2">Product Reviews</h5>
              </div>
              <div class="container" style="max-height: 90vh; overflow-y: scroll; overflow-x: hidden;">
                <div class="row">
                  <div class="col-lg-12">
                    
                    <div>
                      <div class="col-lg-12">
                        <div class="card ">
                            @forelse($reviews as $review)
                            <div class="card-body">
                              <div class="d-flex justify-content-between p-container rounded-3 p-3 my-2 ">
                                <div class="d-flex flex-row align-items-center" >
                                  <div  class="d-flex align-items-start">
                                    <div>
                                        <img src="{{$review->user->photo}}"
                                        class="img-fluid rounded-3 p-image" alt="User" style="border-radius: 50% !important; min-width: 60px !important; min-height: 60px !important; object-fit: cover;">
                                    </div>
                                    <div class="ms-3" >
                                      <div class="d-flex  align-items-center justify-content-between">
                                        <div>
                                          <h5 class="">{{$review->user->firstname}} {{$review->user->lastname}}</h5>
                                        </div>
                                        
                                        <div class="ms-auto px-2 position-absolute" style="right: 40px">
                                          @for($i = 1; $i <= $review->star_rating; $i++)
                                            <i class="fa fa-star checked"></i>
                                          @endfor
                                          @for($i = $review->star_rating+1; $i <= 5; $i++)
                                            <i class="fa fa-star"></i>
                                          @endfor
                                        </div>
                                      </div>
                                      <p class="text-sm mt-n2">USER ID: LSFP_UID{{$review->user->id}}</p>
                                      <div style="width: 900px !important">
                                        <h6 class="text-md">Comment:</h6>
                                        <p class="mt-n2" style="text-align: justify; font-size: 16px !important; ">{{$review->comment}}</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
  
                            @empty
                            <div class="text-center mt-5" >No ratings yet.</div>
                            @endforelse
                              
  
                              
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
    
      
  </section>
  








@livewireScripts
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["S", "M", "T", "W", "T", "F", "S"],
            datasets: [{
                label: "Total Sales",
                tension: 0,
                borderWidth: 0,
                pointRadius: 5,
                pointBackgroundColor: "rgba(255, 255, 255, .8)",
                pointBorderColor: "transparent",
                borderColor: "rgba(255, 255, 255, .8)",
                borderColor: "rgba(255, 255, 255, .8)",
                borderWidth: 4,
                backgroundColor: "transparent",
                fill: true,
                data: [50, 40, 300, 320, 500, 350, 40],
                maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5],
                        color: 'rgba(255, 255, 255, .2)'
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#f8f9fa',
                        padding: 10,
                        font: {
                            size: 14,
                            weight: 300,
                            family: "Roboto",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
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
