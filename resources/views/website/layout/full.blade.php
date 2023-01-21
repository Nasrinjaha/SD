<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.include.header');
</head>
<body>
    @include('website.include.navbar');

    @yield('content');

    @include('website.include.footer');

    @yield('extra');
</body>
</html>