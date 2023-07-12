<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin_assets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('admin_assets/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8">
                <img src="{{ asset('admin_assets/images/Mar-Business_18.jpg') }}" alt="" class="img-fluid">
                <h2 style="color: #2e4471" class="text-center">Please Verify Your Email</h2>
                <h3 class="text-center mt-3" style="color: #2e4471">Go back to <a href="{{ url('/login') }}">Login
                        Page</a></h3>

                <div class="text-center mt-5">
                    <form action="{{ url('/email/verification-notification') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Resend Email</button>
                    </form>
                    @if (session()->has('message'))
                       <h3 style="color: #2e4471" class="mt-2">{{ session('message') }}</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('admin_assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin_assets/vendor/wow/wow.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('admin_assets/js/main.js') }}"></script>

</body>

</html>
