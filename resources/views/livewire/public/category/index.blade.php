<section id="product">
    <div class="container pt-5 px-n5 {{"/" == request()->path() ? '/' : 'reg-section-sm'}}" id="category">
    <div class="row pt-5 px-n5">
      <div class="col-sm-12 ">
          <h4 class="text-start mx-3 swiper-title" style="font-family: Arial, Helvetica, sans-serif;">Product Categories</h4>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" init="false"   style="padding-bottom: 80px;" >
          
            @foreach ($categories as $category)
                <div class="swiper-slide d-flex justify-content-center ">
                    <div class="cat-card">          
                    <img src="/uploads/category/{{$category->image}}" class="card-title" alt="...">
                    </div>
                    <div class="product-cat" style="" >
                    <h5 class=" mx-0 px-0" style="color:rgb(124, 62, 18) !important; z-index: 10;background-color:aliceblue;">{{$category->name}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
    </div>
  </section>