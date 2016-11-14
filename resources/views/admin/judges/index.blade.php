@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @foreach($judges as $judge)
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
                                <tr>
                                    <td>{{$judge->name}}</td>
                                    <td>{{$judge->email}}</td>
                                    <td>{{$judge->phone}}</td>
                                    <td>
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection