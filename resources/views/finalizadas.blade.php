<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario de Inicio de Sesión</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('users')}}">Users</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('licitaciones')}}">Licitaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('importV')}}">Cargar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('logout')}}">logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<style>
        /* Estilo adicional para el contenedor de la tabla */
        .tabla-contenedor {
            max-height: 80vh; /* Altura máxima del 80% del viewport height */
            margin: 20px; /* Margen de 20 píxeles */
            overflow-y: auto; /* Agrega una barra de desplazamiento vertical cuando es necesario */
        }
    </style>

<!-- <div class="container tabla-contenedor">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>numero_cotizacion</th>
                <th>nombre_cotizacion</th>
                <th>sku_producto</th>
                <th>nombre_producto</th>
                <th>organismo_publico</th>
                <th>proveedor_adjudicado</th>
                <th>fecha_adjudicacion</th>
                <th>status</th>
                <th>orden_compra</th>
                <th>estado_aphix</th>
                <th>comentario</th>
                Añade más encabezados según tu estructura de datos -->
            <!-- </tr>
        </thead>
        <tbody>
            @foreach($licitaciones as $licitacion)
            <tr>
                <td>{{$licitacion->id}}</td>
                <td>{{$licitacion->numero_cotizacion}}</td>
                <td>{{$licitacion->nombre_cotizacion}}</td>
                <td>{{$licitacion->sku_producto}}</td>
                <td>{{$licitacion->nombre_producto}}</td>
                <td>{{$licitacion->organismo_publico}}</td>
                <td>{{$licitacion->proveedor_adjudicado}}</td>
                <td>{{$licitacion->fecha_adjudicacion}}</td>
                <td>{{$licitacion->status}}</td>
                <td>{{$licitacion->orden_compra}}</td>
                <td>{{$licitacion->estado_aphix}}</td>
                <td>{{$licitacion->comentario}}</td>
            </tr>
            @endforeach
            
            Agrega más filas según tus datos -->
        <!-- </tbody>
    </table> -->


    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('licitaciones')}}">Publicadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Participando</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="">Finalizadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="">Descartadas</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>
</body>
</html>