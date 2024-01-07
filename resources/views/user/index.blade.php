@include('user.layout.header')

  <!-- banner section  -->
  <section>
    <div class="container">
      <div class="Banner-section" style="position: relative;">
        <img src="{{asset('public/img/banner-img.png')}}" alt="" style="width: 100%;">
        <div class="banner-text">
          <h1 class="text-white">Tour Homes <br>
            Without Leaving Yours</h1>
          <form class="d-flex search-custom" role="search">
            <input class="form-control me-2 search-form" type="search" placeholder="Search" aria-label="Search">
            <button class="btn  search-btn" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- How we can help you page -->
  <section class="mt-3">
    <div class="container">
      <div class="header-text">
        <h4>How we can help you</h4>

      </div>
      <section class="my-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('public/img/buying-img-1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Buying</h5>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('public/img/renting-img-1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Selling</h5>

                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('public/img/renting-img-2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Buying</h5>

                </div>
              </div>
            </div>

          </div>
    </section>


    </div>
  </section>


    <!-- Suggestions page -->
    <section class="mt-3">
      <div class="container">
        <div class="header-text">
          <h4>Suggestions</h4>

        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper my-3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card   box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$225,025</div>
                <div class="">
                   <img src="{{asset('public/img/suggestion img 1.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon" id="like"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card  box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$458,457</div>
                <div class="">
                   <img src="{{asset('public/img/suggestions img 2.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon" id="like"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card  box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$12,470,000</div>
                <div class="">
                   <img src="{{asset('public/img/sugggestion img 3.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card  box-swiper-card" style="max-width: 18rem;">
                <div class="card-header  fw-bold">$225,025</div>
                <div class="">
                   <img src="{{asset('public/img/suggestion img 1.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card  box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$458,457</div>
                <div class="">
                   <img src="{{asset('public/img/suggestions img 2.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card  box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$12,470,000</div>
                <div class="">
                   <img src="{{asset('public/img/sugggestion img 3.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
   <!-- Most Viewed page -->
   <section class="mt-3">
    <div class="container">
      <div class="header-text">
        <h4>Most Viewed</h4>

      </div>
      <!-- Swiper -->
      <div class="swiper mySwiper my-3">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card  box-swiper-card" style="max-width: 18rem;">
              <div class="card-header fw-bold">$225,025</div>
              <div class="">
                 <img src="{{asset('public/img/most viewed img 1.png')}}" alt="" style="width: 100%;">
              </div>
              <div class="card-footer ">
                <div class="d-flex justify-content-between">
                  <p class="mb-0">Price</p>
                  <i class="fa-regular fa-heart heart_icon" id="like"></i>
                </div>

              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="card  box-swiper-card" style="max-width: 18rem;">
              <div class="card-header fw-bold">$225,025</div>
              <div class="">
                 <img src="{{asset('public/img/most view img 2.png')}}" alt="" style="width: 100%;">
              </div>
              <div class="card-footer ">
                <div class="d-flex justify-content-between">
                  <p class="mb-0">Price</p>
                  <i class="fa-regular fa-heart heart_icon" id="like"></i>
                </div>

              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="card  box-swiper-card" style="max-width: 18rem;">
              <div class="card-header fw-bold">$225,025</div>
              <div class="">
                 <img src="{{asset('public/img/most viewed img 3.png')}}" alt="" style="width: 100%;">
              </div>
              <div class="card-footer ">
                <div class="d-flex justify-content-between">
                  <p class="mb-0">Price</p>
                  <i class="fa-regular fa-heart heart_icon" id="like"></i>
                </div>

              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="card  box-swiper-card" style="max-width: 18rem;">
              <div class="card-header fw-bold">$225,025</div>
              <div class="">
                 <img src="{{asset('public/img/most viewed img 1.png')}}" alt="" style="width: 100%;">
              </div>
              <div class="card-footer ">
                <div class="d-flex justify-content-between">
                  <p class="mb-0">Price</p>
                  <i class="fa-regular fa-heart heart_icon" id="like"></i>
                </div>

              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="card  box-swiper-card" style="max-width: 18rem;">
              <div class="card-header fw-bold">$225,025</div>
              <div class="">
                 <img src="{{asset('public/img/most view img 2.png')}}" alt="" style="width: 100%;">
              </div>
              <div class="card-footer ">
                <div class="d-flex justify-content-between">
                  <p class="mb-0">Price</p>
                  <i class="fa-regular fa-heart heart_icon" id="like"></i>
                </div>

              </div>

            </div>
          </div>
          <div class="swiper-slide">
            <div class="card  box-swiper-card" style="max-width: 18rem;">
              <div class="card-header fw-bold">$225,025</div>
              <div class="">
                 <img src="{{asset('public/img/most viewed img 3.png')}}" alt="" style="width: 100%;">
              </div>
              <div class="card-footer ">
                <div class="d-flex justify-content-between">
                  <p class="mb-0">Price</p>
                  <i class="fa-regular fa-heart heart_icon" id="like"></i>
                </div>

              </div>

            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

     <!-- Recently Added -->
     <section class="mt-3">
      <div class="container">
        <div class="header-text">
          <h4>Recently Added</h4>

        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper my-3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card   box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$225,025</div>
                <div class="">
                   <img src="{{asset('public/img/recently added img 1.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon" id="like"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card   box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$458,457</div>
                <div class="">
                   <img src="{{asset('public/img/recently added img 2.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon" id="like"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card   box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$12,470,000</div>
                <div class="">
                   <img src="{{asset('public/img/recently added img 3.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card   box-swiper-card" style="max-width: 18rem;">
                <div class="card-header  fw-bold">$225,025</div>
                <div class="">
                   <img src="{{asset('public/img/recently added img 1.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card   box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$458,457</div>
                <div class="">
                   <img src="{{asset('public/img/recently added img 2.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card  box-swiper-card" style="max-width: 18rem;">
                <div class="card-header fw-bold">$12,470,000</div>
                <div class="">
                   <img src="{{asset('public/img/recently added img 3.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="card-footer ">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Address</p>
                    <i class="fa-regular fa-heart heart_icon"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>



    @include('user.layout.footer')

    <script>
        $('.menu_index').addClass('active');
    </script>
