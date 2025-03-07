<div class="table-responsive">
    <table class="table" id="clientes-table">
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
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->primer_nombre }}</td>
            <td>{{ $cliente->segundo_nombre }}</td>
            <td>{{ $cliente->primer_apellido }}</td>
            <td>{{ $cliente->segundo_apellido }}</td>
            <td>{{ $cliente->direccion }}</td>
            <td>{{ $cliente->telefono }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clientes.show', [$cliente->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('clientes.edit', [$cliente->id]) }}"
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
