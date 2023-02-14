@extends('adminlte::page')

@section('title', 'Asociados')

@section('content_header')
<h1>
    Productos
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Asociados</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipo Producto</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($empleado as $empleados)


<tr>
  
<td>{{$empleados->id}}</td>
<td>{{$empleados->tipo_productos_id}} </td>
<td>{{$empleados->Descripcion}} </td>


    <td>

    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-category-{{$empleados->id}}">
    Editar
    </button>
   
    <form action="{{ route('admin.productos.delete', $empleados->id) }}" method="POST">
    {{csrf_field()}}
    @method('DELETE')
    <button class="btn btn-danger"> Eliminar  </button>
    </form>
    </td>
 
  </tr>

<!-- modal update-->
@include('admin.productos.modal-update-category')
<!-- /.modal -->

@endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th scope="col">ID</th>
                            <th scope="col">Tipo Producto</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
           
           <form method="POST" action="{{ route('admin.productos.store') }}">
           {{csrf_field()}}
           <div class="modal-body">
               

               
                <div class="form-group">
 
                <label for="tipo_productos_id" >Listado de Tipos de Productos </label>
                <select name="tipo_productos_id" id="tipo_productos_id"class="form-control" >
                    <option value="">---Elije el tipo de Producto---</option>

                    @foreach ($tproductos as $tproducto)

                        <option value="{{$tproducto->id}}">  {{$tproducto->DescripcionProducto}} </option>


                    @endforeach


                </select>


                </div>

                <div class="col-auto">
                <label> Descripcion </label>
                <input type="text" class="form-control"  id="Descripcion" name="Descripcion" placeholder="Descripcion">


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
<!-- /.modal -->





@stop

@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop