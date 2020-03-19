<div class="table-responsive-sm">
    <table class="table table-striped" id="privacyPolicies-table">
        <thead>
            <th>Privacy Policy</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($privacyPolicies as $privacyPolicy)
            <tr>
                <td>{{ $privacyPolicy->privacy_policy }}</td>
                <td>
                    {!! Form::open(['route' => ['privacyPolicies.destroy', $privacyPolicy->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('privacyPolicies.show', [$privacyPolicy->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('privacyPolicies.edit', [$privacyPolicy->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>