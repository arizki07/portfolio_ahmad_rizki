<!DOCTYPE html>
<html lang="en">

@include('layouts/landing/head')
@yield('css')

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    @include('layouts/landing/navbar')
    @yield('content_landing')


    @include('layouts/landing/footer')


    @yield('modal')
    @include('layouts/landing/script')

</body>

</html>
