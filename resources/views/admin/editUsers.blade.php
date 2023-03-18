@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Edit User</h5>
                        <form action=" {{ url('updateuser/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">First Name</label>
                                        <input type="text" value="{{ $user->name }}" class="form-control" id="title" name="name" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-control" name="role" id="role">
                                            <option value="Admin">Admin</option>
                                            <option value="Editor">Editor</option>
                                            <option value="User">User</option>
                                        </select>
                                    </div>
                                    {{--  <div class="mb-3">

                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" id="username" class="form-control">
                                    </div>  --}}
                                    {{--  <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>  --}}
                                    {{--  <div class="mb-3">
                                        <label for="profileImage" class="form-label">Profile Image</label>
                                        <input type="file" id="profileImage" class="form-control" accept=".png,.jpg">
                                    </div>  --}}
                                </div>
                                <div class="col-md-6">
                                    {{--  <div class="mb-3">
                                        <label for="title" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="title" name="title" >
                                    </div>  --}}
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" value="{{ $user->email }}" class="form-control" id="email" name="email" >
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>


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
