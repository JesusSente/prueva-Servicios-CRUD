<div class="table-responsive">
    <table class="table" id="informeServicios-table">
        <thead>
        <tr>
            <th>Diagnostico</th>
        <th>Solucion</th>
        <th>Servicio Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($informeServicios as $informeServicio)
            <tr>
                <td>{{ $informeServicio->diagnostico }}</td>
            <td>{{ $informeServicio->solucion }}</td>
            <td>{{ $informeServicio->servicio_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['informeServicios.destroy', $informeServicio->informeservicio_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('informeServicios.show', [$informeServicio->informeservicio_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('informeServicios.edit', [$informeServicio->informeservicio_id]) }}"
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
