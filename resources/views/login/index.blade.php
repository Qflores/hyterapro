<!DOCTYPE html>
<html lang="en">

<head>
    <title>Corte Superior de Justicia de Lima Este - CSJLE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ url("plantillas/login/images/Frontis-Palacio-1.jpg")}}')">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Acceder a hytera
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}"
                    autocomplete="off">
                    @csrf
                    @error('email')
                    <span>
                        <br>
                        <strong>{{ $message }} Por favor comunicarse con el área de Informática.</strong>

                    </span>
                    @enderror
                    @error('password')
                    <span>
                        <br>
                        <strong>{{ $message }} Por favor comunicarse con el área de Informática.</strong>
                    </span>
                    @enderror
                    <div class="wrap-input100 validate-input" data-validate="Ingrese Correo Electrónico">
                        <input class="input100 @error('email') is-invalid @enderror" type="text" name="email"
                            placeholder="Correo Electrónico">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Ingrese Contraseña">
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                            placeholder="Contraseña">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Iniciar Sesión
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('plantillas/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('plantillas/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('plantillas/login/js/main.js') }}"></script>

</body>

</html>