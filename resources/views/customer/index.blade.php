@extends('home.master')

@section('content')
<div class="content">

    <div class="">
        <div class="card cols-md-1">
            <div class="card-header form-inline bg-warning">
                <h3 class="text-white">Lista de Proveedores</h3>
                <form class="form-inline">
                    <input class="form-control mr-sm-2 ml-sm-2" type="search" placeholder="Buscar" aria-label="busacr">
                    <button class="btn btn-danger my-2 my-sm-0 ml-sm-2" type="submit">Buscar</button>
                    <button class="btn btn-primary ml-sm-2">Nuevo Proveedor</button>
                </form>
            </div>
            <div class="card-body">
                <table class="table table-striped  flex-wrap">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Razon Social</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>N° RUC</th>
                            <th>Teléfono 1</th>
                            <th>Teléfono 2</th>
                            <th>Correo Electrónico</th>
                            <th>Nombre Contacto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($clientes as $cliente)
                        <tr>
                            <th>{{ $cliente->id }}</th>
                            <td>{{ $cliente->razon_social }}</td>
                            <td>{{ $cliente->address }}</td>
                            <td>{{ $cliente->status==1?'Activo':'Inactivo' }}</td>
                            <td>{{ $cliente->ruc }}</td>
                            <td>{{ $cliente->phone1 }}</td>
                            <td>{{ $cliente->phone2 }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->contacto_name }}</td>
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