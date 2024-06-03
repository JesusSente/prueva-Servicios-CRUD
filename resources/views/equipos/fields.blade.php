<!-- Tipoequipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoequipo_id', 'Tipoequipo Id:') !!}
    {!! Form::select('tipoequipo_id', $tipoEquipos, null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca_id', 'Marca:') !!}
    {!! Form::select('marca_id', $marcas, null, ['class' => 'form-control']) !!}
</div> 