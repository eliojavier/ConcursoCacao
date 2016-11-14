@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @foreach($participants as $participant)
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <colgroup>
                                <col class="col-md-2">
                                <col class="col-md-2">
                            </colgroup>
                            <tbody>
                            <tr>
                                <th>Nombre</th>
                                <td>{{$participant->nombre}}</td>
                            </tr>
                            <tr>
                                <th>Apellido</th>
                                <td>{{$participant->apellido}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$participant->email}}</td>
                            </tr>
                            <tr>
                                <th>Cédula</th>
                                <td>{{$participant->cedula}}</td>
                            </tr>
                            <tr>
                                <th>Fecha Nacimiento</th>
                                <td>{{$participant->telefono}}</td>
                            </tr>
                            <tr>
                                <th>Fecha Nacimiento</th>
                                <td>{{$participant->telefono}}</td>
                            </tr>
                            <tr>
                                <th>Academia</th>
                                <td>{{$participant->academia->nombre}}</td>
                            </tr>
                            <tr>
                                <th>Estado</th>
                                <td>{{$participant->lugar->nombre}}</td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>{{$participant->direccion}}</td>
                            </tr>
                            <tr>
                                <th>Twitter</th>
                                <td>{{$participant->twitter}}</td>
                            </tr>
                            <tr>
                                <th>Instagram</th>
                                <td>{{$participant->instagram}}</td>
                            </tr>
                            <tr>
                                <th>Talla</th>
                                <td>{{$participant->talla}}</td>
                            </tr>
                            <tr>
                                <th>Categoría</th>
                                <td>{{$participant->categoria}}</td>
                            </tr>
                            <tr>
                                <th>Tipo</th>
                                <td>{{$participant->tipo}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection