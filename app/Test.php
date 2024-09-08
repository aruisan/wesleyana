<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['nombre'];

    public function respuestas(){
        return $this->hasMany(TestRespuesta::class, 'test_id');
    }
}
