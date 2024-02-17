<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Usuarios</title>
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

  <div class=" mx-20 ">
    <table class="min-w-full bg-white">
      <div>
        <form action="{{route('user.viewCreate')}}" method="get">
          {{ csrf_field() }}
        <button class=" w-32 h-10 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold ">Crear</button>
      </form>
      </div>
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="px-6 py-3 text-left">ID</th>
          <th class="px-6 py-3 text-left">Nombre</th>
          <th class="px-6 py-3 text-left">Correo</th>
          <th class="px-6 py-3 text-left mx-20">Acciones</th>
        </tr>
      </thead>
      <tbody class="bg-blue-200 border-b-4">
        @foreach($usuarios as $usuario)
        <!-- Aquí irán los datos de la tabla -->
        <tr class="border-b-2">
          <td class="px-6 py-4 ">{{$usuario->id}}</td>
          <td class="px-6 py-4 ">{{$usuario->name}}</td>
          <td class="px-6 py-4 ">{{$usuario->email}}</td>
          <td class="px-6 py-4 ">
            <a href="{{route('user.editView', $usuario->id)}}"class="text-indigo-600 hover:text-indigo-900">Editar</a>
            <a href="{{route('user.delete', $usuario->id)}}" class="text-red-600 hover:text-red-900 ml-2">Eliminar</a>
          </td>
        </tr>
        @endforeach
        <!-- Más filas según sea necesario -->
      </tbody>
    </table>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>


</body>
</html>
