<?php

namespace iProyectoSam;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = "carreras";

    protected $fillable = [
        'nombre', 'presentacion', 'perfil', 'path','descripcion',
    ];

    public function setPathAttribute($path){
        if(! empty($path)){
            $name = Carbon::now()->second.$path->getClientOriginalName();
            $this->attributes['path'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
        }

}
