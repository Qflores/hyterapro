<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>HYTERA</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />


    <!-- SLEEK CSS -->
    <link href="{{ asset('backend/assets/css/sleek.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('backend/assets/img/favicon.png') }}" rel="shortcut icon" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>

    @livewireStyles

    <!-- Scripts-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    @stack('styles')

</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">



    <script>
        NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->

        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand" style="background-color: rgb(255 255 255 / 80%);">
                    <a href="{{ route('dashboard') }}">
                        <img style="max-width:170px" src="{{ asset('img/hytera-logo.png') }}" alt="">
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">



                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">TABLERO</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="active">
                                        <a class="sidenav-item-link" href="{{ route('proyecto.index') }}">
                                            <span class="nav-text">PROYECTOS</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a class="sidenav-item-link" href="{{ route('componente.index') }}">
                                            <span class="nav-text">COMPONENTES</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">PARTIDAS</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">ESTADISTICAS</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">ANALISIS</span>
                                            <span class="badge badge-success">5</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                <i class="mdi mdi-folder-multiple-outline"></i>
                                <span class="nav-text">STAKEHOLDERS</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#components" aria-expanded="false" aria-controls="components">
                                            <span class="nav-text">PROVEEDOR</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="components">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="{{ route('cliente.index') }}">EXTERNOS</a>
                                                </li>

                                                <li>
                                                    <a href="">PARNNER</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>

                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#icons" aria-expanded="false" aria-controls="icons">
                                            <span class="nav-text">ESTIMACIONES</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="icons">
                                            <div class="sub-menu">
                                                <li>
                                                    <a href="">INGRESAR</a>
                                                </li>
                                                <li>
                                                    <a href="">BUSCAR</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#charts" aria-expanded="false" aria-controls="charts">
                                <i class="mdi mdi-chart-pie"></i>
                                <span class="nav-text">GRAFICAS ESTADISTICAS</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">TENDECIAS</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#customer" aria-expanded="false" aria-controls="customer">
                                <i class="mdi mdi-chart-pie"></i>
                                <span class="nav-text">CLIENTES</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="customer" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{ route('cliente.index') }}">
                                            <span class="nav-text">EXTERNOS</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                <span class="nav-text">Documentation</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="section-title">
                                        REQUIRIMIENTOS
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">REQUIRIMIENTO 1</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">REQUIRIMIENTO 2</span>

                                        </a>
                                    </li>

                                    <li class="section-title">
                                        HISTORIAL
                                    </li>
                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#headers" aria-expanded="false" aria-controls="headers">
                                            <span class="nav-text">EXPEDIENTES</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="headers">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="">EXPEDIENTE Y</a>
                                                </li>

                                                <li>
                                                    <a href="">EXPEDIENTE M</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>


                                    <li>
                                        <a class="sidenav-item-link" href="">
                                            <span class="nav-text">Configuraciones</span>

                                        </a>
                                    </li>

                                </div>
                            </ul>
                        </li>
                    </ul>

                </div>

                <hr class="separator" />

                <div class="sidebar-footer">
                    <div class="sidebar-footer-content">
                        <h6 class="text-uppercase">
                            Avance de proyecto Y <span class="float-right">45%</span>
                        </h6>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                        </div>
                        <h6 class="text-uppercase">
                            Por culminar <span class="float-right">55%</span>
                        </h6>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Navegación</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="Ingrese Nombre de proyecto" autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <!-- Github Link Button -->

                            <li class="dropdown notifications-menu">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">tienes notificaciones</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> Nuevo usuario Registrado
                                            <span class=" font-size-12 d-inline-block float-right">
                                                <i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> Usuario 1452 Eliminado
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="{{ asset('backend/assets/img/user/user.png') }}" class="user-image"
                                        alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Adminmistrador</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="{{ asset('backend/assets/img/user/user.png') }}" class="img-circle"
                                            alt="User Image" />
                                        <div class="d-inline-block">
                                            User Hytera <small class="pt-1">hytera.admin@gmail.com</small>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account"></i> Mi perfil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <form method="POST" style="display:inline-block" action="logout">
                                                @csrf
                                                <button type="sutmit">
                                                    <i class="mdi mdi-account"></i> Cerrar sesión
                                                </button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>

            <div class="content-wrapper">

                @yield('content')

            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>&copy;
                        <span id="copy-year">2021</span> Copyright Todo los derechos reservados
                        <a class="text-primary" href="" target="_blank"></a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/date-range.js') }}"></script>
    <script src="{{ asset('backend/assets/js/map.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

    @livewireScripts

    <!-- AQUI SE VA INSERTAR CODIGO JAVASCRIPT-->

    @stack('scripts')

</body>

</html>