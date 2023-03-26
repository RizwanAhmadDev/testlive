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
                    {{-- @if ($item->taxiroute->name == 'Camry') --}}
                  <img src="{{ asset('/assets/uploads/taxiimages/'.$item->taxiroute->taxi_picture) }}" alt="Car">
                </div>
                <div class="car-props">
                  <ul id="car-menu">
                    <li><i class="fa fa-solid fa-check"></i>{{$item->taxiroute->name}} {{$item->name}}: {{$item->price}} {{$item->currency}}</li>
                  </ul>
                  <form action="{{ url('checkout') }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="car-btn-holder">
                      <input type="hidden" name="route" value="{{$item->name}}">
                    <input type="hidden" name="taxi_price" value="{{$item->price}}">
                    <input type="hidden" name="taxi_name" value="{{$item->taxiroute->name}}">
            <button type="submit" class="primary-btn" id="carBtn">Book Ride</button>

          </div>
        </form>
                </div>
              </div>
              {{-- @endif --}}
            </div>
            @endforeach

          </div>

        </div>
      </section>

      @endsection
