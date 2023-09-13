<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('master') }}/images/favicon_1.ico">

    <title>Inventory</title>

    <!-- Base Css Files -->
    <link href="{{ asset('master') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('master') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('master') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="{{ asset('master') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('master') }}/css/animate.css" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{ asset('master') }}/css/waves-effect.css" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('master') }}/css/helper.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('master') }}/css/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="{{ asset('master') }}/js/modernizr.min.js"></script>

</head>

<body>


    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-heading bg-img">
                <div class="bg-overlay"></div>
                <h3 class="text-center m-t-10 text-white"> Sign In</h3>
            </div>


            <div class="panel-body">
                <form class="form-horizontal m-t-20" action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="email" required="" name="email"
                            @error('email')
                            is-invalid
                            @enderror
                            placeholder="Email">
                        </div>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="text" required="" name="name"
                            @error('name')
                            is-invalid
                            @enderror
                            placeholder="Username">
                        </div>


                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" required="" name="password"
                            @error('password')
                            is-invalid
                            @enderror
                             placeholder="Password">
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">

                        <div class="col-xs-12">
                            <input id="password-confirm" type="password" class="form-control"
                             name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox" checked="">
                                <label for="checkbox-signup">
                                    I accept <a href="#">Terms and Conditions</a>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('login') }}">Already have account?</a>
                        </div>
                    </div>
                </form>
                </div>

        </div>
    </div>


    <script>
        var resizefunc = [];
    </script>
    <script src="{{ asset('master') }}/js/jquery.min.js"></script>
    <script src="{{ asset('master') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('master') }}/js/waves.js"></script>
    <script src="{{ asset('master') }}/js/wow.min.js"></script>
    <script src="{{ asset('master') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ asset('master') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-detectmobile/detect.js"></script>
    <script src="{{ asset('master') }}/assets/fastclick/fastclick.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="{{ asset('master') }}/assets/jquery-blockui/jquery.blockUI.js"></script>


    <!-- CUSTOM JS -->
    <script src="{{ asset('master') }}/js/jquery.app.js"></script>

</body>

</html>



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
