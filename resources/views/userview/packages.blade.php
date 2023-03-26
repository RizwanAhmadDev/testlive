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
            <!-- 3 star -->
            @foreach($star_3 as $item)
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('/assets/uploads/hotelimages/'.$item->hotel_image) }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>{{$item->title}}</h2>
                <h3>{{$item->stars}} Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>{{$item->nights_in_makkah}}</h5>
                <h5>{{$item->nights_in_madinah}}</h5>
                <div class="pkg_footer_holder">
                <p><strong>£{{$item->price}} </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            @endforeach
          </div>
          </div>

          <button class="accordion"><h3>4 Star Hotels</h3></button>
          <div class="panel">
          <div class="row">
            <!-- 4 star -->
            @foreach($star_4 as $item)
            <div class="column">
              <div class="image-holder">
                <img src="{{ asset('/assets/uploads/hotelimages/'.$item->hotel_image) }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>{{$item->title}}</h2>
                <h3>{{$item->stars}} Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>{{$item->nights_in_makkah}}</h5>
                <h5>{{$item->nights_in_madinah}}</h5>
                <div class="pkg_footer_holder">
                <p><strong>£{{$item->price}} </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
            @endforeach
          </div>
          </div>

          <button class="accordion"><h3>5 Star Hotels</h3></button>
          <div class="panel">
          <div class="row">
            
          @foreach($star_5 as $item)
          <div class="column">
              <div class="image-holder">
                <img src="{{ asset('/assets/uploads/hotelimages/'.$item->hotel_image) }} " alt="Umrah">
              </div>
              <div class="details_holder">
                <h2>{{$item->title}}</h2>
                <h3>{{$item->stars}} Star <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h3>
                <h5>{{$item->nights_in_makkah}}</h5>
                <h5>{{$item->nights_in_madinah}}</h5>
                <div class="pkg_footer_holder">
                <p><strong>£{{$item->price}} </strong><small>per passenger</small></p>
              </div>
              <div class="button-holder">
                <a href="/contact" class="primary-btn">Book Now!</a>
              </div>
              </div>
              
            </div>
          </div>
          @endforeach
          </div>
          </div>
        </div>
      </section>

      @endsection