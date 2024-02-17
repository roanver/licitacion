<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite('resources/css/app.css')
    <title>Cargar Archivo</title>
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

        <div class="max-w-sm mx-auto rounded-md border-none bg-grey-200 ">

          @if(session('status'))
          <div class=" my-4 flex justify-center font-light text-center w-60 h-7 bg-green-400 rounded">{{session('status')}}</div>
          @endif
          @if($errors->first('file'))
            <div class="my-4 flex justify-center font-ligth text-center w-72 h-7 bg-rose-500 rounded">{{$errors->first('file')}}</div>
            @endif
          <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="archivo" class=" ">Cargar Archivo:</label>
                  <input type="file" class="text-sm text-gray-500 rounded-lg my-6 cursor-pointer file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-blue-500 file:font-bold file:text-white file:cursor-pointer" id="archivo" name="file" accept=".csv" required>
              </div>
              <button type="submit" class="w-full h-10 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold ">Subir Archivo</button>
          </form>
      </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>
</body>
</html>