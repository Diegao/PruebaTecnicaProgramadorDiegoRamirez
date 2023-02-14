@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
<h1>
    Empleados
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
    <td>{{$empleados->fechaInicioLabores}}
    <td>{{$empleados->Telefono}}


    <td>

    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-category-{{$empleados->id}}">
    Editar
    </button>
   
    <form action="{{ route('admin.employee.delete', $empleados->id) }}" method="POST">
    {{csrf_field()}}
    @method('DELETE')
    <button class="btn btn-danger"> Eliminar  </button>
    </form>
    </td>
 
  </tr>

<!-- modal update-->
@include('admin.employee.modal-update-category')
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
           
           <form method="POST" action="{{ route('admin.employee.store') }}">
           {{csrf_field()}}
           <div class="modal-body">
                <div class="row g-3">

                <div class="col-auto">
 
                <label> Codigo Empleado </label>
                <input type="text" class="form-control"  id="codigo_Empleado" name="codigo_Empleado" placeholder="Codigo Empleado">


                </div>

                <div class="col-auto">
                <label> Nit </label>
                <input type="text" class="form-control"  id="nit" name="nit" placeholder="NIT">


                </div>

                <div class="col-auto">
                <label> DPI </label>
                <input type="text" class="form-control"  id="DPI" name="DPI" placeholder="DPI">


                </div>

                <div class="col-auto">

                <label> Puesto </label>
                <input type="text" class="form-control"  id="puesto" name="puesto" placeholder="Puesto">


                </div>


                <div class="col-auto">
                <label> Primer Nombre </label>
                <input type="text" class="form-control"  id="PrimerNombre" name="PrimerNombre" placeholder="Primer Nombre">


                </div>


                <div class="col-auto">
                <label> Segundo Nombre</label>
                <input type="text" class="form-control"  id="SegundoNombre" name="SegundoNombre" placeholder="Segundo Nombre">


                </div>


                <div class="col-auto">
                <label> Primer Apellido</label>
                <input type="text" class="form-control"  id="PrimerApellido" name="PrimerApellido" placeholder="Primer Apellido">


                </div>


                <div class="col-auto">
                <label>Segundo Apellido </label>
                <input type="text" class="form-control"  id="SegundoApellido" name="SegundoApellido" placeholder="Segundo Apellido">


                </div>

                <div class="col-auto">
                <label>Fecha Nacimiento </label>
                <input type="text" class="form-control"  id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha Nacimiento">


                </div>

                <div class="col-auto">
                <label>Fecha Inicio </label>
                <input type="text" class="form-control"  id="fechaInicioLabores" name="fechaInicioLabores" placeholder="Fecha Inicio">


                </div>

                <div class="col-auto">
                <label>Profesion </label>
                <input type="text" class="form-control"  id="Profesion" name="Profesion" placeholder="Profesion">


                </div>

                <div class="col-auto">
                <label>Telefono </label>
                <input type="text" class="form-control"  id="Telefono" name="Telefono" placeholder="Telefono">


                </div>


                <div class="col-auto">
                <label>Estado Civil </label>
                <input type="text" class="form-control"  id="estadoCivil" name="estadoCivil" placeholder="Estado Civil">


                </div>


                <div class="col-auto">
                <label>Direccion </label>
                <input type="text" class="form-control"  id="Direccion" name="Direccion" placeholder="Direccion">


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