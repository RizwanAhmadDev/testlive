@extends('admin.layout.layout-user')
@section('content')
<section class="packages inner-packages">
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

      @endsection