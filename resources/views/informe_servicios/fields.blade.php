<!-- Diagnostico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::text('diagnostico', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Solucion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::text('solucion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Servicio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servicio_id', 'Servicio Id:') !!}
    {!! Form::select('servicio_id', $servicios, null, ['class' => 'form-control']) !!}
</div>