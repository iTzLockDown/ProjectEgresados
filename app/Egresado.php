<?php

namespace iProyectoSam;

use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    protected $table ='egresados';
    protected $fillable=['cod_matricula', 'nombre', 'apellidop', 'apellidom', 'documento', 'email', 'telefono', 'celular' ];


}
