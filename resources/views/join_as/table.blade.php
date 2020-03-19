<div class="table-responsive-sm">
    <table class="table table-striped" id="joinAs-table">
        <thead>
            <th>Name</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($joinAs as $joinAs)
            <tr>
                <td>{{ $joinAs->name }}</td>
                <td>
                    {!! Form::open(['route' => ['joinAs.destroy', $joinAs->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('joinAs.show', [$joinAs->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('joinAs.edit', [$joinAs->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>