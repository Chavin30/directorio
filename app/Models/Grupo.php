<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //relacion uno a muchos
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno');
    }
}
