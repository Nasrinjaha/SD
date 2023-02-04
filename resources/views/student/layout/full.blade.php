<!DOCTYPE html>
<html lang="en">
<head>
    @include('student.include.header')
</head>
<body>
    @include('student.include.navbar')

    @yield('content')

    @include('student.include.footer')

    @yield('extra')
</body>
</html>