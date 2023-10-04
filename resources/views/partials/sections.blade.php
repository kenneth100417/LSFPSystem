
{{-- Log in Modal --}}
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4 class="font-weight-bolder text-center mt-2 mb-4 card-title">Sign In</h4>
        <form action="/login" method="POST" role="form" class="text-start">

          @csrf
          @error('email')
            <p class="text-danger text-center">
              <small> {{$message}} </small>
            </p>
          @enderror

          <div class="input-group input-group-outline mb-1">
            <input placeholder="Email" name="email" type="email" class="form-control" value={{old('email')}} >
          </div>
          <div class="input-group input-group-outline mt-2">
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>
          <div class="text-end mb-2">
            <a class="login-link" href="">Forgot Password?</a>
          </div>
          <div class="text-center">
            <button type="submit" class="btn login-btn w-100 my-2 mb-1">Sign in</button>
            
          </div>
          <p class="mt-4 text-sm text-center">
            Don't have an account?
            <a href="/register" class="login-link register-link text-bold"><br />Register</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>





<div class="col-md-12 col-xl-9 text-center mt-n4 title-container" id="main">
  
    <div class="container  {{"/" == request()->path() ? '/' : 'reg-section-sm'}}">
      <div class="row">
        <div class="text-center lsfp-container col-md-12">
          <H4 class="lsfp">Louella's</H4>
          <H1 class="text-bold lsfp">Sweet Food Products</H1>
          <p class="lsfp-tagline">Every Bite is Delight!</p>
          <p class="lsfp-desc ">At Louella's Sweet Food Products, we take pride in sourcing only the highest quality ingredients for our chocolate, ensuring that every piece is a true indulgence for your taste buds.</p>
          
          <div class="d-flex justify-content-center align-items-center mt-5 expl-btn">
            <div class="explore-btn-container">
              <a href="#product" class="btn btn-warning explore-btn"> Explore Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
            <div class="sm-login-btn">
              @if(request()->path() == "register")
                <button type="button" data-toggle="modal" data-target="#registerModal" class="btn btn-success ms-2 ">Register</button>
              
              @else
                  <button type="button" data-toggle="modal" data-target="#loginModal" class="btn btn-success ms-2 ">Get Started</button>
              @endif
              
            </div>

          </div>

          
          
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="cacao col-md-12">
          <img src="/img/cacao.png">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</section>

{{-- Product Section --}}

<livewire:public.category.index/>

{{-- product section --}}
<livewire:public.product.top-recommended/>

