<!doctype html>
<html lang="en">


{{--  <!-- Mirrored from demos.adminmart.com/free/bootstrap/modernize-bootstrap-lite/src/html/index.html by HTTrack Website Copier/3.x [XR&CO2014], Thu, 23 Feb 2023 10:50:09 GMT -->  --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevsSpace CMS</title>
    <link rel="shortcut icon" type="image/png" href="{{ url('admin/assets/images/logos/devsspave.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.7/tagify.min.css" integrity="sha512-Ft73YZFLhxI8baaoTdSPN8jKRPhYu441A8pqlqf/CvGkUOaLCLm59ZWMdls8lMBPjs1OZ31Vt3cmZsdBa3EnMw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('admin/assets/css/styles.min.css') }}" />

</head>

<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">


        @include('admin.layout.sidebar')

        <div class="body-wrapper">

            @include('admin.layout.header')

            @yield('content')
        </div>
    </div>
    <script src="{{ url('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ url('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ url('admin/assets/js/app.min.js') }}"></script>
    <script src="{{ url('admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ url('admin/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.7/tagify.min.js" integrity="sha512-BO4lu2XUJSxHo+BD3WLBQ9QoYgmtSv/X/4XFsseeCAxK+eILeyEXtGLHFs2UMfzNN9lhtoGy8v8EMFPIl8y+0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>2
    <script src="{{ url('admin/assets/js/dashboard.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>


</html>
