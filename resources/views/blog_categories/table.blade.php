<div class="table-responsive-sm">
    <table class="table table-striped" id="blogCategories-table">
        <thead>
            <th>Name</th>
        <th>Posts Count</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($blogCategories as $blogCategory)
            <tr>
                <td>{{ $blogCategory->name }}</td>
            <td>{{ $blogCategory->PostsCount }}</td>
                <td>
                    {!! Form::open(['route' => ['blogCategories.destroy', $blogCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogCategories.show', [$blogCategory->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('blogCategories.edit', [$blogCategory->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
