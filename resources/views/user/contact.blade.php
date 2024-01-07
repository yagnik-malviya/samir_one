@include('user.layout.header')


    <!-- banner section  -->
    <section>
        <div class="container">
            <div class="Banner-section" style="position: relative;">
                <img src="{{asset('public/img/contact-banner.png')}}" alt="" style="width: 100%;">
                <div class="banner-text">
                    <h1 class="text-white text-center fs-1">Contact Us</h1>

                </div>
            </div>
        </div>
    </section>

      <!-- <section class="mt-3">
         <div class="container">
            <div>
                <h3>What You Get When Asking Your Question</h3>
                <ul>
                    <li>1: Less then 12-hours response to your questions.</li>
                    <li>2: Thoroughness and expertise of a certified exchange specialist.</li>
                    <li>3: Plan of action summarized in an email follow up.</li>
                </ul>
            </div>
         </div>
      </section> -->

      <section class="my-3">
        <div class="container">
            <section class="contact_us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="contact_inner">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="contact_form_inner">
                                            <div class="contact_field">
                                                <h3>Contatc Us</h3>
                                                <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                                <input type="text" class="form-control form-group" placeholder="Name" />
                                                <input type="text" class="form-control form-group" placeholder="Email" />
                                                <textarea class="form-control form-group" placeholder="Message"></textarea>
                                                <button class="contact_form_submit">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="right_conatct_social_icon d-flex align-items-end">
                                           <div class="socil_item_inner d-flex">
                                              <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact_info_sec">
                                    <h4 class="text-white">Contact Info</h4>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-headset" style="color: #fff;"></i>
                                        <span class="text-white">+91 8009 054294</span>
                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-envelope-open-text" style="color: #fff;"></i>
                                        <span class="text-white">info@flightmantra.com</span>
                                    </div>
                                    <div class="d-flex info_single align-items-center">
                                        <i class="fas fa-map-marked-alt" style="color: #fff;"></i>
                                        <span class="text-white">1000+ Travel partners and 65+ Service city across India, USA, Canada & UAE</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>
      </section>




@include('user.layout.footer')
 <script>
    $('.menu_contact').addClass('active');
</script>
