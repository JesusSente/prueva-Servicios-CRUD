<div class="table-responsive">
    <table class="table" id="equipos-table">
        <thead>
        <tr>
            <th>Tipoequipo Id</th>
        <th>Marca Id</th>
            <th colspan="3">Action</th> 
        </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            <tr>
                <td>{{ $equipo->tipoequipo_id }}</td>
            <td>{{ $equipo->marca_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['equipos.destroy', $equipo->equipo_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('equipos.show', [$equipo->equipo_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('equipos.edit', [$equipo->equipo_id]) }}"
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
