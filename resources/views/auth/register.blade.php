@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de usuarios</div>
                <div class="panel-body">
                    {!!Form::open(['url'=>'register', 'role'=>'form', 'class'=>'form-horizontal'])!!}

                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder'=>'Nombre', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                        {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('apellido', old('apellido'), ['class' => 'form-control', 'placeholder'=>'Apellido', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'E-Mail', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder'=>'E-Mail', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                        {!! Form::label('cedula', 'Cédula', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('cedula', old('cedula'), ['class' => 'form-control', 'placeholder'=>'Cédula', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('password', old('password'), ['class' => 'form-control', 'placeholder'=>'Contraseña', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::label('password_confirmation', 'Confirmar contraseña', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('password_confirmation', old('password_confirmation'), ['class' => 'form-control', 'placeholder'=>'Confirmar contraseña', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('fecha_nacimiento', old('fecha_nacimiento'), ['id' => 'datepicker', 'class' => 'form-control',                                                                    'placeholder'=>'dd/mm/aaaa', 'autofocus', 'readonly']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        {!! Form::label('telefono', 'Teléfono', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('telefono', old('telefono'), ['class' => 'form-control', 'placeholder'=> 'Teléfono', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                        {!! Form::label('estado', 'Estado', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!!Form::select('estado', $estados, null, ['class' => 'form-control col-md-6'])!!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                        {!! Form::label('direccion', 'Dirección', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('direccion', old('direccion'), ['class' => 'form-control', 'placeholder'=> 'Dirección', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
                        {!! Form::label('twitter', 'Twitter', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('twitter', old('twitter'), ['class' => 'form-control', 'placeholder'=> 'Twitter', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                        {!! Form::label('instagram', 'Instagram', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('instagram', old('instagram'), ['class' => 'form-control', 'placeholder'=> 'Instagram', 'autofocus']) !!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('talla') ? ' has-error' : '' }}">
                        {!! Form::label('talla', 'Talla', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!!Form::select('talla', $tallas, null, ['class' => 'form-control col-md-6'])!!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
                        {!! Form::label('categoria', 'Categoría', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!!Form::select('categoria', $categorias, null, ['class' => 'form-control col-md-6'])!!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('academia') ? ' has-error' : '' }}">
                        {!! Form::label('academia', 'Estudiante/Profesional (en curso o graduado)', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!!Form::select('academia', $academias, null, ['class' => 'form-control col-md-6'])!!}
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                        {!! Form::label('tipo', 'Estudiante/Profesional (en curso o graduado)', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!!Form::select('tipo', $tipos, null, ['class' => 'form-control col-md-6'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            {!!Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
