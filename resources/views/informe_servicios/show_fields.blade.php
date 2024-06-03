<!-- Diagnostico Field -->
<div class="col-sm-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    <p>{{ $informeServicio->diagnostico }}</p>
</div>

<!-- Solucion Field -->
<div class="col-sm-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    <p>{{ $informeServicio->solucion }}</p>
</div>

<!-- Servicio Id Field -->
<div class="col-sm-12">
    {!! Form::label('servicio_id', 'Servicio Id:') !!}
    <p>{{ $informeServicio->servicio_id }}</p>
</div>

