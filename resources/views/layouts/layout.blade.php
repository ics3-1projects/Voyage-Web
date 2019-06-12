<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    @include('includes.head')
    <script src="https://kit.fontawesome.com/64dfcfd3ff.js"></script>
</head>

<body>
    @include('includes.navbar')
    <div id="main">
        @yield('content')
    </div>
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        @include('includes.footer')
    </footer>

    @include('includes.scripts')
</body>

</html>