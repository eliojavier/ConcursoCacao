@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($judges as $judge)
                            <tr>
                                <td>{{$judge->name}}</td>
                                <td>{{$judge->email}}</td>
                                <td>{{$judge->phone}}</td>
                                <td>
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection