<div class="table-responsive">
    <table class="table" id="tipoServicios-table">
        <thead>
        <tr>
            <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tipoServicios as $tipoServicio)
            <tr>
                <td>{{ $tipoServicio->descripcion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tipoServicios.destroy', $tipoServicio->tiposervicio_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoServicios.show', [$tipoServicio->tiposervicio_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tipoServicios.edit', [$tipoServicio->tiposervicio_id]) }}"
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
