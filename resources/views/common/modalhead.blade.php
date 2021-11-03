<div wire:ignore.self class="modal fade show" wire:modal="open" id="modalForm" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-info">
                <h4 class="modal-title w-100 font-weight-bold text-white">
                    {{ $componentName }} | {{ $selected_id >0 ? 'Editar Proyecto':'Crear Nuevo Proyecto' }}
                </h4>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h6 class="text-danger text-center text-lg font-bolt" wire:loading>Cargando. Por favor espere...</h6>

            <div class="modal-body mx-3">