@include('components.user.header')

<section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-3">
                    <div class="product-card">
                        <div class="product-img-container">
                          <img class="product-img" src="/img/category/category1.jpg"
                          class="card-img-top"/>
                        </div>
                        <div class="text-center mt-3">
                          <h5 class="product-name mb-0">Original Cacao Powder</h5>
                          <p class="small"><a href="#!" class="text-muted">Cacao Products</a></p>
                        </div>
                        <div class="text-center mx-2 product-price d-flex justify-content-between align-items-center mt-n2">
                          <div>
                            <p class="small text-danger mb-0 mx-1"><s>P75.00</s></p>
                          </div>
                          <div>
                            <h5 class="text-dark mb-2 mx-1">P60.00</h5>
                          </div>
                          
                        </div>
                        <div class="d-flex justify-content-start align-items-center mb-2 mx-2 rating-container">
                          <p class="text-muted my-0 rating-text">Product Ratings:</p>
                          <div class="ms-auto text-warning ratings-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between m-2">
                          <button class="btn btn-success add-cart-btn">Add to Cart</button>
                          <button class="btn btn-warning buy-btn ">Buy Now</button>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    
    
</section>

@include('components.user.footer')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      direction: "vertical",
      grid: {
        rows: 2,
      },
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>