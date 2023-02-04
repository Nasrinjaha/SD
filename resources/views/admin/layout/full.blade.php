<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.include.header')
</head>
<body>
    @include('admin.include.navbar')

    @yield('content')

    @include('admin.include.footer')

    @yield('extra')
</body>
</html>