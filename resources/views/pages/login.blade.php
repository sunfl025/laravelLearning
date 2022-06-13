<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Adminto - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

</head>

<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class="text-center">
            <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
            <h5 class="text-muted mt-0 font-600">Responsive Admin Dashboard</h5>
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold mb-0">Sign In</h4>
            </div>

            @if (session('message'))
                <br>
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            <div class="p-20">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('postAuthen') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="text" value="{{ old('email') }}"
                                placeholder="email...">
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password"
                                value="{{ old('password') }}" placeholder="password...">
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light"
                                type="submit">Log In</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- end card-box-->


    </div>
    <!-- end wrapper page -->

</body>

</html>
