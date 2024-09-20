@extends('layouts.app')

@section('title')
Resultados de la Encuesta sobre Temperamentos | Wesleyana
@endsection

@section('content')
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
@endsection