<div class="table-responsive-sm">
    <table class="table table-striped" id="posts-table">
        <thead>
            <th>Category</th>
        <th>Title</th>
        <th>Summary</th>
        <th>Status</th>
        <th>Media</th>

            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->CategoryName }}</td>
            <td>{{ $post->title }}</td>
            <td>{!! $post->summary !!}</td>
            <td>{{ $post->show_status }}</td>
            <td><img src="{{ $post->getFirstMediaUrl() }}" class="table-image"  width="150" alt="" srcset=""></td>

                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$post->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('posts.edit', [$post->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