<livewire:public.product.best-selling/>


  <section id="about">
    <div class="container {{"/" == request()->path() ? '/' : 'reg-section-sm'}}">
      <div class="row">
        <div class="col-md-12">
          <fieldset class="about-container ">
            <legend class="mx-3">
              <div type="" class="bg-warning about-title">
                About
              </div>
            </legend>
            <div class="about-content">
              <p class="about-text">
                Welcome to Louella's Sweet Food Products, where we bring you the finest and most delectable chocolate made from original cacao beans, along with a variety of other products that celebrate the rich heritage of our local communities.
              </p>
              <p class="about-text">
                At Louella's, we take pride in sourcing only the highest quality ingredients for our chocolate, ensuring that every piece is a true indulgence for your taste buds. From the rich and creamy milk chocolate to the deep and complex flavors of our dark chocolate, every bite is a journey to the heart of the cacao plantations. But chocolate is just the beginning of what we offer. We also showcase the unique beauty of our local culture with our collection of native bags, wallets, and pouches made from traditional materials. Our shirts, keychains, and souvenirs are also designed to capture the essence of our heritage, making them perfect mementos for your travels or gifts for your loved ones.
              </p>
              <p class="about-text"> 
                And, if you're looking for something healthy, we also offer turmeric powders and tea that harness the power of this wonder spice, known for its anti-inflammatory and antioxidant properties.
              </p>
              <p class="about-text">
                Our mission at Louella's Sweet Food Products is to not only bring you the finest treats and products but also to support our local communities by sourcing our ingredients and materials locally. We are committed to promoting sustainability and ethical practices in our business, while also providing you with the best possible customer service.
              </p>
              <p class="about-text">
                Thank you for choosing Louella's Sweet Food Products. We hope you enjoy our products as much as we enjoy creating them.
              </p>
            </div>
            <div class="">
              <h3 class="history-text">History</h3>
              <p class="about-text">"Louella's tablea started in May 2019 when my wife tried to make tablea as a "Pasalubong" to her former co-employee in Manila. Inspired by the good feedback, she tried to make some and sold it to her co-teachers and friends with an initial capital of 500 pesos. As it was good, we expanded marketing to other people.
              </p>
              <p class="about-text">
                In 2020, we decided to register the business with DTI (Department of trade and Industry) and aimed to further increase our sales and improve our production.
              </p>
              <p class="about-text">
                Today, we take pride in producing tablea out of fermented cacao beans".
              </p>
              <div class="owner-container my-5">
                <h6 class="owner-name">Louie G. Grantos</h6>
                <p class="position">Louella's Sweet Food Product Owner</p>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container {{"/" == request()->path() ? '/' : 'reg-section-sm'}}">
      <div class="row">
        <div class="col-md-12">
          <fieldset class="contact-container">
            <legend>
              <div class="bg-warning contact-title">
                Contact Us
              </div>
            </legend>
           <div class="container-fluid">
            <div class="row d-flex justify-content-between">
              <div class="col-lg-7 contact-info">
                <div class="text-center mb-3 contact-header mx-5">
                  <h5 class="contact-sub-title">Louela's Sweet Food Products</h5>
                  <h5 class="con-info-text">Contact Information</h5>
                </div>
                <div class="contact d-flex justify-content-start align-items-center mb-3">
                  <span class="me-2"><i class="fa-brands fa-facebook"></i></span>
                  <a href="#" class="mx-4 contact">www.facebook.com/Louella'sSweetFoodProducts</a>
                </div>
                <div class="contact d-flex justify-content-start align-items-center mb-3 ">
                  <span class="me-2"><i class="fa-solid fa-envelope"></i></span>
                  <a href="#" class="mx-4 contact">LouellasSweetFoodProducts@gmail.com</a>
                </div>
                <div class="contact d-flex justify-content-start align-items-center mb-3">
                 <span class="me-2"> <i class="fa-solid fa-location-dot"></i></span>
                 <a href="#" class="mx-4 contact"> Zone 1 Bulan, Sorsogon, Philippines, 4706</a>
                </div>
                <div class="contact d-flex justify-content-start align-items-center ">
                 <span class="me-2">  <i class="fa-solid fa-phone"></i></span>
                 <a href="#" class="mx-4 contact">+639103157621</a>
                </div>
    
              </div>
  
              <div class="col-lg-5 contact-form">
                <form action="{{url('contact_mail')}}" method="POST">
                  @csrf
                  <div class="input-container mx-3 text-center mt-3">
                    <div class="input-group input-group-outline mb-2 mt-5">
                      <input placeholder="Name" name="name" id="name" type="text" class="form-control email-input-form" value={{old('name')}}>
                      @error('name')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <input placeholder="Email" name="email" id="email" type="Email" class="form-control email-input-form" value={{old('email')}}>
                      @error('email')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <input placeholder="Subject" name="subject" id="subject" type="text" class="form-control email-input-form" value={{old('subject')}}>
                      @error('subject')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="input-group input-group-outline mb-2">
                      <textarea placeholder="Your message here" name="message" id="message" type="text" class="form-control email-input-form email-textarea" value={{old('message')}}></textarea>
                      @error('message')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                      <button type="submit" class="btn btn-success btn-sm">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
           </div>
          </fieldset>
        </div>
      </div>
    </div>
    <div class="footer container {{"/" == request()->path() ? '/' : 'reg-section-sm'}}">
      <div class="row">
        <div class="d-flex justify-content-between align-content-center mt-4">
          <div class="copyright d-flex align-items-center">
            <div class="d-flex align-items-center">
              <a class="footer-text"><span class="copy mx-1" >&copy;</span><span id="spanYear"> </span><span class="bar" style="color:black"> | </span>Louella's Sweet Food Products </a>
            </div>
          </div>
          <div class="terms d-flex align-items-center">
            <div class="d-flex align-items-center">
              <a class="footer-text" href="javascript:void(0)" data-toggle="modal" data-target="#termsAndConditions">Terms & Conditions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  
@include('partials.terms-and-conditions')



  
  