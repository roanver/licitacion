<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite('resources/css/app.css')
    <title>Crear Usuario</title>
</head>
<body>
  <nav class="p-5 bg-white shadow flex intems-center justify-between">
    <div>
    <span class="text-2xl">
        <a href="{{route('users')}}">Aphix</a>
    </span>
    </div>
    <ul class="flex items-center">
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500" href="{{route('users')}}">Usuarios</a>
      </li>
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500" href="{{route('licitaciones')}}">Licitaciones</a>
      </li>
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500"  href="{{route('importV')}}">Cargar</a>
      </li>
      <li class="mx-4">
        <a class="text-xl hover:text-blue-500"  href="{{route('logout')}}">logout</a>
      </li>
    </ul>
  </nav>

<br>
<br>

@if(session('status'))
  <div>{{session('status')}}</div>
@endif

  <div class="max-w-sm mx-auto rounded-md border-none ">
    <form action="{{route('user.create')}} "method="POST">
      {{ csrf_field() }}
        <div class="mb-3">
          <label for="name" class="text-md font-medium text-grey-700">Nombre</label>
          <input type="text" name="name" class=" w-full text-base px-2 py-2 my-2 border rounded " placeholder="Nombre">
        </div>
        <div class="mb-3">
          <label for="email" class="text-md font-medium text-grey-700">Email</label>
          <input type="email" name ="email" class=" w-full text-base px-2 py-2 my-2 border rounded " placeholder="Email"id="email" >
        </div>
        <div>
          <p>{{$errors->first('email')}}</p>
          <label for="password" class="text-md font-medium text-grey-700">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña" class="border w-full text-base px-2 py-2 my-2 rounded">
        </div>
        <button class="w-full h-10 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold  ">Crear</button>
    </form>
  </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>
</body>
</html>