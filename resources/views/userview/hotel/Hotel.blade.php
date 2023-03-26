@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="row justify-space-between">
                            <h5 class="card-title fw-semibold mb-4 col-md-8">All  Hotel</h5>
                            <div class="col-md-4 text-end">
                                <a href="{{ route('addHotel') }}" class="btn btn-primary">Add Hotel</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-nowrap mb-0 align-middle" id="poststable">
                                <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Title</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Stars</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Image</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nights in Makkah</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nights in Madinah</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Price</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hotel as $item)
                                        <tr>
                                            <td class="border-bottom-0">{{ $item->id }}</td>
                                            <td class="border-bottom-0">{{ $item->title }}</td>
                                            <td class="border-bottom-0">{{ $item->stars }}</td>
                                            <td class="border-bottom-0"><img width="50px" height="50px" src="{{ asset('/assets/uploads/hotelimages/'.$item->hotel_image) }}"></td>
                                            <td class="border-bottom-0">{{ $item->nights_in_makkah }}</td>
                                            <td>
                                            {{ $item->nights_in_madinah }}
                                            </td>
                                            <td>
                                            {{ $item->price }}
                                            </td>

                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0 fs-4">
                                                    <a href="{{ url('editHotel/'.$item->id) }}"><i class="ti ti-pencil"></i></a>
                                                    <a href="{{ url('deleteHotel/'.$item->id) }}"><i class="ti ti-trash"></i></a>
                                                </h6>
                                            </td>
                                        </tr>
                                        {{--  <tr>
                                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                                            </td>
                                            <td class="border-bottom-0">
                                                <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                                            </td>
                                            <td class="border-bottom-0">
                                                <div class="d-flex align-items-center gap-2">
                                                    <span class="badge bg-success rounded-3 fw-semibold">Approved</span>
                                                </div>
                                            </td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0 fs-4"><a href="edit"><i class="ti ti-pencil"></i></a>&nbsp;&nbsp;<a href="edit"><i class="ti ti-trash"></i></a></h6>
                                            </td>
                                        </tr>  --}}
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="https://devsspace.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">DevsSpace</a></p>
        </div>
    </div>
@endsection
