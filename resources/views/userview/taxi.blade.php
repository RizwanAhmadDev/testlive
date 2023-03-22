@extends('admin.layout.layout-user')
@section('content')
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
            <a href="tel:+44 7999 451002" class="primary-btn" id="carBtn">Book Ride</a>
          </div>
        </div>
      </section>

      @endsection