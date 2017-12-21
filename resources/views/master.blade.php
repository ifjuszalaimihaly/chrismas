<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- App Styles -->
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <img id="logo" src="/front/images/logo.jpg" class="img-responsive">
            @yield('content')
        </div>
    </div>
</div>
<!-- App js -->
<script src="/js/app.js"></script>
</body>
</html>