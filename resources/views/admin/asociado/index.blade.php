@extends('adminlte::page')

@section('title', 'Asociados')

@section('content_header')
<h1>
    Asociados-Clientes
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
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">DPI</th>
                            <th scope="col">Fecha Ingreso</th>
                            <th scope="col">Telefono/Celular</th>
                            <th scope="col">Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($empleado as $empleados)

<tr>
  
<td>{{$empleados->id}}</td>
<td>{{$empleados->PrimerNombre}} {{$empleados->SegundoNombre}}
    {{$empleados->PrimerApellido}} {{$empleados->SegundoApellido}}      
</td>
    <td>{{$empleados->DPI}}
    <td>{{$empleados->fechaInicio}}
    <td>{{$empleados->Telefono}}


    <td>

    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-category-{{$empleados->id}}">
    Editar
    </button>
   
    <form action="{{ route('admin.asociado.delete', $empleados->id) }}" method="POST">
    {{csrf_field()}}
    @method('DELETE')
    <button class="btn btn-danger"> Eliminar  </button>
    </form>
    </td>
 
  </tr>

<!-- modal update-->
@include('admin.asociado.modal-update-category')
<!-- /.modal -->

@endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                        <th scope="col">ID</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">DPI</th>
                            <th scope="col">Fecha Ingreso</th>
                            <th scope="col">Telefono/Celular</th>
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
                <h4 class="modal-title">Agregar Empleado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
           
           <form method="POST" action="{{ route('CAsociado') }}">
           {{csrf_field()}}
           <div class="modal-body">
                <div class="row g-3">

                <div class="col-auto">
 
                <input type="text" class="form-control" id="codigo_Empleado" name="codigo_Empleado" placeholder="Codigo Empleado">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="nit" name="nit" placeholder="NIT">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="DPI" name="DPI" placeholder="DPI">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="pasaporte" name="pasaporte" placeholder="Pasaporte">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="fe_edad" name="fe_edad" placeholder="Fe de Edad">


                </div>



                <div class="col-auto">

                <input type="text" class="form-control" id="PrimerNombre" name="PrimerNombre" placeholder="Primer Nombre">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="SegundoNombre" name="SegundoNombre" placeholder="Segundo Nombre">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="PrimerApellido" name="PrimerApellido" placeholder="Primer Apellido">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="SegundoApellido" name="SegundoApellido" placeholder="Segundo Apellido">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha Nacimiento">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="fechaInicio" name="fechaInicio" placeholder="Fecha Inicio">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="Profesion" name="Profesion" placeholder="Profesion">


                </div>

                <div class="col-auto">

                <input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" placeholder="Estado Civil">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="referenciaLa1" name="referenciaLa1" placeholder="Referencia Laboral 1">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="telefonoReferencia1" name="telefonoReferencia1" placeholder="Telefono Referencia">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="referenciaLa2" name="referenciaLa2" placeholder="Referencia Laboral 2">


                </div>


                <div class="col-auto">

                <input type="text" class="form-control" id="telefonoReferencia2" name="telefonoReferencia2" placeholder="Telefono Referencia">


                </div>

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