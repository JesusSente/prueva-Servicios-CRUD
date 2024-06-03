<!-- Primer Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('primer_nombre', 'Primer Nombre:') !!}
    <p>{{ $tecnico->primer_nombre }}</p>
</div>

<!-- Segundo Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('segundo_nombre', 'Segundo Nombre:') !!}
    <p>{{ $tecnico->segundo_nombre }}</p>
</div>

<!-- Primer Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('primer_apellido', 'Primer Apellido:') !!}
    <p>{{ $tecnico->primer_apellido }}</p>
</div>

<!-- Segundo Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('segundo_apellido', 'Segundo Apellido:') !!}
    <p>{{ $tecnico->segundo_apellido }}</p>
</div>

<!-- Direccion Field -->
<div class="col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $tecnico->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $tecnico->telefono }}</p>
</div>

