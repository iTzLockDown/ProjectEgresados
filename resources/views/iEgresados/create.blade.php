@extends('Plantillas.principal')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <h2 class="page-title">REGISTRO DE EGRESADOS</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-success">
                <div class="panel-heading">Formulario</div>
                <div class="panel-body">
                    {!!Form::open(['route'=>'egresado.store','method'=>'POST','role'=>'form','enctype'=>'multipart/form-data', 'class'=>'form-horizontal','files' => true])!!}



                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Codigo de matricula</label>
                        <div class="col-lg-4">
                            {!!Form::text('cod_matricula',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Codigo de Matricula','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">DNI</label>
                        <div class="col-lg-4">
                            {!!Form::text('documento',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Documento Nacional de Identidad','class'=>'form-control'])!!}
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Nombre</label>
                        <div class="col-lg-10">
                            {!!Form::text('nombre',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Nombres ','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Apellido Paterno</label>
                        <div class="col-lg-4">
                            {!!Form::text('apellidop',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Paterno','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">Apellido Materno</label>
                        <div class="col-lg-4">
                            {!!Form::text('apellidom',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Apellido Materno','class'=>'form-control'])!!}
                        </div>

                    </div>

                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            {!!Form::email('email',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Ejemplo@ejemplo.com','class'=>'form-control'])!!}
                        </div>
                    </div>


                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Telefono</label>
                        <div class="col-lg-4">
                            {!!Form::text('telefono',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Telefono','class'=>'form-control'])!!}
                        </div>

                        <label for="inputPassword1" class="col-lg-2 control-label">celular</label>
                        <div class="col-lg-4">
                            {!!Form::text('celular',null,['required'=>' ', 'autocomplete'=>'off', 'placeholder' =>' Celular ','class'=>'form-control'])!!}
                        </div>
                    </div>





                    <div class="hr-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil-square-o"></i> Registrar</button>

                            <a href="{{ URL::to('egresado') }}" class="btn btn-danger btn-sm"> Cancel <i class=" fa fa-fast-forward"></i> </a>


                        </div>
                    </div>

                    {!!Form::close()!!}

                </div>
            </div>





        </div>
    </div>
@stop