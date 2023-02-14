<div class="modal fade" id="modal-update-category-{{$empleados->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
           
           <form method="POST" action="{{ route('admin.productos.update', $empleados->id) }}">
           {{csrf_field()}}
           <div class="modal-body">
         

                <div class="form-group">
                <label> Descripcion </label>
                <input type="text" class="form-control" value="{{$empleados->Descripcion}}" id="Descripcion" name="Descripcion" placeholder="Descripcion">


                </div>

              
              
         
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>