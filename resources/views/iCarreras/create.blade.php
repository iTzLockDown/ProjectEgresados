@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">REGISTRO DE C.P.</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'carrera.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal','files' => true])!!}
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            {!!Form::text('nombre',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombre C.P. ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Presentacion</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('presentacion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Presentacion','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Perfil Profesional</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('perfil',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Presentacion','class'=>'form-control'])!!}
                        </div>



                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">DEscripcion</label>
                        <div class="col-lg-10">
                            {!!Form::textarea('descripcion',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Descripcion','class'=>'form-control'])!!}
                        </div>



                    </div>



                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Carga Imagen</label>
                        <div class="col-lg-10">
                            {!!Form::file('path')!!}
                             </div>



                    </div>



                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>

                            <a href="{{ URL::to('carrera') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop