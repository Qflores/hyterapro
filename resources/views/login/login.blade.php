<!DOCTYPE html>
<html lang="en">

<head>
    <title>HYTERA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('plantillas/login/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plantillas/login/css/main.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <style type="text/css">
        body {}

        input,
        textarea {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #D500F9 !important;
            outline-width: 0;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .card {
            border-radius: 0;
            border: none;
            height: 100%;
        }

        .card1 {
            width: 50%;
            padding: 40px 30px 10px 30px
        }

        .card2 {
            width: 50%;
            background: linear-gradient(rgba(255, 213, 79, .8), rgba(213, 0, 249, .8)),
            url(' {{ asset('plantillas/login/images/Frontis-Palacio-1.jpg') }} ');



        }

        #logo {
            width: 70px;
            height: 60px
        }

        .heading {
            margin-bottom: 60px !important
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1
        }

        :-ms-input-placeholder {
            color: #000 !important
        }

        ::-ms-input-placeholder {
            color: #000 !important
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-image: linear-gradient(to right, #FFD54F, #D500F9);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #D500F9, #FFD54F)
        }

        .btn-white {
            border-radius: 50px;
            color: #D500F9;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #D500F9 !important
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, #FFD54F, #D500F9)
        }

        a {
            color: #000
        }

        a:hover {
            color: #000
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important
        }

        .sm-text {
            font-size: 15px
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                padding: 40px 30px 10px 30px
            }

            .card2 {
                width: 100%
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important
            }

            .contenedor {
                height: 120% !important;
            }
        }





        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important
            }

            .card2 {
                padding: 50px
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important
            }
        }


        .size {
            font-size: 90px;
        }

        .size-2 {
            font-size: 35px;
            margin-left: 50px;
            margin-top: 20px;
        }

        .size-3 {
            font-size: 55px;
            margin-top: 20px;
        }

        .top {
            margin-top: 180px;
            text-align: center;
        }


        .num-1 {
            animation-name: 'nombre-fotograma-clave';
            animation-duration: 45s;
            animation-iteration-count: 10;

        }


        .num-2 {}


        @keyframes nombre_fotograma_clave {
            0% {
                left: 100px;
            }

            40% {
                left: 150px;
            }

            60% {
                left: 75px;
            }

            100% {
                left: 100px;
            }
        }
    </style>




</head>

<body>
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse contenedor" style="height: 100%">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3">
                            <img src="{{ asset('img/logo-hyt.png')}} " alt="logo" style="max-width:100%;height:auto;" />
                        </div>

                        @if (session('info'))
                        <div class="alert alert-danger">{{ session('info') }}</div>
                        @endif

                        <form class="login100-form validate-form p-b-33 p-t-5" method="POST"
                            action="{{ route('login') }}" autocomplete="off">
                            @csrf
                            <div class="form-group" data-validate="Ingrese Correo ELectronico">
                                <label class="form-control-label text-muted">Correo Electrónico</label>
                                <input type="text" id="email" name="email"
                                    class="reproductor form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="alert alert-danger">
                                    <strong>{{ $message }} </strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group" data-validate="Ingrese Contraseña">
                                <label class="form-control-label text-muted ">
                                    Contraseña
                                </label>
                                <input type="password" id="psw" name="password"
                                    class="reproductor-1 form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="alert alert-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group" data-validate="guardar sesión">
                                <label class=""> Recordar cuenta
                                    <input type="checkbox" name="savesession" class="form-control">
                                </label>
                            </div>

                            <div class="row justify-content-center my-3 px-3">
                                <button class="btn-block btn-color reproductor-2">Iniciar Sesión</button>
                            </div>
                        </form>
                        <div class="row justify-content-center my-2"> <a href="#"
                                class="link-white reproductor-3"><small>¿Olvidaste tu contraseña?</small></a> </div>
                    </div>
                </div>

            </div>
            <div class="card card2">
                <div class="mx-md-5 px-md-5 right">
                    <h1 class="text-white size top">SOFTWARE</h1>
                    <h1 class="text-white size-2">de seguimiento y control de proyectos
                    </h1>
                </div>
            </div>
        </div>
    </div>







    <div id="dropDownSelect1"></div>

    <script>
        let boton = document.querySelector(".reproductor")

    boton.addEventListener("click", () => {
      let etiquetaAudio = document.createElement("audio")
      etiquetaAudio.setAttribute("src", "public/audio/cajas-registradoras_3.mp3")
      etiquetaAudio.play()
    })
    </script>

    <script>
        let boton1 = document.querySelector(".reproductor-1")

    boton1.addEventListener("click", () => {
      let etiquetaAudio = document.createElement("audio")
      etiquetaAudio.setAttribute("src", "public/audio/cajas-registradoras_3.mp3")
      etiquetaAudio.play()
    })
    </script>
    <script>
        let boton2 = document.querySelector(".reproductor-2")

    boton2.addEventListener("click", () => {
      let etiquetaAudio = document.createElement("audio")
      etiquetaAudio.setAttribute("src", "public/audio/cajas-registradoras_3.mp3")
      etiquetaAudio.play()
    })
    </script>
    <script>
        let boton3 = document.querySelector(".reproductor-3")

    boton3.addEventListener("click", () => {
      let etiquetaAudio = document.createElement("audio")
      etiquetaAudio.setAttribute("src", "public/audio/cajas-registradoras_3.mp3")
      etiquetaAudio.play()
    })
    </script>

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