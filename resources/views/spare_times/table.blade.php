<div class="table-responsive-sm">
    <table class="table table-striped" id="spareTimes-table">
        <thead>
            <th>Name</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($spareTimes as $spareTime)
            <tr>
                <td>{{ $spareTime->name }}</td>
                <td>
                    {!! Form::open(['route' => ['spareTimes.destroy', $spareTime->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('spareTimes.show', [$spareTime->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('spareTimes.edit', [$spareTime->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>