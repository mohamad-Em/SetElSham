<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Login Admin</title>

    <!-- Site favicon -->

    <!-- Mobile Specific Metas -->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/styles/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
</head>
<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">

            </div>

        </div>
        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-lg-3">
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Login Admin</h2>
                            </div>
                            <form action="{{ route('admin.store') }}" method="POST">
                                @csrf
                                <div class="input-group custom">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                    </div>

                                </div>
                                @error('email')
                                <h5 class="alert alert-danger">{{ $message }}</h5>
                                @enderror
                                <div class="input-group custom">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                    </div>

                                </div>
                                @error('password')
                                <h5 class="alert alert-danger">{{ $message }}</h5>
                                @enderror
                                <div class="row pb-30">

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Login">
                                        </div>

                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="{{ asset('assets/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('assets/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('assets/vendors/scripts/layout-settings.js') }}"></script>
</body>
</html>
