@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">EDITAR EL REQUISITO : {{$required->id}} </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-warning">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::model($required,['route'=>['required.update', $required->id],'files' => true,'method'=>'PUT','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal'])!!}


                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Cuerpo</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('descripcion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' DEscripcion','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>

                            <a href="{{ URL::to('required') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop