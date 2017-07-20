<?php

namespace iProyectoSam;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    protected $fillable  = ['idegresado', 'idcarrera', 'rfaltante','fechae' ];



}
