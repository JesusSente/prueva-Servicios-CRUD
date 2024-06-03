<div class="table-responsive">
    <table class="table" id="tecnicos-table">
        <thead>
        <tr>
            <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tecnicos as $tecnico)
            <tr>
                <td>{{ $tecnico->primer_nombre }}</td>
            <td>{{ $tecnico->segundo_nombre }}</td>
            <td>{{ $tecnico->primer_apellido }}</td>
            <td>{{ $tecnico->segundo_apellido }}</td>
            <td>{{ $tecnico->direccion }}</td>
            <td>{{ $tecnico->telefono }}</td>

                <td width="120">
                    
                    {!! Form::open(['route' => ['tecnicos.destroy', $tecnico->tecnico_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tecnicos.show', [$tecnico->tecnico_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tecnicos.edit', [$tecnico->tecnico_id]) }}"
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
