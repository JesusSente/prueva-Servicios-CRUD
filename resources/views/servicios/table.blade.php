<div class="table-responsive">
    <table class="table" id="servicios-table">
        <thead>
        <tr>
            <th>Fecha Recibido</th>
        <th>Fecha Entrega</th>
        <th>Cliente Id</th>
        <th>Tecnico Id</th>
        <th>Tiposervicio Id</th>
        <th>Estado Id</th>
        <th>Equipo Id</th>
        <th>Costo Servicio</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->fecha_recibido }}</td>
            <td>{{ $servicio->fecha_entrega }}</td>
            <td>{{ $servicio->cliente_id }}</td>
            <td>{{ $servicio->tecnico_id }}</td>
            <td>{{ $servicio->tiposervicio_id }}</td>
            <td>{{ $servicio->estado_id }}</td>
            <td>{{ $servicio->equipo_id }}</td>
            <td>{{ $servicio->costo_servicio }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['servicios.destroy', $servicio->servicio_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicios.show', [$servicio->servicio_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('servicios.edit', [$servicio->servicio_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
