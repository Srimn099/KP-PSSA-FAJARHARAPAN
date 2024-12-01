<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FAJAR HARAPAN</title>
        <link rel="shortcut icon" href="{{ asset('public/assets/images/light-logo.png') }}">
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
    <body class="auth-pages">
        <x-notifs.notif />

        <form action="{{ url('/aksiLogin') }}" class="auth-form" method="POST">
            @csrf
            <div class="form-header">
                <img src="{{ asset('public/assets/images/dark-logo.png') }}" alt="logo" class="w-full h-auto">
                <h2>FAJAR HARAPAN</h2>
            </div>
            <div class="form-body">
                <div class="form-group">
                    <div class="form-icons">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" autocomplete="off">
                    @error('email')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-icons">
                        <i class="bi bi-lock"></i>
                    </div>
                    <input type="password" name="password" placeholder="Email" class="form-control @error('password') is-invalid @enderror" autocomplete="off">
                    <div class="form-icons-toggle">
                        <i class="bi bi-eye-slash"></i>
                    </div>
                    @error('password')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button class="btn btn-primary">SIGN IN</button>
                </div>
            </div>
        </form>
    </body>

    <script src="{{ asset('public/assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/datatables.net/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
    @stack('js')
    <script>
        $(document).ready(function(){
            $('.form-icons-toggle').click(function(){
                if($(this).find('i').hasClass('bi-eye-slash')){
                    $(this).find('i').removeClass('bi-eye-slash').addClass('bi-eye');
                    $(this).parent().find('input').attr('type', 'text');
                }else{
                    $(this).find('i').removeClass('bi-eye').addClass('bi-eye-slash');
                    $(this).parent().find('input').attr('type', 'password');
                }
            });
        });
    </script>

</html>
