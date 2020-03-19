<div class="table-responsive-sm">
    <table class="table table-striped" id="galleries-table">
        <thead>
            <th>Title</th>
        <th>Type</th>
        <th>created at</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td>{{ $gallery->title }}</td>
            <td>{{ $gallery->type }}</td>
            <td>{{ $gallery->created_at }}</td>
         
            <td><img src="{{ $gallery->getFirstMediaUrl() }}" class="table-image" width="150" alt="" srcset=""></td>



                <td>
                    {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('galleries.show', [$gallery->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('galleries.edit', [$gallery->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>




