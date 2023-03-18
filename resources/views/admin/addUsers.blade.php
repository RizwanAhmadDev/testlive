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
                        <h5 class="card-title fw-semibold mb-4">Add User</h5>
                        <form action=" {{ route('insertusers') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" >
                                    </div>
                                    <div class="mb-3">

                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                      <div class="mb-3">

                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="profileImage" class="form-label">Profile Image</label>
                                        <input type="file" name="profileImage" id="profileImage" class="form-control" accept=".png,.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" >
                                    </div>

                                    <input name="status" type="hidden" value="active">

                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-control" name="role" id="role">
                                            <option value="admin">Admin</option>
                                            <option value="editor">Editor</option>
                                            <option value="user">User</option>
                                        </select>
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
