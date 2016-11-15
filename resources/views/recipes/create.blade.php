@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Agregar Receta</div>
                    <div class="panel-body">

                        @include('errors._errors')

                        {!! Form::open(['url'=>'recetas', 'files'=>'true', 'class'=>'form-horizontal', 'role'=>'form', 'name' => 'crearReceta'])!!}

                        @include('recipes._form')

                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">
                                </br>
                                {!! Form::submit('Agregar', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection