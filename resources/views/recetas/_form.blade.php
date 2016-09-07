<script>
    $(document).ready(function () {
        var ingredientes = [];
        $("#agregar").click(function () {
            ingredientes.push($("#ingrediente").val());
            $("#ingredientes").append($("#ingrediente").val() + '.');
            document.getElementById('ingrediente').value = "";
            document.getElementById('ingrediente').focus();
        });
    });
</script>

<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder'=>'Nombre']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('ingrediente', 'Ingrediente', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-7">
        {!! Form::text('ingrediente', null, ['class' => 'form-control', 'placeholder'=>'e.g. ']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-lg-offset-2">
        <button type="button" class="btn btn-default" id="agregar">Agregar</button>
        <button type="button" class="btn btn-default" id="eliminar">Eliminar</button>
    </div>
</div>

<div class="form-group">
    {!! Form::label('ingredientes', 'Ingredientes', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::textarea('ingredientes', old('ingredientes'), ['class' => 'form-control', 'placeholder'=>'Ingredientes', 'readonly']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('preparacion', 'Preparacion', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-8">
        {!! Form::textarea('preparacion', old('preparacion'), ['class' => 'form-control', 'placeholder'=>'Preparacion']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('raciones', 'Raciones', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-4">
        {!! Form::text('raciones', old('raciones'), ['class' => 'form-control', 'placeholder'=>'Raciones']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('modalidad', 'Modalidad', ['class' => 'col-md-4 control-label']) !!}
    {!! Form::radio('modalidad','Postre') !!} <span style="padding-right: 25px">Postre</span>
    {!! Form::radio('modalidad','Salado') !!} <span style="padding-right: 25px">Salado</span>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Imagen', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', old('imagen'), ['class' => 'form-control btn btn-primary']) !!}
    </div>
</div>
