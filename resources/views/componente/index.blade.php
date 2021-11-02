@extends('home.master')

@section('content')
<div class="content">

    <div class="">
        <div class="card cols-md-1">
            <div class="card-header form-inline bg-success">
                <h3 class="text-white">Lista de Componentes</h3>
                <form class="form-inline">
                    <input class="form-control mr-sm-2 ml-sm-2" type="search" placeholder="Buscar" aria-label="busacr">
                    <button class="btn btn-danger my-2 my-sm-0 ml-sm-2" type="submit">Buscar</button>
                    <button class="btn btn-primary ml-sm-2">Nuevo Componente</button>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-striped  flex-wrap">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Componente</th>
                            <th>Descripción</th>
                            <th>Orden Prioridad</th>
                            <th>Presupuesto</th>
                            <th>Proyecto</th>
                            <th>Total Partidas</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($componentes as $componente)
                        <tr>
                            <th>{{ $componente->id }}</th>
                            <td>{{ $componente->name }}</td>
                            <td>{{ $componente->description }}</td>
                            <td>{{ $componente->order }}</td>
                            <td>S/.{{ $componente->presupuesto }}</td>
                            <td>{{ $componente->proyect_id }}</td>
                            <td><span class="badge badge-pill badge-info"> {{ $componente->partidas_count }} </span>
                            </td>
                            <td> <span class="badge badge-pill badge-{{ $componente->status==1?'success':'danger'
                                    }}">{{ $componente->status==1?'Activo':'Inactivo'
                                    }} </span></td>
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
</div>
@endsection