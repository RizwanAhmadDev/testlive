@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Edit Route</h5>
                        <form action=" {{ url('updateRoute/'.$route->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Name</label>
                                        <input type="text" value="{{ $route->name }}" class="form-control" id="title" name="name" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Price</label>
                                        <input type="text" value="{{ $route->price }}" class="form-control" id="title" name="price" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Currency</label>
                                        <input type="text" value="{{ $route->currency }}" class="form-control" id="title" name="currency" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="taxi_id" class="form-label">Select the Taxi</label>
                                        <select name="taxi_id" id="taxi_id" class="form-control">
                                            @foreach ($taxi as $e)
                                                <option value="{{ $e->id }}">{{ $e->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="taxi_id" class="form-label">Select the Taxi</label>
                                        <select name="taxi_id" id="taxi_id" class="form-control">
                                           // @foreach ($route as $e)
                                                <option value="//{{ $e->taxiroute->id }}">//{{ $e->taxiroute->name }}</option>
                                            //@endforeach
                                        </select>
                                    </div> --}}
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
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
