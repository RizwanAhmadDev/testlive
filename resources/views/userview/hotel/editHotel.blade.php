@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Edit Hotel</h5>
                        <form action=" {{ url('updateHotel/'.$hotel->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" value="{{ $hotel->title }}" class="form-control" id="title" name="title" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="stars" class="form-label">Select the Star</label>
                                        <select name="stars" id="stars" class="form-control">
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="featuredImage" class="form-label">Hotel Image</label>
                                        <input type="file" id="hotel_image" name="hotel_image" class="form-control">
                                    </div>
                                    <!-- Display the current image -->
                                    <div class="mb-3">
                                        <label class="form-label">Current Hotel Image</label>
                                        <div id="currentImageContainer">
                                            @if($hotel->hotel_image)
                                                <img src="{{ asset('assets/uploads/hotelimages/' . $hotel->hotel_image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                            @else
                                                <p>No image available</p>
                                            @endif
                                        </div>
                                        </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Nights in Makkah</label>
                                        <textarea name="nights_in_makkah" class="form-control" id="nights_in_makkah" cols="30" rows="3">{{ $hotel->nights_in_makkah }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Nights in Madinah</label>
                                        <textarea name="nights_in_madinah" class="form-control" id="nights_in_madinah" cols="30" rows="3">{{ $hotel->nights_in_madinah }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Price</label>
                                        <textarea name="price" class="form-control" id="price" cols="30" rows="3">{{ $hotel->price }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#hotel_image').change(function () {
                displaySelectedImage(this);
            });

            function displaySelectedImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#currentImageContainer').html('<img src="' + e.target.result + '" alt="New Image" class="img-thumbnail" style="max-width: 200px;">');
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
    </script>   