<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>BAITS</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('backend/') }}/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('backend/') }}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/') }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/') }}/favicon/favicon-16x16.png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">

</head>

<body>
    <div class="wrap" id="app">
        @include('backend.layouts.include.header')

        <div class="page-body">
            @include('backend.layouts.include.leftsidebar')

            <div class="content">
                <admin-main></admin-main>
            </div>

            @include('backend.layouts.include.rightsidebar')
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/backend.js') }}" defer></script>

</body>

</html>
