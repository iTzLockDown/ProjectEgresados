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

            <h2 class="page-title">NOTICIAS</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">Noticias</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('details/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-desktop"></i> Nuevo</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="5%">#</th>
                            <th width="35%"> Egresado</th>
                            <th width="10%"><center>Carrera</center></th>
                            <th width="30%"> <center>Descripcion</center></th>
                            <th width="10%"><center>Fecha</center></th>
                            <th width="10%">   </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($d as $details): ?>



                        <tr>
                            <td>{{$details->id}}</td>
                            <td>
                                    <?php foreach ($e as $egresado):?>
                                    @if($egresado->id == $details->idegresado)
                                        {{$egresado->apellidop}} {{$egresado->apellidom}}, {{$egresado->nombre}}
                                    @endif
                                    <?php endforeach;?>

                            </td>

                            <td>

                                <?php foreach ($c as $carrera):?>
                                @if($carrera->id == $details->idcarrera)
                                    {{$carrera->nombre}}
                                @endif
                                <?php endforeach;?>
                            </td>
                            <td>{{$details->rfaltante}}</td>
                            <td>{{$details->fechae}}</td>
                            <td>

                                {!!link_to_route('details.edit', $title = 'Editar', $parameters = $details->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}

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
