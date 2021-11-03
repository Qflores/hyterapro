<div>

    <div class="card cols-md-1">
        <div class="card-header form-inline bg-info">
            <h3 class="text-white">Lista de proyectos</h3>
            <div class="form-inline">
                <input wire:model="search" class="form-control mr-sm-2 ml-sm-2" type="search" placeholder="Buscar"
                    aria-label="busacr">
                <button wire:click="$set('search','')" class="btn btn-danger my-2 my-sm-0 ml-sm-2"
                    type="submit">limpiar</button>
                <button data-toggle="modal" data-target="#modalForm" wire:click="create()"
                    class="btn btn-primary ml-sm-2">Nuevo Proyecto</button>
            </div>
        </div>

        {!! '<span class="badge bg-danger">'.$mensaje.'</span>' !!}

        <div class="card-body">
            <table class="table table-striped flex-wrap">
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
                        <th><button class="btn btn-info" data-toggle="modal" data-target="#modalForm"
                                wire:click="edit({{ $proyecto->id }})">Editar</button>
                        </th>
                    </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
        <div class="card-footer">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-4">
                <!--  paginado--->
                {{$proyectos->links()}}
            </div>
        </div>


        {{-- incluyendo moda @ livewire('livewire.proyectos.form') @include('livewire.proyectos.form')--}}

        @include('livewire.proyectos.form')

        <script>
            document.addEventListener('DOMContentLoaded', function(){
                window.livewire.on('show-modal', msg=>{
                    $('#modalForm').modal('show');
                });
                window.livewire.on('hide-modal', msg=>{
                    $('#formproyect')[0].reset();
                $('#modalForm').modal('hide');
                });
            });
        </script>

    </div>
</div>