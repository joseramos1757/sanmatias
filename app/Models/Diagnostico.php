<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;
    public function historials(){
        return $this->hasMany('App\Models\Historial');
    }
    
}
