<div class="table-responsive-sm">
    <table class="table table-striped" id="contactInfos-table">
        <thead>
            <th>Type</th>
        <th>Value</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($contactInfos as $contactInfo)
            <tr>
                <td>{{ $contactInfo->type }}</td>
            <td>{{ $contactInfo->value }}</td>
                <td>
                    {!! Form::open(['route' => ['contactInfos.destroy', $contactInfo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contactInfos.show', [$contactInfo->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('contactInfos.edit', [$contactInfo->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>