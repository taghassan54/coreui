<div class="table-responsive-sm">
    <table class="table table-striped" id="memberships-table">
        <thead>
            <th>Country Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age Range Id</th>
        <th>Nationality Id</th>
        <th>City Id</th>
        <th>District</th>
        <th>Block</th>
        <th>Graduation Date</th>
        <th>Specialization Id</th>
        <th>University Id</th>
        <th>Comments</th>
        <th>Services You Like To Participate</th>
        <th>Other Memberships</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($memberships as $membership)
            <tr>
                <td>{{ $membership->country_id }}</td>
            <td>{{ $membership->name }}</td>
            <td>{{ $membership->gender }}</td>
            <td>{{ $membership->age_range_id }}</td>
            <td>{{ $membership->nationality_id }}</td>
            <td>{{ $membership->city_id }}</td>
            <td>{{ $membership->district }}</td>
            <td>{{ $membership->block }}</td>
            <td>{{ $membership->graduation_date }}</td>
            <td>{{ $membership->specialization_id }}</td>
            <td>{{ $membership->university_id }}</td>
            <td>{{ $membership->comments }}</td>
            <td>{{ $membership->Services_you_like_to_participate }}</td>
            <td>{{ $membership->other_memberships }}</td>
                <td>
                    {!! Form::open(['route' => ['memberships.destroy', $membership->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('memberships.show', [$membership->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('memberships.edit', [$membership->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>