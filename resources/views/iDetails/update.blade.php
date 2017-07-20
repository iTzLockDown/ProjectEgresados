@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">EDITAR REQUISITOS DEL:
                <?php foreach ($e as $egresado):?>
                @if($d->idegresado == $egresado->id)
                    {{$egresado->apellidop}} {{$egresado->apellidom}}, {{$egresado->nombre}}
                @endif
                <?php endforeach;?> </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-warning">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::model($d,['route'=>['details.update', $d->id],'files' => true,'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}



                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Presentados</label>
                        <div class="col-lg-5">
                            <br>
                            <br>

                            <div class="cuadro-izquiero">
                                <select id="presentados" size="10">
                                    <?php foreach ($r as $requisitos):?>
                                    <option value="{{$requisitos->descripcion}}" onclick="moveToRight()">{{$requisitos->descripcion}}</option>
                                    <?php  endforeach; ?>
                                </select>

                            </div>
                        </div>


                        <div class="col-lg-5">
                            <label for="inputPassword1">Faltantes</label>
                            <div class="cuadro-derecho">
                                <select id="faltantes" size="10">

                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Detalles </label>
                        <div class="col-lg-10">
                            {!!Form::text('rfaltante1',null,['required'=>' ', 'autocomplete'=>'off', 'id' =>'rfaltante','class'=>'form-control'])!!}

                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Carrera</label>
                        <div class="col-lg-10">
                            {!!Form::select('idcarrera',$c,null)!!}
                        </div>
                    </div>




                    <div class="hr-dashed"></div>

                    <div class="form-group">
                        <div class="form-group">

                            <label for="inputPassword1" class="col-lg-2 control-label">Fecha Registro</label>
                            <div class="col-lg-10">
                                {!!Form::date('fechae', \Carbon\Carbon::now())!!}
                            </div>
                        </div>
                    </div>






                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>

                            <a href="{{ URL::to('details') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop