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

            <h2 class="page-title">REQUERISITOS PARA LA TITULACION</h2>
        </div>
    </div>


    <div class="panel panel-info" >
        <div class="panel-heading">
            <h3 class="panel-title">REQUERIMIENTOS</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="" align="right">

                        <a href="{{ URL::to('required/create') }}" class="btn btn-linkedin btn-sm"><i class="fa fa-desktop"></i> Nuevo</a>
                        <input type="text" class="input-sm">

                        <a href="#" class="btn btn-tumblr btn-sm"><i class="fa fa-search"></i> Buscar</a>
                    </div>
                    <br>

                    <table class="table table-striped">
                        <thead>
                        <tr class="warning">
                            <th width="5%">#</th>

                            <th width="35%">Descripcion</th>
                            <th width="20%">  </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($required as $requiere): ?>




                        <tr>
                            <td>{{$requiere->id}}</td>

                            <td>{{$requiere->descripcion}} </td>
                            <td>


                                {!!link_to_route('required.edit', $title = 'Editar', $parameters = $requiere->id, $attributes = ['class'=>'btn btn-info btn-sm '])!!}

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
