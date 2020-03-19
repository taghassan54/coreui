<div class="table-responsive-sm">
    <table class="table table-striped" id="universities-table">
        <thead>
            <th>Name</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($universities as $university)
            <tr>
                <td>{{ $university->name }}</td>
                <td>
                    {!! Form::open(['route' => ['universities.destroy', $university->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('universities.show', [$university->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('universities.edit', [$university->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>