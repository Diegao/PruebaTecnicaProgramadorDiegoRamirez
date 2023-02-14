<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asociado</title>

    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">


</head>
<body>

<nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logoguayacan.jpg')}}" width="200" alt="" loading="lazy">
            </a>
        </div>
 

    <!-- Contenido -->
    <section class="container-fluid content">




        <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('login') }}">Menu Guayacan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Pagina Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('tablas') }}">Ver Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('post') }}">Ver Posts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('viewAsociado') }}">Ver Asociado</a>
        </li>

       
      </ul>

      <!-- Button trigger modal -->



      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar Asociado
</button>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Asociado </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
      <form method="POST" action="{{ route('CreateAsociado') }}">
{{csrf_field()}}

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
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
        <button type="submit" class="btn btn-primary">CREAR</button>
    </div>



</form >

      </div>
     
    </div>
  </div>
</div>

    </div>
  </div>



<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
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
      <td>{{$empleados->PrimerNombre}} {{$empleados->SegundoNombre}} </td>
      <td>{{$empleados->PrimerApellido}} {{$empleados->SegundoApellido}} </td>
      <td>{{$empleados->DPI}}
      <td>{{$empleados->fechaInicio}}
      <td>{{$empleados->Telefono}}


      <td>

      <button class="btn btn-warning"> Editar  </button>
      <button class="btn btn-danger"> Eliminar  </button>

      </td>
   
    </tr>

  @endforeach
 

  </tbody>
</table>



      <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logoguayacan.jpg')}}" alt="YouDevs logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a >
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a >
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
                <a >
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2020 DRMC 1997, Prueba. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>