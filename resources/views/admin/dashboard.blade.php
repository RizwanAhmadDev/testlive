@extends('admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)" class="h1 text-center d-block">0</a>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-6 text-center"> <i class="ti ti-clipboard-text"></i> Posts</h6>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)" class="h1 text-center d-block">0</a>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-6 text-center"> <i class="ti ti-message-dots"></i> Comments</h6>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)" class="h1 text-center d-block">0</a>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-6 text-center"> <i class="ti ti-users"></i> Users</h6>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)" class="h1 text-center d-block">0</a>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold fs-6 text-center"><i class="ti ti-users"></i> Forum submission</h6>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Traffic Overview</h5>
                  </div>
                  <div>
                    <select class="form-select">
                      <option value="1">March 2023</option>
                      <option value="2">April 2023</option>
                      <option value="3">May 2023</option>
                      <option value="4">June 2023</option>
                    </select>
                  </div>
                </div>
                <div id="chart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Form Submissions</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">$36,358</h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2023</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Monthly Signups </h5>
                        <h4 class="fw-semibold mb-3">$6,820</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-users fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Posts</h5>
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
                          <h6 class="fw-semibold mb-0">User</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                            <span class="fw-normal">Web Designer</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">Elite Admin</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">Pending</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">$3.9</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                            <span class="fw-normal">Project Manager</span>
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
                          <h6 class="fw-semibold mb-0 fs-4">$24.5k</h6>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{ asset('admin/assets/images/products/s4.jpg') }}" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$50 <span class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{ asset('admin/assets/images/products/s5.jpg') }}" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$650 <span class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{ asset('admin/assets/images/products/s7.jpg') }}" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$150 <span class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{ asset('admin/assets/images/products/s11.jpg') }}" class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)" class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>                      </div>
              <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-semibold fs-4 mb-0">$285 <span class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span></h6>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                  </ul>
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
