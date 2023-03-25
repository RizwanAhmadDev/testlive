@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">

                        @if(Session::has('error_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Error Message</strong> {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h5 class="card-title fw-semibold mb-4">Add Hotel</h5>
                        <form action=" {{ route('insertHotel') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="stars" class="form-label">Select the Taxi</label>
                                        <select name="stars" id="stars" class="form-control">
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="excerpt" class="form-label">Nights in Makkah</label>
                                        <input type="text" class="form-control" id="title" name="nights_in_makkah" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="featuredImage" class="form-label">Hotel Image</label>
                                        <input type="file" id="hotrl_image" name="hotel_image" class="form-control">
                                    </div>
                                        <div class="mb-3">
                                            <label for="seoTitle" class="form-label">Nights in Madinah</label>
                                            <input type="text" name="nights_in_madinah" id="seoTitle" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="seoDescription" class="form-label">Price</label>
                                            <input type="text" name="price" id="seoDescription" class="form-control">
                                        </div>
                                      
                                </div>
                              
                            </div>
                            <button type="submit" class="btn btn-primary">Add post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://devsspace.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">DevsSpace</a></p>
        </div>
    </div>
@endsection
