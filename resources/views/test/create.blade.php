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
            <h1 class="text-center">Encuesta sobre Temperamentos</h1>
            <form method="post" action="{{route('test.store')}}" id="form">
                @csrf  
                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombreCompleto" name="nombre" placeholder="Ingresa tu nombre completo" required>
                </div>
                
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
                            <td><label><input type="radio" name="row{{$p+1}}" value="0"> {{$pregunta[0]}}</label></td>
                            <td><label><input type="radio" name="row{{$p+1}}" value="1"> {{$pregunta[1]}}</label></td>
                            <td><label><input type="radio" name="row{{$p+1}}" value="2"> {{$pregunta[2]}}</label></td>
                            <td><label><input type="radio" name="row{{$p+1}}" value="3"> {{$pregunta[3]}}</label></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </form>
            <button type="submit" class="btn btn-primary" onclick="guardar()">Guardar</button>
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
