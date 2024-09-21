<?php

namespace App\Models;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroupTest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'activo'];

    public function tests(){
        return $this->hasMany(Test::class, 'group_test_id');
    } 

    public function getIdEncryptedAttribute(){
        return Crypt::encrypt($this->id);
    }
}
