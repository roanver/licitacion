<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

    <div class="p-5 bg-violet-100 flex items-center justify-between">
        <div class="card-header">
          <ul class="flex items-center">
            <li class=" mx-6">
              <a class=" {{ Request::is('licitaciones') ? 'text-blue-500 font-bold ' : ''}}" href="{{route('licitaciones')}}">Publicadas</a>
            </li>
            <li class="max-6">
              <a class="nav-link {{ Request::is('participando') ? 'active' : ''}}" href="{{route('participando')}}">Participando</a>
            </li>
            <li class="mx-6">
              <a class="nav-link {{ Request::is('finalizadas') ? 'active' : ''}}" href="{{route('finalizadas')}}">Finalizadas</a>
            </li>
            <li class="mx-4">
              <a class="nav-link {{ Request::is('descartadas') ? 'active' : ''}}" href="{{route('descartadas')}}">Descartadas</a>
            </li>
          </ul>
      </div >

      <div class="mx-4">
        <form action=" {{route('buscador')}}" method="get" class="d-flex ">
          {{ csrf_field()}}
            <input type="text" class="mx-1 my-1 w-56 h-8 border  border-blue-500 rounded focus:ring-4 focus:ring-blue-300 focus:border-blue-300"  id="buscador" value=""name="buscador" placeholder="Buscador...">
            <input type="hidden" name="estado_aphix" value="publicadas">
            <button class="w-24 h-8 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold " type="submit">Search</button>
          </form>
        </div>                                                                          
    </div>


      <div class=" overflow-x-auto mb-4">
        
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
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
                    
                </tr>
            </thead>
            <tbody class="mx-4">
                @foreach($licitaciones as $licitacion)
                <tr class="border-b-2">
                  <td>
                    <form id="form_{{ $licitacion->numero_cotizacion }}" action="{{ route('actualizarEstado', $licitacion->numero_cotizacion) }}" method="POST">
                        {{ csrf_field() }}
                        <select class="form-select form-select-sm" aria-label="Small select example" id="estado_aphix_{{ $licitacion->numero_cotizacion }}" name="estado_aphix" style="width:100px">
                            <option>{{ $licitacion->estado_aphix ? ucwords(strtolower($licitacion->estado_aphix)) : 'Sin Estado' }}</option>
                            <option value="participando">Participando</option>
                            <option value="participar">Participar</option>
                            <option value="revisar">Revisar</option>
                            <option value="descartar">Descartar</option>
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
                      
                  </tr>
                  
                @endforeach

            </tbody>
          </table>
      </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></scrip>
  

</body>
</html>