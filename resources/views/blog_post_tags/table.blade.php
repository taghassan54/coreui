<div class="table-responsive-sm">
    <table class="table table-striped" id="blogPostTags-table">
        <thead>
            <th>Tag Id</th>
        <th>Post Id</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($blogPostTags as $blogPostTag)
            <tr>
                <td>{{ $blogPostTag->tag_id }}</td>
            <td>{{ $blogPostTag->post_id }}</td>
                <td>
                    {!! Form::open(['route' => ['blogPostTags.destroy', $blogPostTag->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('blogPostTags.show', [$blogPostTag->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('blogPostTags.edit', [$blogPostTag->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>