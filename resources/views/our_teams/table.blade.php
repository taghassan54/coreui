<div class="table-responsive-sm">
    <table class="table table-striped" id="ourTeams-table">
        <thead>
            <th>Name</th>
        <th>Position</th>
        <th>Aboute</th>
        <th>Image</th>

            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($ourTeams as $ourTeam)
            <tr>
                <td  class="table-image">{{ $ourTeam->name }}</td>
            <td  class="table-image">{{ $ourTeam->position }}</td>
            <td>{{ $ourTeam->aboute }}</td>
            <td><img src="{{ $ourTeam->getFirstMediaUrl() }}" class="table-image" width="150" alt="" srcset=""></td>

                <td>
                    {!! Form::open(['route' => ['ourTeams.destroy', $ourTeam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ourTeams.show', [$ourTeam->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('ourTeams.edit', [$ourTeam->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
