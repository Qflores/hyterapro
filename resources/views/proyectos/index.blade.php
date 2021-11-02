@extends('home.master')

@section('content')
<div class="content">
    <!-- Top Statistics -->
    <div class="">
        <!-- incluimos el componente livewire -->
        @livewire('proyects-index')

        <div class="card cols-md-1">
            <div class="card-header form-inline bg-info">
                <h3 class="text-white">Lista de proyectos</h3>
                <form class="form-inline">
                    <input class="form-control mr-sm-2 ml-sm-2" type="search" placeholder="Buscar" aria-label="busacr">
                    <button class="btn btn-danger my-2 my-sm-0 ml-sm-2" type="submit">Buscar</button>
                    <button class="btn btn-primary ml-sm-2">Nuevo Proyecto</button>
                </form>
            </div>

            <div class="card-body">
                <table class="table table-striped  flex-wrap">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha de Incio</th>
                            <th>Fecha de Fin</th>
                            <th>Cliente</th>
                            <th>Coordinador Proyecto</th>
                            <th>Jefe Proyecto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($proyectos as $proyecto )
                        <tr>
                            <th>{{ $proyecto->id }}</th>
                            <td>{{ $proyecto->name }}</td>
                            <td>{{ $proyecto->description }}</td>
                            <td>{{ $proyecto->status==1?'Activo':'Inactivo' }}</td>
                            <td>{{ $proyecto->fecha_inicio }}</td>
                            <td>{{ $proyecto->fecha_fin }}</td>
                            <td>{{ $proyecto->cliente->razon_social }}</td>
                            <td>{{ $proyecto->coordinador->name }}</td>
                            <td>{{ $proyecto->jefe->name }}</td>
                            <th><button class="btn btn-danger">Editar</button></th>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>otros</h3>
            </div>
        </div>
    </div>
    <br>
    <br>

</div>


@endsection