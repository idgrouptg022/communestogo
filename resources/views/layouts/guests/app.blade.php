<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMMUNES TOGO</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/master.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/guests/footer.css') }}">
    @stack('extra-styles')
</head>
<body>

    {{-- @include('includes.guests.header') --}}
    @include('includes.guests.navbar')
    @yield('content')
    @include('includes.guests.footer')

    <script src="{{ asset('assets/scripts/guests/app.js') }}"></script>
    <script src="{{ asset('assets/scripts/guests/navbar.js') }}"></script>
    @stack("extra-scripts")
</body>
</html>
