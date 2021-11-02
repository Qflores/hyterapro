@extends('home.master')

@section('content')

<div class="content">
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">$71,503</h2>
                    <p>EGRESOS MENSUALES</p>
                    <div class="chartjs-wrapper">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1">$9,503</h2>
                    <p>EGRESOS DIARIAS</p>
                    <div class="chartjs-wrapper">
                        <canvas id="dual-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">$71,503</h2>
                    <p>GASTOS ACUMULADOS</p>
                    <div class="chartjs-wrapper">
                        <canvas id="area-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">$9,503</h2>
                    <p>TENDENCIA</p>
                    <div class="chartjs-wrapper">
                        <canvas id="line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-8 col-md-12">
            <!-- Sales Graph -->
            <div class="card card-default" data-scroll-height="675">
                <div class="card-header">
                    <h2>ESTAMINADO, AVANCE Y REAL</h2>
                </div>
                <div class="card-body">
                    <canvas id="linechart" class="chartjs"></canvas>
                </div>
                <div class="card-footer d-flex flex-wrap bg-white p-0">
                    <div class="col-6 px-0">
                        <div class="text-center p-4">
                            <h4>$600,308</h4>
                            <p class="mt-2">TOTAL ACUMULADO</p>
                        </div>
                    </div>
                    <div class="col-6 px-0">
                        <div class="text-center p-4 border-left">
                            <h4>$70,506</h4>
                            <p class="mt-2">POR EJECUTAR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <!-- Doughnut Chart -->
            <div class="card card-default" data-scroll-height="675">
                <div class="card-header justify-content-center">
                    <h2>GASTOS POR COMPONENTE</h2>
                </div>
                <div class="card-body">
                    <canvas id="doChart"></canvas>
                </div>
                <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2">
                    </i></a>
                <div class="card-footer d-flex flex-wrap bg-white p-0">
                    <div class="col-6">
                        <div class="py-4 px-4">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #4c84ff"></i>Componente en ejecucion</li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #80e1c1 "></i>Componente comcluido </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 border-left">
                        <div class="py-4 px-4 ">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #8061ef"></i>Componente reprogramados</li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #ffa128"></i>Componente pendiente </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">

            <!-- Polar and Radar Chart -->
            <div class="card card-default">
                <div class="card-header justify-content-center">
                    <h2>Saldos</h2>
                </div>
                <div class="card-body pt-0">
                    <ul class="nav nav-pills mb-5 mt-5 nav-style-fill nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Saldo actual </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Otros gastos</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <canvas id="polar"></canvas>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <canvas id="radar"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <!-- Top Sell Table -->
            <div class="card card-table-border-none" data-scroll-height="550">
                <div class="card-header justify-content-between">
                    <h2>Proveedores</h2>
                    <div>
                        <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                        <div class="dropdown show d-inline-block widget-dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-display="static"></a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
                                <li class="dropdown-item"><a href="#">pagados</a></li>
                                <li class="dropdown-item"><a href="#">por pagar</a></li>
                                <li class="dropdown-item"><a href="#">cotizados</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body slim-scroll py-0">
                    <table class="table ">
                        <tbody>
                            <tr>
                                <td class="text-dark">Un Buen compañia SAC</td>
                                <td class="text-center">9</td>
                                <td class="text-right">33% <i
                                        class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-dark">The company Shipp</td>
                                <td class="text-center">6</td>
                                <td class="text-right">75% <i
                                        class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-dark">Company Coat</td>
                                <td class="text-center">3</td>
                                <td class="text-right">50% <i
                                        class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-dark">Company Necklace</td>
                                <td class="text-center">7</td>
                                <td class="text-right">100% <i
                                        class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-dark">Company JeansPant</td>
                                <td class="text-center">10</td>
                                <td class="text-right">90% <i
                                        class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-dark">Company Shoes</td>
                                <td class="text-center">5</td>
                                <td class="text-right">100% <i
                                        class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer bg-white py-4">
                    <a href="#" class="btn-link py-3 text-uppercase">ver reporte</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <!-- Notification Table -->
            <div class="card card-default" data-scroll-height="550">
                <div class="card-header justify-content-between ">
                    <h2>Ultimos eventos</h2>
                    <div>
                        <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                        <div class="dropdown show d-inline-block widget-dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-display="static"></a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
                                <li class="dropdown-item"><a href="#">activos</a></li>
                                <li class="dropdown-item"><a href="#">Inantivos</a></li>
                                <li class="dropdown-item"><a href="#">Sin leer</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card-body slim-scroll">
                    <div class="media pb-3 align-items-center justify-content-between">
                        <div
                            class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                            <i class="mdi mdi-cart-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3 ">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Ultimas compras</a>
                            <p>Selena</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
                            10 AM</span>
                    </div>

                    <div class="media py-3 align-items-center justify-content-between">
                        <div
                            class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                            <i class="mdi mdi-email-outline font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Enquiry</a>
                            <p>Phileine</p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
                            9 AM</span>
                    </div>


                    <div class="media py-3 align-items-center justify-content-between">
                        <div
                            class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                            <i class="mdi mdi-stack-exchange font-size-20"></i>
                        </div>
                        <div class="media-body pr-3">
                            <a class="mt-0 mb-1 font-size-15 text-dark" href="#">Ticket</a>
                            <p>Emma </p>
                        </div>
                        <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
                            10 AM</span>
                    </div>

                </div>
                <div class="mt-3"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
                <div class="card-header justify-content-between">
                    <h2>Compras recientes</h2>
                    <div class="date-range-report ">
                        <span></span>
                    </div>
                </div>
                <div class="card-body pt-0 pb-5">
                    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th class="d-none d-md-table-cell">Unidad</th>
                                <th class="d-none d-md-table-cell">fecha</th>
                                <th class="d-none d-md-table-cell">Costo</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Coach Swagger</a>
                                </td>
                                <td class="d-none d-md-table-cell">1 Unit</td>
                                <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                                <td class="d-none d-md-table-cell">$230</td>
                                <td>
                                    <span class="badge badge-success">Completed</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                            id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdown-recent-order1">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                                </td>
                                <td class="d-none d-md-table-cell">2 Units</td>
                                <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                                <td class="d-none d-md-table-cell">$550</td>
                                <td>
                                    <span class="badge badge-warning">Delayed</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdown-recent-order2">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>24541</td>
                                <td>
                                    <a class="text-dark" href=""> Speed 500 Ignite</a>
                                </td>
                                <td class="d-none d-md-table-cell">1 Unit</td>
                                <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                                <td class="d-none d-md-table-cell">$150</td>
                                <td>
                                    <span class="badge badge-danger">Cancelled</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown show d-inline-block widget-dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-display="static"></a>
                                        <ul class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdown-recent-order5">
                                            <li class="dropdown-item">
                                                <a href="#">View</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Remove</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <!-- To Do list -->
            <div class="card card-default todo-table" id="todo" data-scroll-height="550">
                <div class="card-header justify-content-between">
                    <h2>Actividades</h2>
                    <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button"> Agregar task
                    </a>
                </div>
                <div class="card-body slim-scroll">
                    <div class="todo-single-item d-none" id="todo-input">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Todo" autofocus>
                            </div>
                        </form>
                    </div>
                    <div class="todo-list" id="todo-list">
                        <div class="todo-single-item d-flex flex-row justify-content-between finished">
                            <i class="mdi"></i>
                            <span>Requirimientos</span>
                            <span class="badge badge-primary">Terminados</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between current">
                            <i class="mdi"></i>
                            <span>prototipos</span>
                            <span class="badge badge-primary">Ejecucion</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                            <i class="mdi"></i>
                            <span> Cotizac</span>
                            <span class="badge badge-danger">Pendientes</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
            </div>
        </div>
        <div class="col-xl-6">
            <!-- area chart -->
            <div class="card card-default">
                <div class="card-header d-block d-md-flex justify-content-between">
                    <h2>Mis proyectos </h2>
                    <div class="dropdown show d-inline-block widget-dropdown ml-auto">
                        <a class="dropdown-toggle" href="#" role="button" id="world-dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-display="static">
                            mapa
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="world-dropdown">
                            <li class="dropdown-item"><a href="#">cat 1</a></li>
                            <li class="dropdown-item"><a href="#">cat 2</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body vector-map-world">
                    <div id="world" style="height: 100%; width: 100%;"></div>
                </div>
                <div class="card-footer d-flex flex-wrap bg-white p-0">
                    <div class="col-6">
                        <div class="p-4">
                            <ul class="d-flex flex-column justify-content-between">
                                <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #29cc97"></i>America <span class="float-right">5k</span></li>
                                <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
                                        style="color: #4c84ff "></i>peru <span class="float-right">3k</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
</div>

@endsection