<div class="modal fade" id="modal-update-category-{{$empleados->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Asociado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
           
           <form method="POST" action="{{ route('admin.asociado.update', $empleados->id) }}">
           {{csrf_field()}}
           <div class="modal-body">
                <div class="row g-3">

                <div class="col-auto">
 
                <label> Codigo Empleado </label>
                <input type="text" class="form-control" value="{{$empleados->codigo_Empleado}}" id="codigo_Empleado" name="codigo_Empleado" placeholder="Codigo Empleado">


                </div>

                <div class="col-auto">
                <label> Nit </label>
                <input type="text" class="form-control" value="{{$empleados->nit}}" id="nit" name="nit" placeholder="NIT">


                </div>

                <div class="col-auto">
                <label> DPI </label>
                <input type="text" class="form-control" value="{{$empleados->DPI}}" id="DPI" name="DPI" placeholder="DPI">


                </div>

                <div class="col-auto">

                <label> Pasaporte </label>
                <input type="text" class="form-control" value="{{$empleados->pasaporte}}" id="pasaporte" name="pasaporte" placeholder="Pasaporte">


                </div>


                <div class="col-auto">
                <label> Fe de Edad </label>
                <input type="text" class="form-control" value="{{$empleados->fe_edad}}" id="fe_edad" name="fe_edad" placeholder="Fe de Edad">


                </div>



                <div class="col-auto">
                <label> Primer Nombre </label>
                <input type="text" class="form-control" value="{{$empleados->PrimerNombre}}" id="PrimerNombre" name="PrimerNombre" placeholder="Primer Nombre">


                </div>


                <div class="col-auto">
                <label> Segundo Nombre</label>
                <input type="text" class="form-control" value="{{$empleados->SegundoNombre}}" id="SegundoNombre" name="SegundoNombre" placeholder="Segundo Nombre">


                </div>


                <div class="col-auto">
                <label> Primer Apellido</label>
                <input type="text" class="form-control" value="{{$empleados->PrimerApellido}}" id="PrimerApellido" name="PrimerApellido" placeholder="Primer Apellido">


                </div>


                <div class="col-auto">
                <label>Segundo Apellido </label>
                <input type="text" class="form-control" value="{{$empleados->SegundoApellido}}" id="SegundoApellido" name="SegundoApellido" placeholder="Segundo Apellido">


                </div>

                <div class="col-auto">
                <label>Fecha Nacimiento </label>
                <input type="text" class="form-control" value="{{$empleados->fechaNacimiento}}" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha Nacimiento">


                </div>

                <div class="col-auto">
                <label>Fecha Inicio </label>
                <input type="text" class="form-control" value="{{$empleados->fechaInicio}}" id="fechaInicio" name="fechaInicio" placeholder="Fecha Inicio">


                </div>

                <div class="col-auto">
                <label>Profesion </label>
                <input type="text" class="form-control" value="{{$empleados->Profesion}}" id="Profesion" name="Profesion" placeholder="Profesion">


                </div>

                <div class="col-auto">
                <label>Telefono </label>
                <input type="text" class="form-control" value="{{$empleados->Telefono}}" id="Telefono" name="Telefono" placeholder="Telefono">


                </div>


                <div class="col-auto">
                <label>Estado Civil </label>
                <input type="text" class="form-control" value="{{$empleados->estadoCivil}}" id="estadoCivil" name="estadoCivil" placeholder="Estado Civil">


                </div>


                <div class="col-auto">
                <label>Referencia Laboral 1 </label>
                <input type="text" class="form-control" value="{{$empleados->referenciaLa1}}" id="referenciaLa1" name="referenciaLa1" placeholder="Referencia Laboral 1">


                </div>


                <div class="col-auto">
                <label>Telefono Referencia 1 </label>
                <input type="text" class="form-control" value="{{$empleados->telefonoReferencia1}}" id="telefonoReferencia1" name="telefonoReferencia1" placeholder="Telefono Referencia">


                </div>


                <div class="col-auto">
                <label> Referencia Laboral 2</label>
                <input type="text" class="form-control" value="{{$empleados->referenciaLa2}}" id="referenciaLa2" name="referenciaLa2" placeholder="Referencia Laboral 2">


                </div>


                <div class="col-auto">
                <label>Telefono Referencia2 </label>
                <input type="text" class="form-control" value="{{$empleados->telefonoReferencia2}}" id="telefonoReferencia2" name="telefonoReferencia2" placeholder="Telefono Referencia">


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

