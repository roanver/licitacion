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



<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link " href="{{route('licitaciones')}}">Publicadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('participando')}}">Participando</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('finalizadas')}}">Finalizadas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{('descartadas')}}">Descartadas</a>
      </li>
    </ul>
  </div>
  </div>
  <div class="card-body">
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Estado Aphix </th>
                <th>Comentario</th>
                <th>N° Cotización</th>
                <th>Nombre Cotización</th>
                <th>SKU Producto</th>
                <th>Nombre Prducto</th>
                <th>Organismo Publico</th>
                <th>Proveedor Ajudicado</th>
                <th>Fecha Adjudicación</th>
                <th>Status</th>
                <th>Orden de Compra</th>
            </tr>
        </thead>
        <tbody>
            @foreach($licitaciones as $licitacion)
              <tr>
                <td>
                  <form id="form_{{ $licitacion->numero_cotizacion }}" action="{{ route('actualizarEstado', $licitacion->numero_cotizacion) }}" method="POST">
                      {{ csrf_field() }}
                      <select class="form-select form-select-sm" aria-label="Small select example" id="estado_aphix_{{ $licitacion->numero_cotizacion }}" name="estado_aphix" style="width:100px">
                          <option>{{ $licitacion->estado_aphix ? ucwords(strtolower($licitacion->estado_aphix)) : 'Sin Estado' }}</option>
                          <option value="participando">Participando</option>
                          <option value="participar">Participar</option>
                          <option value="revisar">Revisar</option>
                          <option value="descartar"></option>
                      </select>
                  </form>
                    <script>
                    $(document).ready(function () {
                          $('#estado_aphix_{{ $licitacion->numero_cotizacion }}').change(function () {
                              $('#form_{{ $licitacion->numero_cotizacion }}').submit();
                          });
                      });
                    </script>
                </td>
              
                <td > 
                  <form action="{{route('comentario', $licitacion->numero_cotizacion)}} "method="POST">
                    {{ csrf_field()}}
                    <textarea id ="comentario" name="comentario">{{$licitacion->comentario ? $licitacion->comentario : 'Sin comentario'}}
                    </textarea>
                    <button type="submit" class="btn btn-secondary">Comentar</button>
                  </form>
                  </td>
                  <td>{{$licitacion->numero_cotizacion}}</td>
                  <td>{{$licitacion->nombre_cotizacion}}</td>
                  <td>{{$licitacion->sku_producto}}</td>
                  <td>{{$licitacion->nombre_producto}}</td>
                  <td>{{$licitacion->organismo_publico}}</td>
                  <td>{{$licitacion->proveedor_adjudicado}}</td>
                  <td>{{$licitacion->fecha_adjudicacion}}</td>
                  <td>{{$licitacion->status}}</td>
                  <td>{{$licitacion->orden_compra}}</td>
              </tr>
              
            @endforeach

        </tbody>
      </table>
    </div>
  </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>
</body>
</html>