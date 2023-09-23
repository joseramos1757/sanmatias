<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    //relacion uno a muchos con 
    public function laboratorios(){
        return $this->hasMany('App\Models\Laboratorio');
    }  
    public function historials(){
        return $this->hasMany('App\Models\Historial');
    }
    public function medicos(){
        return $this->belongsToMany('App\Models\Medico');
    }
}
