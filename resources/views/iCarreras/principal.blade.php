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

            <h2 class="page-title">CARRERAS PROFESIONALES</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">C.P.</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('carrera/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-desktop"></i> Nuevo</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="5%">#</th>
                            <th width="35%">Nombre</th>
                            <th width="15%">  </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($carrera as $carreras): ?>




                        <tr>
                            <td>{{$carreras->id}}</td>
                            <td>{{$carreras->nombre}}</td>
                            <td>


                                {!!link_to_route('carrera.edit', $title = 'Editar', $parameters = $carreras->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}

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
