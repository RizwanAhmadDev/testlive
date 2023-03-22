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
                    <a href="/taxi" class="primary-btn">Book Now</a>
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
                  <form id="bookTaxi" action=" {{ route('store_enquiry') }}" method="POST" enctype="multipart/form-data" >
                    <h2>Submit Your Enquiry</h2>
                    @csrf
                    <div class="form-inner">
                      <div class="form_column">
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" required name="email"placeholder="Email">
                        <input type="text" id="phone" name="ph_nmbr" placeholder="Phone Number">
                        <input type="text" name="countryname" placeholder="Country Name">
                        <select name="british_citizen">
                          <option value="">Are you British Citizen?</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                      <div class="form_column">
                        <h3>Services We Offer:</h3>
                        <div class="firstpkg">
                          <input type="checkbox" id="formTaxi" name="formTaxi" value="need taxi">
                          <label for="formTaxi"> Taxi</label>
                          <input type="checkbox" id="formHotels" name="formHotels" value="need hotel">
                          <label for="formHotels"> Hotels </label>
                        <input type="checkbox" id="forTickets" name="forTickets" value="need ticket">
                        <label for="forTickets"> Tickets</label>
                        </div>
                        <div class="secondpkg">
                          <input type="checkbox" id="umrahpkg" name="umrahpkg" value="need umrah package">
                          <label for="umrahpkg"> Umrah Package (All in one)</label>
                        </div>
                        <!-- <input type="text" name="pickup_addr" placeholder="Pick up Address"> -->
                        <select id="single" class="single-dropdown">
                          <option></option>  
                          <option>Al Kiswah Towers Hotel</option>
                          <option>Makkah Towers</option>
                          <option>Hotel Pullman ZamZam Makkah</option>
                          <option>Jabal Omar Marriott Hotel</option>
                          <option>Makkah</option>
                          <option>Novotel Makkah Thaker City</option>
                          <option>Hilton Makkah Convention Hotel</option>
                          <option>M Hotel Al Dana Makkah by Millennium</option>
                          <option>Swissôtel Makkah</option>
                          <option>Fairmont Makkah Clock Royal Tower</option>
                          <option>Conrad Makkah</option>
                          <option>Park Inn by Radisson</option>
                          <option>Makkah Al Naseem</option>
                          <option>DoubleTree by Hilton Makkah Jabal Omar</option>
                          <option>Four Points by Sheraton Makkah Al Naseem</option>
                          <option>Revan Hotel</option>
                          <option>Hilton Suites Makkah</option>
                          <option>Royal Al Mashaer Hotel</option>
                          <option>Makkah Hotel</option>
                          <option>Millennium Makkah Al Naseem</option>
                          <option>Elaf Bakkah Hotel</option>
                          <option>Swissôtel Al Maqam Makkah</option>
                          <option>King Abdulaziz International Airport</option>
                          <option>King Khaled International Airport</option>
                          <option>King Fahd International Airport</option>
                          <option>Prince Mohammad Bin Abdulaziz Airport</option>
                          <option>Gassim Airport</option>
                          <option>Ta’if Regional Airport</option>
                          <option>Prince Abdulmohsin Bin Abdulaziz Airport</option>
                          <option>Abha Regional Airport</option>
                          <option>Tabuk Airport</option>
                          <option>Ha'il Airport</option>
                          <option>Al Ahsa Airport</option>
                          <option>Jizan Regional Airport</option>
                          <option>Al Baha Airport</option>
                          <option>Bisha Airport</option>
                          <option>Gurayat Domestic Airport</option>
                          <option>Nejran Airport</option>
                          <option>Al Qaisumah/Hafr Al Batin Airport</option>
                          <option>Rafha Domestic Airport</option>
                          <option>Arar Domestic Airport</option>
                          <option>Sharurah Airport</option>
                          <option>Al-Jawf Domestic Airport</option>
                          <option>Turaif Domestic Airport</option>
                          <option>Wadi Al Dawasir Airport</option>
                          <option>Al Wajh Domestic Airport</option>
                          <option>King Salman Abdulaziz Airport</option>
                          <option>King Khaled Military City Airport</option>
                        </select>
                        <!-- <input type="text" name="destination" placeholder="Destination"> -->
                        <select id="single_02" class="single-dropdown">
                          <option></option>  
                          <option>Al Kiswah Towers Hotel</option>
                          <option>Makkah Towers</option>
                          <option>Hotel Pullman ZamZam Makkah</option>
                          <option>Jabal Omar Marriott Hotel</option>
                          <option>Makkah</option>
                          <option>Novotel Makkah Thaker City</option>
                          <option>Hilton Makkah Convention Hotel</option>
                          <option>M Hotel Al Dana Makkah by Millennium</option>
                          <option>Swissôtel Makkah</option>
                          <option>Fairmont Makkah Clock Royal Tower</option>
                          <option>Conrad Makkah</option>
                          <option>Park Inn by Radisson</option>
                          <option>Makkah Al Naseem</option>
                          <option>DoubleTree by Hilton Makkah Jabal Omar</option>
                          <option>Four Points by Sheraton Makkah Al Naseem</option>
                          <option>Revan Hotel</option>
                          <option>Hilton Suites Makkah</option>
                          <option>Royal Al Mashaer Hotel</option>
                          <option>Makkah Hotel</option>
                          <option>Millennium Makkah Al Naseem</option>
                          <option>Elaf Bakkah Hotel</option>
                          <option>Swissôtel Al Maqam Makkah</option>
                          <option>King Abdulaziz International Airport</option>
                          <option>King Khaled International Airport</option>
                          <option>King Fahd International Airport</option>
                          <option>Prince Mohammad Bin Abdulaziz Airport</option>
                          <option>Gassim Airport</option>
                          <option>Ta’if Regional Airport</option>
                          <option>Prince Abdulmohsin Bin Abdulaziz Airport</option>
                          <option>Abha Regional Airport</option>
                          <option>Tabuk Airport</option>
                          <option>Ha'il Airport</option>
                          <option>Al Ahsa Airport</option>
                          <option>Jizan Regional Airport</option>
                          <option>Al Baha Airport</option>
                          <option>Bisha Airport</option>
                          <option>Gurayat Domestic Airport</option>
                          <option>Nejran Airport</option>
                          <option>Al Qaisumah/Hafr Al Batin Airport</option>
                          <option>Rafha Domestic Airport</option>
                          <option>Arar Domestic Airport</option>
                          <option>Sharurah Airport</option>
                          <option>Al-Jawf Domestic Airport</option>
                          <option>Turaif Domestic Airport</option>
                          <option>Wadi Al Dawasir Airport</option>
                          <option>Al Wajh Domestic Airport</option>
                          <option>King Salman Abdulaziz Airport</option>
                          <option>King Khaled Military City Airport</option>
                        </select>
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
                    <button class="primary-btn" type="submit">Request for Taxi</button>
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

      <section class="tickets">
        <div class="container">
          <div class="row">
            <div class="column column_01">
              <div class="image-holder">
                <img src=" {{ asset('assets/images/ticket.jpg') }}" alt="Umrah">
              </div>
            </div>
            <div class="column column_02">
              <div class="content-holder">
                <h2>Tired of booking online tickets?</h2>
                <h3>let us do your work.</h3>
              </div>
            </div>
            <div class="column column_03">
              <div class="btn-holder">
                <a href="https://wa.me/447999451002" class="primary-btn">Contact Us</a>
              </div>
            </div>
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
                <a href="https://wa.me/447999451002" class="primary-btn">Contact Us</a>
              </div>
          </div>

          <div class="accordion-holder">
          <button class="accordion"><h3>3 Star Hotels</h3></button>
          <div class="panel">
          <div class="row">
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_01.jpg') }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 3 Star Umrah Package</h2>
                <h3>3 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Nawazi Watheer)</h5>
                <h5>3 Nights Madinah (Dar Al Eiman Al Nour)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£729 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src=" {{ asset('assets/images/hotel_02.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>10 Days 3 Star Umrah Package</h2>
                <h3>3 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>5 Nights Makkah (Al Kiswah Tower)</h5>
                <h5>5 Nights Madina (Al Eiman Ohud Hotel)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£799 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_03.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>14 Days 3 Star Umrah Package</h2>
                <h3>3 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>7 Nights Makkah (Al Kiswah Tower)</h5>
                <h5>7 Nights Madina (Al Eiman Ohud Hotel)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£869 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_04.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>12 Days 3 Star March Umrah Package</h2>
                <h3>3 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>6 Nights Makkah (Nawazi Watheer)</h5>
                <h5>6 Nights Madina (Dar Al Eiman Al Nour)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£920 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_05.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>First 10 Days 3 Star Ramadan Umrah Package</h2>
                <h3>3 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>5 Nights Makkah (Dar Al Eiman Al Sud Hotel)</h5>
                <h5>5 Nights Madina (Al Eiman Al Qibla)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£999 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">  
              <div class="image-holder">
                <img src="{{ asset('assets/images/hotel_06.jpg') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>Second 10 Days 3 Star Ramadan Umrah Package</h2>
                <h3>3 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>5 Nights Makkah (Qasr Ajyad Alsad 2 Hotel)</h5>
                <h5>5 Nights Madina (AL Ansar New Palace Hotel)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£1080 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
          </div>
          </div>

          <button class="accordion"><h3>4 Star Hotels</h3></button>
          <div class="panel">
          <div class="row">
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/4star-2.png') }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>12 Nights 4 Star Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>6 Nights Makkah (Nawazi Watheer)</h5>
                <h5>6 Nights Madina (Rawdat Al Aqeeq)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£999 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src=" {{ asset('assets/images/4star-1.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£860 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/4star-3.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>10 Days 4 Star Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>5 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>5 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£910 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/4star-4.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 4 Star Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Grand)</h5>
                <h5>3 Nights Madina (Saja Al Madinah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£10,147 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/4star-5.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>Special 12 Days 4 Star Ramadan Umrah Package</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>10 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>2 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£1999 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">  
              <div class="image-holder">
                <img src="{{ asset('assets/images/4star-1.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>10 Days 4 Star Ramadan Umrah Packages From England</h2>
                <h3>4 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>5 Nights Makkah (Nawazi Watheer)</h5>
                <h5>5 Nights Madina (Al Mukhtara International Hotel)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£10,147 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
          </div>
          </div>

          <button class="accordion"><h3>5 Star Hotels</h3></button>
          <div class="panel">
          <div class="row">
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/5star_01.png') }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 5 Star Umrah Package</h2>
                <h3>5 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Pullman Zamzam Makkah)</h5>
                <h5>3 Nights Madina (Al Eiman Royal)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£1000 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src=" {{ asset('assets/images/5star_02.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>7 Days 5 Star Umrah Package</h2>
                <h3>5 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Anjum Hotel)</h5>
                <h5>3 Nights Madina (Rawadh Suites)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£986 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/5star_03.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>10 Days 5 Star Umrah Package</h2>
                <h3>5 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£1299 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/5star_04.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>12 Days 5 Star Umrah Package</h2>
                <h3>5 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>1699 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('assets/images/5star_05.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>10 Days 5 Star Umrah Package</h2>
                <h3>5 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£1399 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            <div class="column">  
              <div class="image-holder">
                <img src="{{ asset('assets/images/5star_06.png') }}" alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>Special 12 Days 5 Star Ramadan Umrah Package</h2>
                <h3>5 Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>4 Nights Makkah (Dar Al Eiman Ajyad)</h5>
                <h5>3 Nights Madina (Al Eiman Taibah)</h5>
                <div class="pkg_footer_holder">
                <p><strong>£2199 </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
          </div>
          </div>
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
                  <img src="{{ asset('assets/images/gmc.png') }}" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>GMC Makkah to Madina: 1000 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Ziyarat Makkah: 500 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Ziyarat Madina: 400 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Jaddah Airport to Makkah Hotels: 350 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Makkah hotel to Jaddah: 300 Riyal </li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Madina to Madina hotel: 200 Riyal </li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Madina hotel Madina Airport: 200 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>GMC Makkah Taif Ziyarat: 700 Riyal</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                <img src="{{ asset('assets/images/h1.png') }}" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>H1 Makkah to Madina: 700 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Ziyarat Makkah: 350 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Ziyarat Madina: 300 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Jaddah Airport to Makkah Hotels: 350 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Makkah hotel to Jaddah: 300 Riyal </li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Madina to Madina hotel: 200 Riyal </li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Madina hotel Madina Airport: 200 Riyal</li>
                    <li><i class="fa fa-solid fa-check"></i>H1 Makkah Taif Ziyarat: 700 Riyal</li>
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

      <section class="passport">
        <div class="container">
          <div class="row">
            <div class="columns">
              <div class="image-holder">
                <img src=" {{ asset('assets/images/passport.jpg') }}" alt="Umrah">
              </div>
              <div class="content-holder">
                <h1>Are you British Citizen?</h1>
                <h2>Avail Our Visa Services.</h2>
                <a href="https://wa.me/447999451002" class="primary-btn">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="whatsapp-icon">
        <a href="https://wa.me/447999451002" target="_blank">
          <img src="{{ asset('assets/images/whatsapp.png') }}" alt="Whatsapp">
        </a>
      </div>

      <div class="phone-icon">
        <a href="tel:+44 7999 451002">
          <img src="{{ asset('assets/images/phone.png') }}" alt="Phone">
        </a>
      </div>
      

@endsection


