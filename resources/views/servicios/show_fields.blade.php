<!-- Fecha Recibido Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_recibido', 'Fecha Recibido:') !!}
    <p>{{ $servicio->fecha_recibido }}</p>
</div>

<!-- Fecha Entrega Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    <p>{{ $servicio->fecha_entrega }}</p>
</div>

<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $servicio->cliente_id }}</p>
</div>

<!-- Tecnico Id Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico_id', 'Tecnico Id:') !!}
    <p>{{ $servicio->tecnico_id }}</p>
</div>

<!-- Tiposervicio Id Field -->
<div class="col-sm-12">
    {!! Form::label('tiposervicio_id', 'Tiposervicio Id:') !!}
    <p>{{ $servicio->tiposervicio_id }}</p>
</div>

<!-- Estado Id Field -->
<div class="col-sm-12">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    <p>{{ $servicio->estado_id }}</p>
</div>

<!-- Equipo Id Field -->
<div class="col-sm-12">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    <p>{{ $servicio->equipo_id }}</p>
</div>

<!-- Costo Servicio Field -->
<div class="col-sm-12">
    {!! Form::label('costo_servicio', 'Costo Servicio:') !!}
    <p>{{ $servicio->costo_servicio }}</p>
</div>

