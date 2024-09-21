<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Crypt;

class TestController extends Controller
{
    public function index(){
        $tests = Test::all();
        return view('test.index', compact('tests'));
    }

    public function create($token_group){
        $group_id = Crypt::decrypt($token_group);

        //dd($group_id);
        $preguntas = $this->matriz_preguntas();
        return view('test.create', compact('preguntas', 'group_id'));
    }

    public function store(Request $request){
       // dd($request->all());
        $test = Test::create($request->only(['nombre', 'group_test_id']));
        foreach($request->except(['nombre', '_token', 'group_test_id']) as $respuesta):
            //dd($respuesta);
            $test->respuestas()->create(['respuesta' => $respuesta]);
        endforeach;

        $signedUrl = URL::signedRoute('test.show_public', $test->id);

        // Redirigir a la URL firmada
        return redirect()->to($signedUrl);
        //return redirect()->route('test.show_public', $test->id);
    }

    public function show(Test $test){
        $letras_index = ['d', 'i', 's', 'c'];
      
        $respuestas = [
            'd' => [],
            'i' =>[],
            's' =>[],
            'c' =>[]
        ];

        $respuestas_matriz = $this->respuestas_matriz();
        $preguntas = $this->matriz_preguntas();

        /*
        $result = [];

        foreach ($respuestas_matriz as $numArray) {
            $convertedArray = array_map(function($num) use ($letras_index) {
                return $letras_index[$num];
            }, $numArray);

            $result[] = $convertedArray;
        }
            */
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
            array_push($respuestas[$letras_index[$index]], $preguntas[$i][$r]);
        endforeach;

        uasort($respuestas, function($a, $b) {
            return count($b) - count($a);
        });

        $keys = array_keys($respuestas);


        //dd([$respuestas]);
        $view = !auth()->check() ? 'show_public' : 'show';
        return view("test.{$view}", compact('test', 'respuestas', 'keys', 'preguntas'));
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
