@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        @foreach($recetas as $receta)
                            {{$receta->nombre}}
                            @foreach($receta->ingredientes as $ingrediente)
                                {{($ingrediente->nombre)}}
                            @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection