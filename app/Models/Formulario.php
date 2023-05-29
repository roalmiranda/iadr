<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';
    protected $primaryKey = 'formulario_id';

    public function categorias(){
        return $this->hasMany(FormularioCategoria::class, 'formulario_id');
    }
    
    public function documentos(){
        return $this->hasMany(FormularioDocumento::class, 'formulario_id');
    }
}
