<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>

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
    <style>
        .error-msg {
            color: red;
            margin-bottom: 10px !important;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 10px !important;
        }
    </style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <h3 class="text-center mb-3">Register Here</h3>
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('admin_assets/images/icon/logo.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ url('/sendregisterdata') }}" method="POST" autocomplete="on">
                                @csrf
                                <div class="form-group mt-2">
                                    <label>Enter Name</label>
                                    <input class="au-input au-input--full" type="text" name="username" id=""
                                        placeholder="Enter Username" value="{{ old('username') }}">
                                </div>
                                <span class="error-msg">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="form-group mt-2">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" id=""
                                        placeholder="Enter Email Address" value="{{ old('email') }}">
                                </div>
                                <span class="error-msg">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>


                                <div class="form-group mt-2">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        id="" placeholder="Enter Password" value="{{ old('password') }}">
                                </div>
                                <span class="error-msg">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>

                                <div class="form-group mt-2">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="cpassword"
                                        id="" placeholder="Enter Confirm Password"
                                        value="{{ old('cpassword') }}">
                                </div>
                                <span class="error-msg">
                                    @error('cpassword')
                                        {{ $message }}
                                    @enderror
                                </span>

                                <div class="form-group mt-2">
                                    <label>Mobile Number</label>
                                    <input class="au-input au-input--full" type="number" name="mobilenumber"
                                        id="" placeholder="Enter Mobile Number"
                                        value="{{ old('mobilenumber') }}">
                                </div>
                                <span class="error-msg">
                                    @error('mobilenumber')
                                        {{ $message }}
                                    @enderror
                                </span>


                                <button class="au-btn au-btn--block au-btn--green m-b-20"
                                    type="submit">Register</button>

                                @if (session()->has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session('message') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                @endif
                            </form>
                        </div>
                    </div>
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
