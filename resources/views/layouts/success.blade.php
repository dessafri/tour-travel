<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @stack('prepend-style')
    @include('includes.style')
    <title>@yield('title')</title>
    @stack('addon-style')
</head>

<body>
    <!-- navbar -->
    @include('includes.navbar-alternate')
    <!-- header -->
    @yield('content')
    @include('includes.script')
    @stack('prepend-script')
    @stack('addon-script')


</body>

</html>
