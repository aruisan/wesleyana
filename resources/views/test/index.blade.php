@extends('layouts.app')

@section('title')
Listado de la Encuesta sobre Temperamentos | Wesleyana
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Listado de la Encuesta sobre Temperamentos</h1>
        <table class="table table-bordered text-center">
            <thead>
                <th>Nombre</th>
                <th>Fecha</th>
            </thead>
            <tbody>
                @foreach($tests as $t => $test)
                    <tr>
                        <td>
                            <a href="{{route('test.show', $test->id)}}">
                                {{strtoupper($test->nombre)}}
                            </a>
                        </td>
                        <td>{{$test->created_at->format('Y/m/d H:i')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection