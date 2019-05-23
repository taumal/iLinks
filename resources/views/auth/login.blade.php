<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/startmin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center hidden-xs" style="height: 150px;">
            <h2><img src="{{ asset('img/iLinks.png') }}" alt="iLinks"></h2>
            <h3><small>Track Your Browsed Data</small></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" alt="login-banner-670x335.jpg" src="{{ asset('img/login-banner-670x335.jpg') }}">
        </div>
        <div class="col-md-4 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email" name="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                            <!-- Change this to a button or input when using this as a form -->
                            {{--<input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">--}}
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/metisMenu.min.js') }}" defer></script>
<script src="{{ asset('js/startmin.js') }}" defer></script>
</body>
</html>