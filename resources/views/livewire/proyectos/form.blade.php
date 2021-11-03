@if ($selected_id < 1)<form wire:submit.prevent="store" autocomplete="off" id="formproyect"> @method('POST') @else <form
        wire:submit.prevent="update" autocomplete="off" id="formproyect">
        @method('PUT') @endif
        @csrf
        @include('common.modalhead') <div>

            <div class="row col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="text-dark font-weight-medium" for="">Nombre del proyecto</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="mdi mdi-note"></i>
                            </span>
                        </div>
                        {{-- wire: model.lazy ="name" --}}
                        <input wire:model.lazy="nombre" type="text" class="form-control"
                            value="{{ $selected_id > 0 ? $pro->name:'' }}" placeholder="Ingrese nombre del proyecto">
                        @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="text-dark font-weight-medium" for="">Descripción</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="mdi mdi-note-text"></i>
                            </span>
                        </div>
                        <input wire:model.lazy="description" value="{{ $selected_id > 0? $pro->description : '' }}"
                            type="text" class="form-control" placeholder="Ingrese una descripción">
                        @error('description')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="text-dark font-weight-medium" for="">Fecha de Inicio</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="mdi mdi-calendar"></i>
                            </span>
                        </div>
                        <input wire:model.lazy="fecha_inicio" value="{{ $selected_id > 0 ? $pro->fecha_inicio: '' }}"
                            type="date" class="form-control">
                        @error('fecha_inicio')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <label class="text-dark font-weight-medium" for="">Fecha de Finalización</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="mdi mdi-calendar-check"></i>
                            </span>
                        </div>
                        <input wire:model.lazy="fecha_fin" type="date"
                            value="{{ $selected_id > 0 ? $pro->fecha_fin: '' }}" class="form-control">
                        @error('fecha_fin')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-12 mb-3">
                    <i class="mdi mdi-account"></i>
                    <label class="text-dark font-weight-medium" for="">Seleccionar un Cliente</label>
                    <div class="form-group">
                        <select wire:model.lazy="cliente_id" class="form-control">
                            @foreach ($clientes as $cliente)
                            @if ($selected_id>1)
                            <option {{ $cliente->id == $pro->cliente_id ? 'selected' :'' }} value="{{ $cliente->id
                                }}">{{
                                $cliente->razon_social }}</option>
                            @else
                            <option value="{{ $cliente->id }}">{{
                                $cliente->razon_social }}</option>

                            @endif

                            @endforeach

                        </select>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-3">
                    <i class="mdi mdi-teach"></i>
                    <label class="text-dark font-weight-medium" for="">Seleccionar Un
                        Jefe</label>

                    <div class="form-group">
                        <select wire:model.lazy="jefe_id" class="form-control">
                            @foreach ($users as $user)
                            @if ($selected_id>1)
                            <option {{ $user->id == $pro->jefe_id ? 'selected' :'' }} value="{{ $user->id
                                }}">{{
                                $user->name }}</option>
                            @else
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif

                            @endforeach
                        </select>

                    </div>
                </div>
            </div>

            <div class="row col-md-12 col-sm-12">
                <div class="col-md-6 col-sm-12 mb-3">
                    <i class="mdi mdi-hail"></i>
                    <label class="text-dark font-weight-medium" for="">Seleccionar un coordinador</label>

                    <div class="form-group">
                        <select wire:model.lazy="coordinador_id" class="form-control">
                            @foreach ($users as $user)
                            @if ($selected_id>1)
                            <option {{ $user->id == $pro->coordinador_id ? 'selected' :'' }} value="{{ $user->id
                                }}">{{
                                $user->name }}</option>
                            @else
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                </div>
            </div>

        </div>

        @include('common.modalfooter')

    </form>