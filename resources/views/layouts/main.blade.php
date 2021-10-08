<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('cdns')
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>@yield('title', 'MyTravel')</title>
</head>
<body>
    {{-- HEADER --}}
    @include('includes.header')
    <main >
        @yield('main-content')
    </main>
    {{-- FOOTER --}}
    @include('includes.footer')

    {{-- js --}}
    @yield('script')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>