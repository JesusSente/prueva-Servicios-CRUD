<!-- Fecha Recibido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recibido', 'Fecha Recibido:') !!}
    {!! Form::text('fecha_recibido', null, ['class' => 'form-control','id'=>'fecha_recibido']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_recibido').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::text('fecha_entrega', null, ['class' => 'form-control','id'=>'fecha_entrega']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_entrega').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control']) !!}
</div>

<!-- Tecnico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tecnico_id', 'Tecnico Id:') !!}
    {!! Form::select('tecnico_id', $tecnicos, null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposervicio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiposervicio_id', 'Tiposervicio Id:') !!}
    {!! Form::select('tiposervicio_id', $tipoServicios, null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}
</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    {!! Form::select('equipo_id', $equipos, null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Servicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo_servicio', 'Costo Servicio:') !!}
    {!! Form::number('costo_servicio', null, ['class' => 'form-control']) !!}
</div>