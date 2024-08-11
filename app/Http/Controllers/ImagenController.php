<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    public function store(Request $request){
        $base64_image = $request->imgBase64;
        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
            $data = substr($base64_image, strpos($base64_image, ',') + 1);
        
            $data = base64_decode($data);
            Storage::disk('local')->put("test.png", $data);
            dd("stored");
        }
    }
}
