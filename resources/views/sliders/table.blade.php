<div class="table-responsive-sm">
    <table class="table table-striped" id="sliders-table">
        <thead>
            <th>Title</th>
        <th>Text</th>
        <th>Type</th>
        <th>Images</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($sliders as $slider)
            <tr class="table-image" >
                <td class="table-image">{{ $slider->title }}</td>
            <td class="table-image" >{{ $slider->text }}</td>
            <td>{{ $slider->slider_type }}</td>
            <td><img src="{{ $slider->getFirstMediaUrl() }}" class="table-image" width="150" alt="" srcset=""></td>

                <td>
                    {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sliders.show', [$slider->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sliders.edit', [$slider->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
