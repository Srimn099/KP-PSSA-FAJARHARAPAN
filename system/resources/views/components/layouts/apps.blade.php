<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FAJAR HARAPAN</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('public/node_modules/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/tailwind.css') }}">

    </head>
    <body>
        <x-layouts.navbars />
        <section class="section-contents">
            {{ $slot }}
        </section>
        <x-notifs.notif />
    </body>

    <script src="{{ asset('public/assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/datatables.net/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    @stack('js')

</html>
