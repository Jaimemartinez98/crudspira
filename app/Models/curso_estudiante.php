<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso_estudiante extends Model
{
    use HasFactory;
    public function persona(){ 
        return $this->belongsTo(Personas::class);
    }
    public function curso(){ 
        return $this->belongsTo(Cursos::class); 
    }
}
