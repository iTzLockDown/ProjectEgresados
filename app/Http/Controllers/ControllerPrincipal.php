<?php

namespace ProyectoV1\Http\Controllers;

use Illuminate\Http\Request;

use ProyectoV1\Http\Requests;

class ControllerPrincipal extends Controller
{

    public function index()
    {
        return view('Principal.principal');
    }
}
