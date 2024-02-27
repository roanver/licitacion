@include('layout.nav', ['title' => 'Descartadas'])
@include('layout.nav_licitaciones', ['estado'=> 'descartadas',  'menu' => $menu ?? ''])


<div class=" overflow-x-auto mx-1 mb-4">
        
  <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
          <tr>
            <th class="px-3">Estado Aphix </th>
            <th class="px-3">Comentario</th>
            <th class="px-6">Nombre Cotización</th>
            <th class="pl-3" >Nombre Producto</th>
            <th >Organismo Público</th>
            <th >Proveedor Adjudicado</th>
            <th >Fecha Adjudicación</th>
            <th >Status</th>
              
          </tr>
      </thead>
      <tbody class="mx-4">
          @foreach($licitaciones as $licitacion)
          <tr class="border-b-2">
            <td class="pr-3">
              <form id="form_{{ $licitacion->numero_cotizacion }}" action="{{ route('actualizarEstado', $licitacion->numero_cotizacion) }}" method="POST">
                  {{ csrf_field() }}
                  <select class="w-30 border border-2 border-gray-400 rounded " aria-label="Small select example" id="estado_aphix_{{ $licitacion->numero_cotizacion }}">
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
                  <textarea id ="comentario" class="mx-full border border-2 border-gray-500 rounded " name="comentario">{{$licitacion->comentario ? $licitacion->comentario : 'Sin comentario'}}
                  </textarea>
                  <button type="submit" class="w-24 h-8 bg-blue-500 text-center rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold " >Comentar</button>
                </form>
                </td>

                <td class="pr-3">{{$licitacion->numero_cotizacion. ' - ' .$licitacion->nombre_cotizacion}}</td>
                <td  >{{$licitacion->nombre_producto}}</td>
                <td >{{$licitacion->organismo_publico}}</td>
                <td >{{$licitacion->proveedor_adjudicado}}</td>
                <td >{{$licitacion->fecha_adjudicado}}</td>
                <td >{{$licitacion->status}}</td>
                
            </tr>
            
          @endforeach

      </tbody>
    </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      @if(session('estadoComentario'))
        <script>
          const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          }
        });
        Toast.fire({
          icon: "success",
          title: "Comentario guardado."
        });
        </script>
        @endif

        @if(session('estado'))
        <script>
          const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          }
        });
        Toast.fire({
          icon: "success",
          title: "Estado actualizado."
        });
        </script>
        @endif

  

</body>
</html>