<div class="table-responsive-sm">
    <table class="table table-striped" id="footers-table">
        <thead>
            <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Fax</th>
        <th>Lang</th>
        <th>Lat</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($footers as $footer)
            <tr>
                <td>{{ $footer->address }}</td>
            <td>{{ $footer->email }}</td>
            <td>{{ $footer->phone }}</td>
            <td>{{ $footer->fax }}</td>
            <td>{{ $footer->lang }}</td>
            <td>{{ $footer->lat }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('footers.show', [$footer->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('footers.edit', [$footer->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
