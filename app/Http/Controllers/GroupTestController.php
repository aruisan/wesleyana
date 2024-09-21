<?php

namespace App\Http\Controllers;

use App\Models\GroupTest;
use Illuminate\Http\Request;

class GroupTestController extends Controller
{
    public function index(){
        $groups = GroupTest::all();
        return view('group_test.index', compact('groups'));
    }

    public function store(Request $request){
    //dd($request->all());
        $test = GroupTest::create($request->all());

        return back();

        //$signedUrl = URL::signedRoute('test.show_public', $test->id);

        // Redirigir a la URL firmada
        //return redirect()->to($signedUrl);
        //return redirect()->route('test.create', $test->id);
    }

    public function show(GroupTest $group){
        return view('group_test.show', compact('group'));
    }

    public function is_active(GroupTest $group){
        $activo = $group->activo ? 0 : 1;
        $group->activo = $activo;
        $group->save();
        return back();
    }
}
