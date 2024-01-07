@include('user.layout.header')


    <!-- banner section  -->
    <section>
        <div class="container">
            <div class="Banner-section" style="position: relative;">
                <img src="{{asset('public/img/sell-banner.png')}}" alt="" style="width: 100%;">
                <div class="banner-text">
                    <h1 class="text-white">Tour Homes <br>
                        Without Leaving Yours</h1>
                    <form class="d-flex search-custom" role="search">
                        <input class="form-control me-2 search-form" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn  search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

      <section class="mt-3">
         <div class="container">
            <div>
                <h3>How much Worth is?</h3>
                <h6>Properties value estimator to get a free, instant value estimate,
                    see nearby sales and market trends, and update your facts and photos</h6>
            </div>
         </div>
      </section>

    <!-- buy form section css -->
    <section class="mt-3">
        <div class="container">
            <div class="header-text my-4">
                <h4 class="text-center" style="color: #9F2927;">"Inquiry Form"</h4>

              </div>
            <div class="buy-form">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label fw-bold">First Name</label>
                        <input type="text" class="form-control custom-form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label fw-bold">Last Name</label>
                        <input type="text" class="form-control custom-form-control" id="">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress" class="form-label fw-bold">Phone Number*</label>
                        <input type="text" class="form-control custom-form-control" id="inputAddress" placeholder="(000) 000-000">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress2" class="form-label fw-bold">E-mail*</label>
                        <input type="text" class="form-control custom-form-control" id="inputAddress2" placeholder="example@example.com">
                    </div>

                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">Selling Property Type</label>
                        <select id="inputState" class="form-select custom-form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">What is the approximate square footage:</label>
                        <input type="text" class="form-control custom-form-control" id="inputAddress2" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">Property Selling Price?</label>
                        <input type="text" class="form-control custom-form-control" id="inputAddress2" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">What is the current condition of your property?</label>
                        <select id="inputState" class="form-select custom-form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-bold">How many years have you owned this home:</label>
                        <input type="text" class="form-control custom-form-control" id="inputAddress2" placeholder="">
                    </div>

                    <div class="col-md-6">
                        <p class="fw-bold">What kind of property are you interested in?*</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label custom-form-control fw-bold" for="gridCheck ">
                                Raw Land
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label custom-form-control fw-bold" for="gridCheck">
                                Residential
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input fw-bold " type="checkbox" id="gridCheck">
                            <label class="form-check-label custom-form-control fw-bold" for="gridCheck">
                                Commercial
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for=" " class="fw-bold">What kind of repairs and maintenance does the house need?</label>
                        <textarea id="" name="" class="form-control custom-form-control" rows="3" cols="10">

                          </textarea>

                    </div>
                    <div class="col-md-6">
                        <label for=" " class="fw-bold">Do you have any questions or comments you would like to share with us?</label>
                        <textarea id="" name="" class="form-control custom-form-control" rows="" cols="10">

                          </textarea>

                    </div>

                    <div class="container my-2">
                        <label for=" " class="fw-bold">Choose Imagess</label>
                        <div class="row">
                          <div class="col-12">
                            <form action="" method="post" enctype="multipart/form-data" id="form-upload">
                              <div class="form-group mt-2">
                                <input type="file" class="form-control custom-form-control" name="images[]" multiple id="upload-img" />
                              </div>
                              <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>

                            </form>
                           </div>
                         </div>

                      </div>

                    <div class="col-12">
                       <div class="text-center w-100">
                        <button type="submit" class="btn search-btn-custom search-btn-custom-buy ">Submit</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </section>




    <section class="mb-3">
        <div class="container">
            <div class="header-text my-4">
                <h4>Newest Listings</h4>

              </div>
            <!-- Swiper -->
                <div class="swiper mySwiper_buy">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container-slider">
                            <img src="{{asset('public/img/buy-1.png')}}" alt="Avatar" class="image-slider">
                            <div class="overlay overlay-slider">
                              <div class="text-slider">
                                <p class="mb-0">Property Name: <span class="">Elenza Greenfiel</span></p>
                                <p class="mb-0">Property Type: <span>Commercial</span></p>
                                <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                <p class="mb-0">Price: <span>25.65 L</span></p>
                                <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                <div class="">
                                    <p class="mb-0"><a href="#">More Photo</a></p>
                                    <button type="submit" class="btn slider-btn my-2">Explore Property</button>

                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container-slider">
                            <img src="{{asset('public/img/buy-2.png')}}" alt="Avatar" class="image-slider">
                            <div class="overlay overlay-slider">
                              <div class="text-slider">
                                <p class="mb-0">Property Name: <span class="">Elenza Greenfiel</span></p>
                                <p class="mb-0">Property Type: <span>Commercial</span></p>
                                <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                <p class="mb-0">Price: <span>25.65 L</span></p>
                                <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                <div class="">
                                    <p class="mb-0"><a href="#">More Photo</a></p>
                                    <button type="submit" class="btn slider-btn my-2">Explore Property</button>

                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container-slider">
                            <img src="{{asset('public/img/buy-3.png')}}" alt="Avatar" class="image-slider">
                            <div class="overlay overlay-slider">
                              <div class="text-slider">
                                <p class="mb-0">Property Name: <span class="">Elenza Greenfiel</span></p>
                                <p class="mb-0">Property Type: <span>Commercial</span></p>
                                <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                <p class="mb-0">Price: <span>25.65 L</span></p>
                                <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                <div class="">
                                    <p class="mb-0 "><a href="#">More Photo</a></p>
                                    <button type="submit" class="btn slider-btn my-2">Explore Property</button>

                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container-slider">
                            <img src="{{asset('public/img/buy-1.png')}}" alt="Avatar" class="image-slider">
                            <div class="overlay overlay-slider">
                              <div class="text-slider">
                                <p class="mb-0">Property Name: <span class="">Elenza Greenfiel</span></p>
                                <p class="mb-0">Property Type: <span>Commercial</span></p>
                                <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                <p class="mb-0">Price: <span>25.65 L</span></p>
                                <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                <div class="">
                                    <p class="mb-0 "><a href="#">More Photo</a></p>
                                    <button type="submit" class="btn slider-btn my-2">Explore Property</button>

                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container-slider">
                            <img src="{{asset('public/img/buy-2.png')}}" alt="Avatar" class="image-slider">
                            <div class="overlay overlay-slider">
                              <div class="text-slider">
                                <p class="mb-0">Property Name: <span class="">Elenza Greenfiel</span></p>
                                <p class="mb-0">Property Type: <span>Commercial</span></p>
                                <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                <p class="mb-0">Price: <span>25.65 L</span></p>
                                <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                <div class="">
                                    <p class="mb-0 "><a href="#">More Photo</a></p>
                                    <button type="submit" class="btn slider-btn my-2">Explore Property</button>

                                </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container-slider">
                            <img src="{{asset('public/img/buy-3.png')}}" alt="Avatar" class="image-slider">
                            <div class="overlay overlay-slider">
                              <div class="text-slider">
                                <p class="mb-0">Property Name: <span class="">Elenza Greenfiel</span></p>
                                <p class="mb-0">Property Type: <span>Commercial</span></p>
                                <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                <p class="mb-0">Price: <span>25.65 L</span></p>
                                <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                <div class="">
                                    <p class="mb-0 "><a href="#">More Photo</a></p>
                                    <button type="submit" class="btn slider-btn my-2">Explore Property</button>

                                </div>
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
    $('.menu_sell').addClass('active');
</script>
