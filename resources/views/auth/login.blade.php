<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    {{-- <link href="/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    {{-- <link href="/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet"> --}}

    <!-------------------------- Dason Styles -------------------------->
    <!-- App favicon -->
    <link rel="shortcut icon" href="dason/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="dason/css/preloader.min.css" type="text/css">

    <!-- Bootstrap Css -->
    <link href="dason/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="dason/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="dason/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body data-topbar="dark" class="pace-done ">
    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0 justify-content-center">
                <div class="col-xxl-3 col-lg-4 col-md-5 my-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <span class="logo-txt">{{ $web_title->judul_website }}</span>
                                    </a>
                                </div>
                                <div class="auth-content my-3">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Gagal</strong>
                                            <p>{{ $errors->first() }}</p>
                                        </div>
                                    @endif
                                    <form class="mt-2 pt-2" id="form-login" method="POST" action="/login">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input type="text" name="email" class="form-control" id="input-email"
                                                placeholder="Enter User Name">
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-users">
                                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                </svg>
                                            </div>
                                            @error('email')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>

                                        <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                            <input type="password" name="password" class="form-control pe-5"
                                                id="password-input" placeholder="Enter Password">

                                            <button type="button"
                                                class="btn btn-link position-absolute h-100 end-0 top-0"
                                                id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Kata Sandi</label>
                                            <div class="form-floating-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-lock">
                                                    <rect x="3" y="11" width="18" height="11" rx="2"
                                                        ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg>
                                            </div>
                                            @error('password')
                                                <small class="text-danger">
                                                    {{ $message }}
                                                </small>
                                            @enderror
                                        </div>

                                        {{-- <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check font-size-15">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="remember-check">
                                                    <label class="form-check-label font-size-13" for="remember-check">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>

                                        </div> --}}
                                        <div class="mb-1">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> Dason Store
                                        {{-- <i class="mdi mdi-heart text-danger"></i> by DPS --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>


    <!-- JAVASCRIPT -->
    <script src="dason/libs/jquery/jquery.min.js"></script>
    <script src="dason/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dason/libs/metismenu/metisMenu.min.js"></script>
    <script src="dason/libs/simplebar/simplebar.min.js"></script>
    <script src="dason/libs/node-waves/waves.min.js"></script>
    <script src="dason/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="dason/libs/pace-js/pace.min.js"></script>

    <script src="dason/js/pages/pass-addon.init.js"></script>

    <script src="dason/js/pages/feather-icon.init.js"></script>
    <script>
        $(function() {

            function setCookie(name, value, days) {
                var expires = "";
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            $('#form-login').submit(function(e) {
                e.preventDefault();

                const email = $('#input-email').val();
                const password = $('#password-input').val();
                const csrf_token = $('meta[name="csrf-token"]').attr('content')

                $.ajax({
                    url: '/login',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password,
                        _token: csrf_token
                    },
                    success: function(data) {
                        if (!data.success) {
                            alert(data.message)
                        }

                        localStorage.setItem('token', data.token)
                        window.location.href = '/dashboard';

                    }
                });
            });

        });
    </script>


</body>


</html>
