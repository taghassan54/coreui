<div class="table-responsive-sm">
    <table class="table table-striped" id="events-table">
        <thead>
            <th>Title</th>
        <th>Text</th>
        <th>Date</th>
        <th>Images</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td class="table-image">{{ $event->title }}</td>
            <td>{{ $event->text }}</td>
            <td class="table-image">{{ $event->date }}</td>
            <td><img src="{{ $event->getFirstMediaUrl() }}" class="table-image" width="150" alt="" srcset=""></td>

                <td>
                    {!! Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('events.show', [$event->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('events.edit', [$event->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
