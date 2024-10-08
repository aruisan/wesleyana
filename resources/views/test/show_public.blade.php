<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta sobre Temperamentos Wesleyana </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
            <h1 class="text-center">Resultados de la Encuesta sobre Temperamentos</h1>
                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombreCompleto" value="{{$test->nombre}}"  readonly>
                </div>
                
                <table class="table table-bordered text-center">
                    <thead>
                        <th>Temperamento</th>
                        <th>Cantidad</th>
                        <th>Cualidades</th>
                    </thead>
                    <tbody>
                        @foreach($respuestas as $r => $respuesta)
                            <tr class="text-left {{array_search($r, $keys) < 2 ? 'bg-primary text-white' : ''}}">
                                <td>{{strtoupper($r)}}</td>
                                <td>{{count($respuesta)}}</td>
                                <td>
                                    @foreach($respuesta as $atributos)
                                        <span class="badge badge-light btn">{{$atributos}}</span>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($preguntas as $p => $pregunta)
                        <tr class="text-left">
                            <td>{{$p+1}}</td>
                            <td class="{{$test->respuestas[$p]->respuesta == 0 ? 'bg-primary' : ''}}""> {{$pregunta[0]}}</td>
                            <td class="{{$test->respuestas[$p]->respuesta == 1 ? 'bg-primary' : ''}}""> {{$pregunta[1]}}</td>
                            <td class="{{$test->respuestas[$p]->respuesta == 2 ? 'bg-primary' : ''}}""> {{$pregunta[2]}}</td>
                            <td class="{{$test->respuestas[$p]->respuesta == 3 ? 'bg-primary' : ''}}""> {{$pregunta[3]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    const guardar = () => {
        // Número total de filas
        const totalFilas = 24;
        let validado = true;
        let nombreCompleto = $('#nombreCompleto').val();
        
        // Recorrer todas las filas y verificar si hay un radio seleccionado en cada fila
        for (let i = 1; i <= totalFilas; i++) {
            const radios = document.getElementsByName('row' + i);
            let seleccionado = false;
            
            // Verifica si uno de los radios está seleccionado
            for (let radio of radios) {
                if (radio.checked) {
                    seleccionado = true;
                    break;
                }
            }
            
            // Si no está seleccionado, marca como no validado y sale del bucle
            if (!seleccionado) {
                validado = false;
                break;
            }
        }
        
        // Si validado es true, significa que todos los radios están seleccionados
        if (validado && nombreCompleto.trim() != "") {
            $('#form').submit();
        } else {
            let message_error = nombreCompleto.trim() != "" ? "Por favor selecciona una opción en cada fila.": "Por Escriba su nombre"; 
            alert(message_error);
        }


    }
</script>
</html>
