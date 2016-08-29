@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('nombre', old('nombre'), ['class' => 'form-control col-md-6', 'placeholder'=>'Nombre']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('apellido', old('apellido'), ['class' => 'form-control col-md-6', 'placeholder'=>'Apellido']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('email', 'E-Mail', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('email', old('email'), ['class' => 'form-control col-md-6', 'placeholder'=>'E-Mail']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('cedula', 'Cédula', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('cedula', null, ['class' => 'form-control col-md-6', 'placeholder'=>'Cédula']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-divider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('password', 'Contraseña', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::password('password', ['class' => 'form-control col-md-6', 'placeholder'=>'Contraseña']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('password_confirmation', 'Confirmar contraseña', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::password('password_confirmation', ['class' => 'form-control col-md-6', 'placeholder'=>'Confirmar contraseña'] ) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('fecha_nacimiento', '', ['class' => 'form-control col-md-6', 'id' => 'datepicker', 'placeholder'=>'dd/mm/aaaa', 'readonly']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('telefono', 'Teléfono', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('telefono', null, ['class' => 'form-control col-md-6', 'placeholder'=>'Teléfono']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('estado', 'Estado', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::select('estado', $estados, null, ['class' => 'form-control col-md-6'])!!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('direccion', 'Dirección', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('direccion', null, ['class' => 'form-control col-md-6', 'placeholder'=>'Dirección']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('twitter', 'Twitter:', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('twitter', null, ['class' => 'form-control col-md-6', 'placeholder'=>'Twitter']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('instagram', 'Instagram:', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::text('instagram', null, ['class' => 'form-control col-md-6', 'placeholder'=>'Instagram']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('talla', 'Talla', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::select('talla',
                                                            array
                                                                ('SS' => 'SS',
                                                                'S' => 'S',
                                                                'M' => 'M',
                                                                'L' => 'L',
                                                                'XL' => 'XL',
                                                                'XXL' => 'XXL',
                                                                'Otro' => 'Otro'),
                                                            null,
                                                            ['class' => 'form-control col-md-6'])
                                         !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('categoria', 'Categoria', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::select('categoria',
                                                            array
                                                                ('Aficionado/Público General' => 'Aficionado/Público General',
                                                                'Estudiante/Profesional' => 'Estudiante/Profesional'),
                                                            null,
                                                            ['class' => 'form-control col-md-6'])
                                         !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('academia', 'Estudiante/Profesional (en curso o graduado)', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::select('academia', $academias, null, ['class' => 'form-control col-md-6'])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tipoEstPro', 'Tipo Est/Prof: ', ['class' => 'col-md-4 control-label']) !!}
                                    <div class="col-md-6">
                                        {!! Form::select('tipoEstPro',
                                                            array(null=>'N/A','Oficiante' => 'Oficiante',
                                                                    'Estudiante en curso' => 'Estudiante en curso',
                                                                    'Egresado' => 'Egresado'),
                                                            null,
                                                            ['class' => 'form-control col-md-6'])
                                         !!}
                                    </div>
                                </div>
                            </div>


                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
