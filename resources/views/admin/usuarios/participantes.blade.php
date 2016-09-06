@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @foreach($participantes as $participante)
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <colgroup>
                                <col class="col-md-2">
                                <col class="col-md-2">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th>Nombre</th>
                                <td>{{$participante->nombre}}</td>
                            </tr>
                            <tr>
                                <th>Apellido</th>
                                <td>{{$participante->apellido}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$participante->email}}</td>
                            </tr>
                            <tr>
                                <th>Cédula</th>
                                <td>{{$participante->cedula}}</td>
                            </tr>
                            <tr>
                                <th>Fecha Nacimiento</th>
                                <td>{{$participante->telefono}}</td>
                            </tr>
                            <tr>
                                <th>Fecha Nacimiento</th>
                                <td>{{$participante->telefono}}</td>
                            </tr>
                            <tr>
                                <th>Academia</th>
                                <td>{{$participante->academia->nombre}}</td>
                            </tr>
                            <tr>
                                <th>Estado</th>
                                <td>{{$participante->lugar->nombre}}</td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>{{$participante->direccion}}</td>
                            </tr>
                            <tr>
                                <th>Twitter</th>
                                <td>{{$participante->twitter}}</td>
                            </tr>
                            <tr>
                                <th>Instagram</th>
                                <td>{{$participante->instagram}}</td>
                            </tr>
                            <tr>
                                <th>Talla</th>
                                <td>{{$participante->talla}}</td>
                            </tr>
                            <tr>
                                <th>Categoría</th>
                                <td>{{$participante->categoria}}</td>
                            </tr>
                            <tr>
                                <th>Tipo</th>
                                <td>{{$participante->tipo}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection