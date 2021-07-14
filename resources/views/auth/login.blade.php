<!doctype html>
<html lang="en" class="fixed accounts lock-screen">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrap">

        <div class="page-body">

            <div class="logo">
                <div class="avatar">
                    <img alt="User photo" src="{{asset('backend/')}}/images/avatar/avatar_user.jpg" />
                </div>
            </div>
            <div class="box animated fadeInUp">
                <!--UNLOCK FORM-->
                <div class="panel">
                    <div class="panel-content bg-scale-0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h3 class="text-center mb-md">Admin Login</h3>
                            <div class="form-group">
                                <span class="input-with-icon">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder="Email">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span class="input-with-icon">
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder="Password">
                                    <i class="fa fa-key"></i>
                                </span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block ">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</html>
