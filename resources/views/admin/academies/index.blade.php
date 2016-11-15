@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <button type="button" data-toggle="modal" data-target="#crear-academia" class="btn btn-primary">
                    Agregar academia
                </button>
            </div>
         </div>
        <div class="row margin-top-15">
            <div class="col-md-8 col-md-offset-1">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>País</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody id="judges-list">
                        @foreach($judges as $judge)
                            <tr id="judge{{$judge->id}}">
                                <td>{{$judge->name}}</td>
                                <td>{{$judge->email}}</td>
                                <td>{{$judge->phone}}</td>
                                <td>
                                    <button type="button" id="edit" data-toggle="modal" data-target="#editar-juez" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                    <button type="button" data-toggle="modal" data-target="#eliminar-juez" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('admin.judges.create')
        @include('admin.judges.edit')
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on("click", "#edit", function () {
            var row = $(this).closest('tr').attr('id');
            $(".modal-body #id").val(row);
        });
    </script>

@endsection
