<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Platform Education Blog</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- END STYLE CSS --}}
</head>
<body>
    @if (Route::is('login'))
        @yield('content-auth')
    @elseif(Route::is('homepage'))
        @yield('content-homepage')
    @else
        <main class="dashboard">
            @include('components.sidebar')
            @yield('content-dashboard')
        </main>
    @endif

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.slim.min.js') }}"></script>
    @stack('js')
    {{-- END SCRIPT JS --}}
</body>
</html>
