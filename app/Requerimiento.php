<?php

namespace iProyectoSam;

use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    protected $table = 'requerimientos';

    protected $fillable = ['descripcion'];
}
