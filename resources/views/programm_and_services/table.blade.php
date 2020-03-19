<div class="table-responsive-sm">
    <table class="table table-striped" id="programmAndServices-table">
        <thead>
            <th>Title</th>
        <th>Description</th>
        <th>Media</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($programmAndServices as $programmAndService)
            <tr>
                <td class="table-image">{{ $programmAndService->title }}</td>
            <td>{{ $programmAndService->description }}</td>
            <td><img src="{{ $programmAndService->getFirstMediaUrl() }}" class="table-image" width="150" alt="" srcset=""></td>
                <td>
                    {!! Form::open(['route' => ['programmAndServices.destroy', $programmAndService->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('programmAndServices.show', [$programmAndService->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('programmAndServices.edit', [$programmAndService->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
