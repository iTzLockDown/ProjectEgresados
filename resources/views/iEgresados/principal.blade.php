@extends('Plantillas.principal')
@section('content')

    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role = "alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <center>{{Session::get('message')}}</center>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">DOCENTES Y PERSONAL ADMINISTRATIVO</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">Docentes</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('egresado/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-desktop"></i> Nuevo</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="15%">Codigo de Matricula</th>
                            <th width="35%">Apellido y Nombre</th>
                            <th width="15%">Documento</th>
                            <th width="15%">Celular</th>
                            <th width="20%">  </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($egresado as $egresados): ?>




                        <tr>
                            <td>{{$egresados->cod_matricula}}</td>

                            <td>{{$egresados->apellidop}} {{$egresados->apellidom}}, {{$egresados->nombre}} </td>
                            <td>{{$egresados->documento}}</td>
                            <td>{{$egresados->celular}}</td>
                            <td>


                                {!!link_to_route('egresado.edit', $title = 'Editar', $parameters = $egresados->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}

                                <a href="#" class="btn btn-warning btn-sm" title="Eliminar"> <i class="fa fa-close"></i> </a>


                            </td>
                        </tr>

                        <?php endforeach; ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>



@stop
