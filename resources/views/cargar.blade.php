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

<br>
<br>

<div class="container mt-5">
    <div class="row">
        <!-- Carga de Archivo -->
        <div class="col-md-6">
            <h4>Cargar Archivo</h4>
            <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="archivo">Seleccionar Archivo:</label>
                    <input type="file" class="form-control-file" id="archivo" name="file" accept=".csv" required>
                </div>
                <button type="submit" class="btn btn-primary">Subir Archivo</button>
            </form>
        </div>

        <!-- Agregar Status y Comentario -->
        <div class="col-md-6">
            <h4>Agregar Status y Comentario</h4>

            <form action="{{route('update')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="codigo">Código:</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" required>
                </div>
                <div class="btn-group" role="group" aria-label="Estado">
                  <input type="radio" class="btn-check" id="descartar" name="status" value="descartar" autocomplete="off" required>
                  <label class="btn btn-outline-primary" for="descartar">Descartar</label>

                  <input type="radio" class="btn-check" id="revisar" name="status" value="revisar" autocomplete="off" required>
                  <label class="btn btn-outline-primary" for="revisar">Revisar</label>

                  <input type="radio" class="btn-check" id="participar" name="status" value="participar" autocomplete="off" required>
                  <label class="btn btn-outline-primary" for="participar">Participar</label>

                  <input type="radio" class="btn-check" id="participando" name="status" value="participando" autocomplete="off" required>
                  <label class="btn btn-outline-primary" for="participando">Participando</label>
                </div>
              
                <div class="form-group">
                    <label for="comentario">Comentario:</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Guardar Status y Comentario</button>
            </form>
        </div>
    </div>
</div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>
</body>
</html>