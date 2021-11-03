</div>
<div class="modal-footer d-flex justify-content-center">

    <button type="button" wire:click.prevent="resetUI()" class="btn btn-danger close-btn "
        data-dismiss="modal">Cerrar</button>

    @if($selected_id < 1 ) <button type="submit" class="btn btn-primary close-modal">
        Guardar</button>
        @else
        <button type="submit" class="btn btn-info close-modal">Actualizar</button>
        @endif
</div>
</div>
</div>
</div>