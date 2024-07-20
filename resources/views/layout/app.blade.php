<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dason | @yield('title') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/staradmin/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/staradmin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/staradmin/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/staradmin/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/staradmin/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('layout.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('layout.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <!-- Page Heading -->
                        <div class="col-sm-12 mb-3">
                            <div class="home-tab">
                                <div class="d-flex align-items-center justify-content-between">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <span class="nav-link ps-0 active" id="home-tab" data-bs-toggle="tab"
                                                href="#overview" role="tab" aria-controls="overview"
                                                aria-selected="true">@yield('title')</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @yield('content')
                        {{-- <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Default form</h4>
                                    <p class="card-description">
                                        Basic form layout
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Username</label>
                                            <input type="text" class="form-control" id="exampleInputUsername1"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Confirm Password</label>
                                            <input type="password" class="form-control"
                                                id="exampleInputConfirmPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Tanggal</label>
                                            <input type="date" class="form-control" id="exampleInputConfirmPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputConfirmPassword1">Kategori</label>
                                            <select class="form-control" id="formSelect" placeholder="Password">
                                                <option value="">Pilih Kategori</option>
                                                <option value="">Kategori 1</option>
                                                <option value="">Kategori 2</option>
                                            </select>
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                Remember me
                                                <i class="input-helper"></i></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div> --}}
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a>
                            from
                            BootstrapDash.</span>
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All
                            rights
                            reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/sbadmin2/js/sb-admin-2.min.js"></script>

    @stack('js')

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/staradmin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/staradmin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/staradmin/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="/staradmin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/staradmin/assets/js/off-canvas.js"></script>
    <script src="/staradmin/assets/js/template.js"></script>
    <script src="/staradmin/assets/js/settings.js"></script>
    <script src="/staradmin/assets/js/hoverable-collapse.js"></script>
    <script src="/staradmin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/staradmin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/staradmin/assets/js/dashboard.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>

</html>
