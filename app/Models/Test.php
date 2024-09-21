<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['nombre', 'group_test_id'];

    public function respuestas(){
        return $this->hasMany(TestRespuesta::class, 'test_id');
    }

    public function group(){
        return $this->belongsTo(GroupTest::class, 'group_test_id');
    }
}
