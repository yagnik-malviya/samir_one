@include('user.layout.header')


    <!-- banner section  -->
    <section>
        <div class="container">
            <div class="Banner-section" style="position: relative;">
                <img src="{{asset('public/img/rent-banner.png')}}" alt="" style="width: 100%;">
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

    <section class="mt-4">
        <div class="container">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a data-mdb-tab-init class="nav-link active" id="ex2-tab-1" href="#ex2-tabs-1" role="tab"
                        aria-controls="ex2-tabs-1" aria-selected="true">Uploading rent Property</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a data-mdb-tab-init class="nav-link" id="ex2-tab-2" href="#ex2-tabs-2" role="tab"
                        aria-controls="ex2-tabs-2" aria-selected="false">Rent Property </a>
                </li>

            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                    <!-- buy form section css -->
                    <section class="mt-3">
                        <div class="container">
                            <div class="header-text my-4">
                                <h4 class="text-center" style="color: #9F2927;">"Uploading rent Property"</h4>

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
                                        <input type="text" class="form-control custom-form-control" id="inputAddress"
                                            placeholder="(000) 000-000">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress2" class="form-label fw-bold">E-mail*</label>
                                        <input type="text" class="form-control custom-form-control" id="inputAddress2"
                                            placeholder="example@example.com">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">Selling Property Type</label>
                                        <select id="inputState" class="form-select custom-form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">What is the approximate
                                            square footage:</label>
                                        <input type="text" class="form-control custom-form-control" id="inputAddress2"
                                            placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">Property Selling
                                            Price?</label>
                                        <input type="text" class="form-control custom-form-control" id="inputAddress2"
                                            placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">What is the current condition
                                            of your property?</label>
                                        <select id="inputState" class="form-select custom-form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">How many years have you owned
                                            this home:</label>
                                        <input type="text" class="form-control custom-form-control" id="inputAddress2"
                                            placeholder="">
                                    </div>

                                    <div class="col-md-6">
                                        <p class="fw-bold">What kind of property are you interested in?*</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label custom-form-control fw-bold"
                                                for="gridCheck ">
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
                                        <label for=" " class="fw-bold">What kind of repairs and maintenance does the
                                            house need?</label>
                                        <textarea id="" name="" class="form-control custom-form-control" rows="3"
                                            cols="10">

                          </textarea>

                                    </div>
                                    <div class="col-md-6">
                                        <label for=" " class="fw-bold">Do you have any questions or comments you would
                                            like to share with us?</label>
                                        <textarea id="" name="" class="form-control custom-form-control" rows=""
                                            cols="10">

                          </textarea>

                                    </div>

                                    <div class="container my-2">
                                        <label for=" " class="fw-bold">Choose Imagess</label>
                                        <div class="row">
                                            <div class="col-12">
                                                <form action="" method="post" enctype="multipart/form-data"
                                                    id="form-upload">
                                                    <div class="form-group mt-2">
                                                        <input type="file" class="form-control custom-form-control"
                                                            name="images[]" multiple id="upload-img" />
                                                    </div>
                                                    <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <div class="text-center w-100 my-3">
                                            <button type="submit"
                                                class="btn search-btn-custom search-btn-custom-buy ">Submit</button>
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
                                                    <p class="mb-0">Property Name: <span class="">Elenza
                                                            Greenfiel</span></p>
                                                    <p class="mb-0">Property Type: <span>Commercial</span></p>
                                                    <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                                    <p class="mb-0">Price: <span>25.65 L</span></p>
                                                    <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                                    <div class="">
                                                        <p class="mb-0"><a href="#">More Photo</a></p>
                                                        <button type="submit" class="btn slider-btn my-2">Explore
                                                            Property</button>

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
                                                    <p class="mb-0">Property Name: <span class="">Elenza
                                                            Greenfiel</span></p>
                                                    <p class="mb-0">Property Type: <span>Commercial</span></p>
                                                    <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                                    <p class="mb-0">Price: <span>25.65 L</span></p>
                                                    <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                                    <div class="">
                                                        <p class="mb-0"><a href="#">More Photo</a></p>
                                                        <button type="submit" class="btn slider-btn my-2">Explore
                                                            Property</button>

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
                                                    <p class="mb-0">Property Name: <span class="">Elenza
                                                            Greenfiel</span></p>
                                                    <p class="mb-0">Property Type: <span>Commercial</span></p>
                                                    <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                                    <p class="mb-0">Price: <span>25.65 L</span></p>
                                                    <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                                    <div class="">
                                                        <p class="mb-0 "><a href="#">More Photo</a></p>
                                                        <button type="submit" class="btn slider-btn my-2">Explore
                                                            Property</button>

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
                                                    <p class="mb-0">Property Name: <span class="">Elenza
                                                            Greenfiel</span></p>
                                                    <p class="mb-0">Property Type: <span>Commercial</span></p>
                                                    <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                                    <p class="mb-0">Price: <span>25.65 L</span></p>
                                                    <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                                    <div class="">
                                                        <p class="mb-0 "><a href="#">More Photo</a></p>
                                                        <button type="submit" class="btn slider-btn my-2">Explore
                                                            Property</button>

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
                                                    <p class="mb-0">Property Name: <span class="">Elenza
                                                            Greenfiel</span></p>
                                                    <p class="mb-0">Property Type: <span>Commercial</span></p>
                                                    <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                                    <p class="mb-0">Price: <span>25.65 L</span></p>
                                                    <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                                    <div class="">
                                                        <p class="mb-0 "><a href="#">More Photo</a></p>
                                                        <button type="submit" class="btn slider-btn my-2">Explore
                                                            Property</button>

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
                                                    <p class="mb-0">Property Name: <span class="">Elenza
                                                            Greenfiel</span></p>
                                                    <p class="mb-0">Property Type: <span>Commercial</span></p>
                                                    <p class="mb-0">Address: <span>Shela Ahmedabad</span></p>
                                                    <p class="mb-0">Price: <span>25.65 L</span></p>
                                                    <p class="mb-0">Amenities: <span>254 sqft</span></p>
                                                    <div class="">
                                                        <p class="mb-0 "><a href="#">More Photo</a></p>
                                                        <button type="submit" class="btn slider-btn my-2">Explore
                                                            Property</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>


                </div>
                <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                    <section class="mt-3">
                        <div class="container">
                            <div class="header-text my-4">
                                <h4 class="text-center" style="color: #9F2927;">"Rent Property"</h4>

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
                                        <input type="text" class="form-control custom-form-control" id="inputAddress"
                                            placeholder="(000) 000-000">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputAddress2" class="form-label fw-bold">E-mail*</label>
                                        <input type="text" class="form-control custom-form-control" id="inputAddress2"
                                            placeholder="example@example.com">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">When are you planing on visiting?</label>
                                        <input type="date" class="form-control custom-form-control" id="inputAddress2"
                                        placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">How long are you planing to stay?</label>
                                        <select id="inputState" class="form-select custom-form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">What kind of location are you interested in?</label>
                                        <select id="inputState" class="form-select custom-form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">What is your budget?</label>
                                        <select id="inputState" class="form-select custom-form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>


                                    <div class="col-md-12">
                                        <p class="fw-bold">What kind of property are you interested in?*</p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label custom-form-control fw-bold"
                                                for="gridCheck ">
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
                                        <label for=" " class="fw-bold">Include any listing numbers or properties of interest here:</label>
                                        <textarea id="" name="" class="form-control custom-form-control" rows="2"
                                            cols="10"> </textarea>


                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputState" class="form-label fw-bold">Questions/Comments:</label>
                                        <textarea id="" name="" class="form-control custom-form-control" rows="0"
                                        cols="10"> </textarea>

                                    </div>

                                    <div class="col-12">
                                        <div class="text-center w-100 my-3">
                                            <button type="submit"
                                                class="btn search-btn-custom search-btn-custom-buy ">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <section class="my-3">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('public/img/most view img 2.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>

                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('public/img/most viewed img 3.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>

                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card h-100">
                                <img src="{{asset('public/img/most viewed img 1.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>

                                </div>
                              </div>
                            </div>

                          </div>
                    </section>

                </div>

            </div>
            <!-- Tabs content -->
        </div>
    </section>

@include('user.layout.footer')
<!-- MDB -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
 <script>
    $('.menu_rent').addClass('active');
</script>
