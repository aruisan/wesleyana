<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $preguntas = $this->matriz_preguntas();
        return view('test.index', compact('preguntas'));
    }

    public function store(Request $request){
        //dd($request->all());
        $test = Test::create($request->only(['nombre']));
        foreach($request->except(['nombre', '_token']) as $respuesta):
            //dd($respuesta);
            $test->respuestas()->create(['respuesta' => $respuesta]);
        endforeach;
        return redirect()->route('test.show', $test->id);
    }

    public function show(Test $test){
        $respuestas = [
            [],
            [],
            [],
            []
        ];

        $respuestas_matriz = $this->respuestas_matriz();
        $matriz_preguntas = $this->matriz_preguntas();
        
/*
        foreach($this->respuestas_matriz() as $pregunta): 
            array_push($pr['d'], $pregunta[0]);
            array_push($pr['i'], $pregunta[1]);
            array_push($pr['s'], $pregunta[2]);
            array_push($pr['c'], $pregunta[3]);
        endforeach;
        */

        foreach($test->respuestas as $i => $respuesta):
            $r = intval($respuesta->respuesta);
            $index = array_search($r, $respuestas_matriz[$i]);
            array_push($respuestas[$index], $matriz_preguntas[$i][$r]);
        endforeach;

        usort($respuestas, function($a, $b) {
            return count($b) - count($a);
        });

        return view('test.show', compact('test', 'respuestas'));
    }

    public function respuestas_matriz(){
        return [
            [1, 3, 0, 2],//1
            [0, 2, 3, 1],//2
            [2, 1, 0, 3],
            [0, 3, 2, 1],
            [3, 1, 2, 0],//5
            [1, 0, 3, 2],
            [2, 3, 1, 0],
            [1, 0, 3, 2],
            [3, 0, 2, 1],//9
            [2, 1, 3, 0],//10
            [0, 3, 2, 1],//11
            [3, 2, 0, 1],//12
            [1, 0, 3, 2],//13
            [2, 3, 1, 0],//14
            [3, 0, 2, 1],//15
            [0, 1, 2, 3],//16
            [1, 2, 3, 0],//17
            [2, 0, 1, 3],//18
            [3, 1, 2, 0],//19
            [0, 3, 2, 1],//20
            [0, 1, 2, 3],//21
            [3, 2, 1, 0],//22
            [3, 1, 0, 2],//23
            [3, 2, 0, 1],//24
        ];        
    }


    public function matriz_preguntas(){
        return [
            ["Reservado", "Enérgico", "Cuidadoso", "Expresivo"],
            ["Emprendedor", "Correcto", "Emotivo", "Satisfecho"],
            ["Dispuesto", "Animado", "Osado", "Preciso"],
            ["Terco", "Tímido", "Sistemático", "Impredecible"],
            ["Respetuoso", "Sociable", "Paciente", "Perseverante"],
            ["Persuasivo", "Auto-suficiente", "Cooperador", "Manso"],
            ["Cauteloso", "Moderado", "Decisivo", "Don de gentes"],
            ["Popular", "Firme", "Perfeccionista", "Generoso"],
            ["Impredecible", "Conformista", "Indeciso", "Tenaz"],
            ["Complaciente", "Optimista", "Persistente", "Minucioso"],
            ["Positivo", "Humilde", "Amigable", "Hablador"],
            ["Amistoso", "Servicial", "Juguetón", "Testarudo"],
            ["Encantador", "Aventurero", "Disciplinado", "Consistente"],
            ["Afable", "Detallista", "Agresivo", "Atractivo"],
            ["Entusiasta", "Analítico", "Comprensivo", "Determinado"],
            ["Mandón", "Inconsistente", "Lento", "Criticón"],
            ["Sensible", "Impotente", "Alegre", "Despreocupado"],
            ["Influyente", "Amable", "Independiente", "Ordenado"],
            ["Idealista", "Popular", "Jovial", "Franco"],
            ["Impaciente", "Melancólico", "Orgulloso", "Recto"],
            ["Competitivo", "Espontáneo", "Leal", "Considerado"],
            ["Sacrificado", "Diferente", "Convincente", "Valiente"],
            ["Temeroso", "Variable", "Pesimista", "Falta de tacto"],
            ["Tolerante", "Conservador", "Estimulante", "Ingenioso"]
        ];        
    }
}
