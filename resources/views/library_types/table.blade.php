<div class="table-responsive-sm">
    <table class="table table-striped" id="libraryTypes-table">
        <thead>
            <th>Name</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($libraryTypes as $libraryType)
            <tr>
                <td>{{ $libraryType->name }}</td>
                <td>
                    {!! Form::open(['route' => ['libraryTypes.destroy', $libraryType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('libraryTypes.show', [$libraryType->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('libraryTypes.edit', [$libraryType->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>