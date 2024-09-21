@extends('layouts.app')

@section('title')
Listado de test de la clase {{$group->name}} | Wesleyana
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Listado de test de la clase {{$group->name}}</h1>
        <table class="table table-bordered text-center">
            <thead>
                <th>Nombre</th>
                <th>Fecha</th>
            </thead>
            <tbody>
                @foreach($group->tests as $t => $test)
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