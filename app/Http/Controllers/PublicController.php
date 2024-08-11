<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\Facebook;

class PublicController extends Controller
{
    private $vista = "frontend";

    public function inicio(){
        return view("{$this->vista}.inicio");
    }

    public function quienes_somos(){
        return view("{$this->vista}.quienes_somos");
    }

    public function ministerios(){
        return view("{$this->vista}.ministerios");
    }

    public function eventos(){
        return view("{$this->vista}.eventos");
    }

    public function contacto(){
        return view("{$this->vista}.contacto");
    }
}
