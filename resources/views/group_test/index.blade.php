@extends('layouts.app')

@section('title')
Listado de Clases | Wesleyana
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Listado de clases</h1>
    <button type="button" class="btn btn-primary my-2" onclick="open_modal('create')">
        Nueva clase
    </button>
        <table class="table table-bordered text-center">
            <thead>
                <th>Clase</th>
                <th># de Tests</th>
            </thead>
            <tbody>
                @foreach($groups as $t => $group)
                    <tr>
                        <td>
                            <a href="{{route('group_test.show', $group->id)}}">
                                {{strtoupper($group->name)}}
                            </a>
                        </td>
                        <td>{{$group->tests->count()}} Tests</td>
                        <td>
                            <input type="hidden" value="{{route('test.create', $group->id_encrypted)}}" id="button-content-{{$group->id}}">
                            <button onclick="copyToClipboard('button-content-{{$group->id}}')"  class="btn btn-link">
                                compartir url
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva Clase</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('group_test.store')}}" id="form-create">
                @csrf  
                <div class="form-group">
                    <label for="nombreCompleto">Nombre de la clase</label>
                    <input type="text" class="form-control" id="nombreCompleto" name="name" placeholder="Ingresa tu nombre completo" required>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="guardar_clase()">Crear</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
    <script>
        const copyToClipboard = item_id => {
             // Obtén el contenido del td por su ID
            var content = document.getElementById(item_id).value;

            // Crea un elemento temporal de textarea
            var tempElement = document.createElement("textarea");
            tempElement.value = content;
            document.body.appendChild(tempElement);

            // Selecciona y copia el contenido del textarea temporal
            tempElement.select();
            document.execCommand("copy");

            // Elimina el elemento temporal
            document.body.removeChild(tempElement);

            // Opcional: Mostrar un mensaje o hacer algo después de copiar
            //alert("Texto copiado: " + content);
        }

        const open_modal = name_modal => {
            const modal = document.getElementById(`modal-${name_modal}`);
            if (modal) {
                modal.style.display = 'block';  // Muestra el modal
                // Opcionalmente, podrías agregar una clase si estás utilizando algún framework CSS que depende de clases para mostrar modales
                modal.classList.add('show'); // Esto es opcional dependiendo de cómo manejes la visibilidad del modal
            }
        };

        const guardar_clase = () => {
            const form = document.getElementById('form-create');
            if (form) {
                form.submit();
            }
        };
    </script>
@endsection