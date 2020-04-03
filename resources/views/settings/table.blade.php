<div class="table-responsive-sm">
    <table class="table table-striped" id="settings-table">
        <thead>
            <th>Key</th>
        <th>Value</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($settings as $settings)
            <tr>
                <td>{{ $settings->key }}</td>
            <td>{!! $settings->value !!}</td>
                <td>
                    {!! Form::open(['route' => ['settings.destroy', $settings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('settings.show', [$settings->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a> --}}
                        <a href="{{ route('settings.edit', [$settings->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {{-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
