<div class="table-responsive-sm">
    <table class="table table-striped" id="cities-table">
        <thead>
            <th>Name</th>
        <th>Country </th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>

        @foreach($cities as $city)
            <tr>
                <td>{{ $city->name }}</td>
            <td>{{ $city->country_name }}</td>
                <td>
                    {!! Form::open(['route' => ['cities.destroy', $city->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cities.show', [$city->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cities.edit', [$city->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
