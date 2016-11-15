<div class="modal fade" id="crear-juez" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Agregar juez</h4>
            </div>
            <div class="modal-body">
                {!!Form::open(['url'=>'admin/jueces'])!!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!!Form::label('name','Nombre')!!}
                        {!!Form::text('name', null, ['class'=>'form-control', 'required'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('email','Correo electrónico')!!}
                        {!!Form::text('email', null, ['class'=>'form-control', 'required', 'email'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('phone','Teléfono')!!}
                        {!!Form::text('phone', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::submit('Agregar', ['class'=>'btn btn-success'])!!}
                    </div>
                {!!Form::close()!!}
            </div>
        </div>

    </div>
</div>