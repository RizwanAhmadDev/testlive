@extends('admin.layout.layout-user')
@section('content')
<section class="banner">
          <div class="banner-holder">
            <div class="banner-slider">
              <div class="owl-carousel owl-theme">
                <div class="item">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703978/slider_01_zmpwll.jpg">
                </div>
                <div class="item">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703978/slider_03_h1u4cj.jpg">
                </div>
                <div class="item">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703979/slider_02_kufdql.jpg">
                </div>
                <div class="item">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677703978/slider_04_jg0ouv.jpg">
                </div>
              </div>
            </div>
          </div>
          <div class="banner-cta-holder">
            <div class="container">
              <div class="banner-cta-row">
                <div class="banner-cta">
                  <div class="banner-cta-text">
                    <h1>Lets Book Your Taxi Instantly</h1>
                  <p>Book Your Taxi for Umrah in no time. Umrah Taxi(تاكسي العمرة المميز ) service is ready to help you in your Holy Journey. We provide the best Mecca to Medina taxi service.                </p>
                  <div class="banner-cta-btn">
                    <a href="#" class="primary-btn">Book Now</a>
                  </div>
                  </div>
                  <div class="banner-testimonials">
                      <div class="row">
                        <div id="banner-slider" class="owl-carousel">
                        <div class="testimonial">
                        <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada vulputate nisi in fermentum. Vivamus ac libero quis nisi auctor pulvinar. Aenean sit amet lectus posuere, mattis massa eget, ullamcorper diam. Nunc sit amet felis eget arcu congue dictum.
                        </p>
                        <h3 class="title">WILLIAMSON</h3>
                        </div>
                        <div class="testimonial">
                        <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada vulputate nisi in fermentum. Vivamus ac libero quis nisi auctor pulvinar. Aenean sit amet lectus posuere, mattis massa eget, ullamcorper diam. Nunc sit amet felis eget arcu congue dictum.
                        </p>
                        <h3 class="title">WILLIAMSON</h3>
                        </div>
                        <div class="testimonial">
                        <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada vulputate nisi in fermentum. Vivamus ac libero quis nisi auctor pulvinar. Aenean sit amet lectus posuere, mattis massa eget, ullamcorper diam. Nunc sit amet felis eget arcu congue dictum.
                        </p>
                        <h3 class="title">WILLIAMSON</h3>
                        </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="banner-form">
                  <form id="bookTaxi">
                    <h2>Book your Taxi</h2>
                    <div class="form-inner">
                      <div class="form_column">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" required placeholder="Email">
                        <input type="text" name="ph_nmbr" placeholder="Phone with Country Code">
                        <input type="text" name="countryname" placeholder="Country Name">
                        <select>
                          <option value="">Are you British Citizen?</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                      <div class="form_column">
                        <h3>Services We Offer:</h3>
                        <div class="firstpkg">
                          <input type="checkbox" id="formTaxi" name="formTaxi" value="formTaxi">
                          <label for="formTaxi"> Taxi</label>
                          <input type="checkbox" id="formHotels" name="formHotels" value="formHotels">
                          <label for="formHotels"> Hotels </label>
                        <input type="checkbox" id="forTickets" name="forTickets" value="forTickets">
                        <label for="forTickets"> Tickets</label>
                        </div>
                        <div class="secondpkg">
                          <input type="checkbox" id="umrahpkg" name="umrahpkg" value="umrahpkg">
                          <label for="umrahpkg"> Umrah Package (All in one)</label>
                        </div>
                        <input type="text" name="pickup_addr" placeholder="Pick up Address">
                        <input type="text" name="destination" placeholder="Destination">
                        <!-- <select name="selectvehicle" id="selectvehicle">
                          <option value="">Select Vehicle</option>
                          <option value="Camry Car">Camry Car</option>
                          <option value="Innova Car">Innova Car</option>
                          <option value="H1 Hyundai">H1 Hyundai</option>
                          <option value="GMC">GMC</option>
                          <option value="Coaster">Coaster</option>
                        </select> -->
                      </div>
                    </div>
                    <button class="primary-btn">Request for Taxi</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </section>

      <section class="why-us">
        <div class="container">
          <div class="section-head">
            <h1>Why Us?</h1>
          </div>
          <div class="row">
            <div class="column column_01">
              <div class="content-holder">
                <div class="content-icon">
                  <i class="fa fa-solid fa-dollar-sign"></i>
                </div>
                <div class="content-heading">
                  <h3>Fixed Prices</h3>
                </div>
                <div class="content-desc">
                  <p>For all long distance rides, we offer fixed prices. You'll see the fixed final price before you complete your booking, which won't change if you get stuck in traffic, for example.</p>
                </div>
              </div>
            </div>

            <div class="column column_02">
              <div class="content-holder">
                <div class="content-icon">
                  <i class="fa fa-regular fa-square-check"></i>
                </div>
                <div class="content-heading">
                  <h3>Easy Booking</h3>
                </div>
                <div class="content-desc">
                  <p>You can book your ride in just a few steps. Select a pick-up address in one of our cities and we can get you to any destination.</p>
                </div>
              </div>
            </div>

            <div class="column column_03">
              <div class="content-holder">
                <div class="content-icon">
                  <i class="fa fa-regular fa-user"></i>
                </div>
                <div class="content-heading">
                  <h3>Professional Drivers</h3>
                </div>
                <div class="content-desc">
                  <p>We have a global network of experienced and trained drivers. You cen be sure that you'll be driven by a professional.</p>
                </div>
              </div>
            </div>

            <div class="column column_04">
              <div class="content-holder">
                <div class="content-icon">
                  <i class="fa fa-regular fa-user"></i>
                </div>
                <div class="content-heading">
                  <h3>24/7 Available</h3>
                </div>
                <div class="content-desc">
                  <p>We provide 24/7 service to our valued clients.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="passport">
        <div class="container">
          <div class="row">
            <div class="column column_01">
              <div class="content-holder">
                <div class="image-holder">
                  <img src=" {{ asset('assets/images/passport.jpg') }}" alt="Umrah">
                </div>
              </div>
            </div>
            <div class="column column_02"></div>
            <div class="column column_03"></div>
          </div>
        </div>
      </section>


      <section class="grid-cols">
        <div class="container">
          <div class="section-head">
            <h1>Our Values</h1>
          </div>
          <div class="row">
            <div class="column-holder row-reverse">
              <div class="column column_03 content-column">
                <div class="content-holder">
                  <div class="content-heading">
                    <h3>Executive Staff Service</h3>
                  </div>
                  <div class="content-desc">
                    <p>Our Staff are all enhanced DBS-checked professionals with a wealth of driving experience.</p>
                  </div>
                </div>
              </div>
              <div class="column column_05 image-column">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677754467/taxi_02_il8u10.jpg" alt="Taxi">
                </div>
              </div>
          </div>

            <div class="column-holder">
              <div class="column column_01 content-column">
                <div class="content-holder">
                  <div class="content-heading">
                    <h3>Reliable & Professional</h3>
                  </div>
                  <div class="content-desc">
                    <p>We are proud to offer a reliable service, tailored to meet your requirements and schedule, on time, every time.</p>
                    <p>Whether you’re hiring one of our vehicles for your wedding day, airport transfer or corporate event, your will arrive promptly and provide any assistance you require. We will ensure that you reach your destination in style and on time.</p>
                  </div>
                </div>
              </div>
              <div class="column column_02 image-column">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677751356/taxi_lkhqod.jpg" alt="Taxi">
                </div>
              </div>
            </div>

            <div class="column-holder row-reverse">
              <div class="column column_03 content-column">
                <div class="content-holder">
                  <div class="content-heading">
                    <h3>Your Safety is Our Priority</h3>
                  </div>
                  <div class="content-desc">
                    <p>Our chauffeurs are all enhanced DBS-checked professionals with a wealth of driving experience.</p>
                  </div>
                </div>
              </div>
              <div class="column column_05 image-column">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677751463/taxi_01_yuhlwb.jpg" alt="Taxi">
                </div>
              </div>
          </div>
          </div>
        </div>
      </section>
      
      <section class="car-items">
        <div class="container">
          <div class="section-head">
            <h1>Booking Options</h1>
          </div>
          <div class="row">
            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_01_sot2sq.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_02_uxawu4.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_04_f1btjm.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_03_t9oxbb.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>
         
            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_03_t9oxbb.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_04_f1btjm.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_02_uxawu4.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="https://res.cloudinary.com/decjkxgo7/image/upload/v1677755130/car_01_sot2sq.png" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>Up to 3 passengers</li>
                    <li><i class="fa fa-solid fa-check"></i>2 pieces of baggage</li>
                    <li><i class="fa fa-solid fa-check"></i>Toyota Corolla, Prius</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="car-btn-holder">
            <a href="#" class="primary-btn" id="carBtn">Book Ride</a>
          </div>
        </div>
      </section>

      <section class="packages">
        <div class="container">
          <div class="section-title">
            <div class="heading">
              <h1>Choose Your Hotel</h1>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Contact Us</a>
              </div>
          </div>
          <div class="row">
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_01.jpg') }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star March Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p>SAR 10,147 <small>per passenger</small></p>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src=" {{ asset('assets/images/hotel_02.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star March Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>SAR 10,147</strong><small>per passenger</small></p>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_03.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star March Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p>SAR 10,147 <small>per passenger</small></p>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_04.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star March Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p>SAR 10,147 <small>per passenger</small></p>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_05.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star March Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p>SAR 10,147 <small>per passenger</small></p>
              </div>
              </div>
              
            </div>
            <div class="column">  
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_06.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star March Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p>SAR 10,147 <small>per passenger</small></p>
              </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
@endsection


