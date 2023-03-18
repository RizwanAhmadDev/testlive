@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <div class="row justify-space-between">
                            <h5 class="card-title fw-semibold mb-4 col-md-8">All  Users</h5>
                            <div class="col-md-4 text-end">
                                <a href="{{ route('addusers') }}" class="btn btn-primary">Add User</a>
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
                                        <h6 class="fw-semibold mb-0">Username</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Email</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Role</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                        <tr>
                                            <td class="border-bottom-0">{{ $item->id }}</td>
                                            <td class="border-bottom-0">{{ $item->name }}</td>
                                            <td class="border-bottom-0">{{ $item->email }}</td>
                                            <td class="border-bottom-0">
                                                @if ($item->status == 'Active')
                                                    <div class="badge bg-success p-2 px-3 rounded">{{ $item->status }}</div>
                                                @elseif($item->status == 'Inactive')
                                                    <div class="badge bg-danger p-2 px-3 rounded">{{ $item->status }}</div>
                                                @endif
                                            </td>
                                            <td class="border-bottom-0">{{ $item->role }}</td>
                                            <td class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0 fs-4">
                                                    <a href="{{ url('Users/edituser/'.$item->id) }}"><i class="ti ti-pencil"></i></a>
                                                    <a href="{{ url('Users/deleteuser/'.$item->id) }}"><i class="ti ti-trash"></i></a>
                                                </h6>
                                            </td>
                                        </tr>
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
