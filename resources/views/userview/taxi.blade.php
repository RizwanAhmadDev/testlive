@extends('admin.layout.layout-user')
@section('content')
<section class="car-items">
        <div class="container">
          <div class="section-head">
            <h1>Booking Options</h1>
          </div>
          <div class="row">
          @foreach ($car as $item)
            <div class="column car-column">
              <div class="column-content">
                <div class="image-holder">
                  <img src="{{ asset('/assets/uploads/taxiimages/'.$item->taxiroute->taxi_picture) }}" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>{{$item->taxiroute->name}} {{$item->name}}: {{$item->price}} {{$item->currency}}</li>
                  </ul>
                  <div class="car-btn-holder">
            <a href="tel:+44 7999 451002" class="primary-btn" id="carBtn">Book Ride</a>
          </div>
                </div>
              </div>
            </div>
            @endforeach
         
          </div>
          
        </div>
      </section>

      @endsection