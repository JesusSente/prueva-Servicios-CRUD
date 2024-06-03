<div class="table-responsive">
    <table class="table" id="marcas-table">
        <thead>
        <tr>
            <th>Nombre Marca</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr>
                <td>{{ $marca->nombre_marca }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['marcas.destroy', $marca->marca_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('marcas.show', [$marca->marca_id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('marcas.edit', [$marca->marca_id]) }}"
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
