<div class="table-responsive-sm">
    <table class="table table-striped" id="libraries-table">
        <thead>
            <th>Name</th>
        <th>Library Type </th>
        <th>File Type </th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($libraries as $library)

            <tr>
                <td>{{ $library->name }}</td>
            <td>{{ @$library->libraryType->name }}</td>
            <td>{{ $library->getFirstMedia()?$library->getFirstMedia()->mime_type:'' }}</td>
                <td>
                    {!! Form::open(['route' => ['libraries.destroy', $library->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('libraries.show', [$library->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('libraries.edit', [$library->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
