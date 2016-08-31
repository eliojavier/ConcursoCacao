@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar usuario</div>
                    <div class="panel-body">
                        {!!Form::model($user, ['method'=>'PATCH', 'url'=>'users/' . $user->id, 'role'=>'form', 'class'=>'form-horizontal'])!!}

                        @include('auth._form')

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!!Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
                            </div>
                        </div>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection