<div class="p-5 bg-violet-100 flex items-center justify-between">
    <div class="card-header">
      <ul class="flex items-center justify-start">

        <li class="mx-6">
            <a data-ripple-light="true" data-tooltip-target="tooltip-publicadas" class="{{ Request::is('licitaciones')|| $menu == 'publicadas' ? 'text-blue-500 font-bold' : ''}} hover:text-blue-500 " href="{{ route('licitaciones') }}">Publicadas</a>
            <div data-tooltip="tooltip-publicadas" data-tooltip-mount="opacity-100 scale-100"
                  data-tooltip-unmount="opacity-0 scale-0 pointer-events-none"
                  data-tooltip-transition="transition-all duration-200 origin-bottom"
                  class="absolute z-50 whitespace-normal break-words rounded-lg bg-blue-600 py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none">
                  Licitaciones publicadas <br>
                  y sin Estado Aphix,<br>
                  Participar o Revisar.
            </div>
        
        </li>
        <li class="max-6">
          <a data-ripple-light="true" data-tooltip-target="tooltip-participando"  class="{{ Request::is('participando') || $menu == 'participando'? 'text-blue-500 font-bold' : ''}} hover:text-blue-500" href="{{ route('participando') }}">Participando</a>
          <div data-tooltip="tooltip-participando" data-tooltip-mount="opacity-100 scale-100"
          data-tooltip-unmount="opacity-0 scale-0 pointer-events-none"
          data-tooltip-transition="transition-all duration-200 origin-bottom"
          class="absolute z-50 whitespace-normal break-words rounded-lg bg-blue-600 py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none">
          Licitaciones publicadas <br>
          Estado Aphix Participando
          </div>
        </li>
        <li class="mx-6">
          <a data-ripple-light="true" data-tooltip-target="tooltip-finalizadas" class="{{ Request::is('finalizadas') || $menu == 'finalizadas'? 'text-blue-500 font-bold' : ''}} hover:text-blue-500" href="{{ route('finalizadas') }}">Finalizadas</a>
          <div data-tooltip="tooltip-finalizadas" data-tooltip-mount="opacity-100 scale-100"
          data-tooltip-unmount="opacity-0 scale-0 pointer-events-none"
          data-tooltip-transition="transition-all duration-200 origin-bottom"
          class="absolute z-50 whitespace-normal break-words rounded-lg bg-blue-600 py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none">
          Licitaciones Status Desestimada o Proveedor <br>
          </div>
        </li>
        <li class="mx-4">
          <a  data-ripple-light="true" data-tooltip-target="tooltip-descartadas" class="{{ Request::is('descartadas') || $menu == 'descartadas'? 'text-blue-500 font-bold' : ''}} hover:text-blue-500" href="{{ route('descartadas') }}">Descartadas</a>
          <div data-tooltip="tooltip-descartadas" data-tooltip-mount="opacity-100 scale-100"
          data-tooltip-unmount="opacity-0 scale-0 pointer-events-none"
          data-tooltip-transition="transition-all duration-200 origin-bottom"
          class="absolute z-50 whitespace-normal break-words rounded-lg bg-blue-600 py-1.5 px-3 font-sans text-sm font-normal text-white focus:outline-none">
          Licitaciones Estado Aphix Descartada <br>
          </div>
        </li>
        <li class="mx-4">
          <a class="w-24 h-8 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-center text-white text-base font-bold " href="{{ route('export') }}">Descargar</a>
        </li>
      </ul>
    </div>
 

    <div class="flex items-end">
        <form action="{{ route('buscador') }}" method="post" class="ml-auto"> 
          {{ csrf_field() }}
          <input type="text" class="mx-1 my-1 w-56 h-8 border border-blue-500 rounded focus:ring-4 focus:ring-blue-300 focus:border-blue-300" id="buscador" value="{{$busqueda ?? ''}}" name="buscador" placeholder="Buscador...">
          <input type="hidden" name="estado_aphix" value="{{$estado}}">
          <button class="w-24 h-8 bg-blue-500 text-center my-4 rounded hover:bg-blue-400 cursor-pointer text-white text-base font-bold" type="submit">Buscar</button>
        </form>
    </div>
</div>

<script
  type="module"
  src="https://unpkg.com/@material-tailwind/html@latest/scripts/tooltip.js"
></script>
