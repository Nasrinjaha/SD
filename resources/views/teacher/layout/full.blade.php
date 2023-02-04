<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.header');
</head>
<body>
    @include('include.navbar');

    @yield('content');

    @include('include.footer');

    @yield('extra');
</body>
</html>