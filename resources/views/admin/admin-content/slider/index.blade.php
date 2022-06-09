@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View Sliders</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Text Content 1</th>
            <th>Text Content 2</th>
            <th>Text Content 3</th>
            <th>Content Style</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($sliders as $slider)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $slider->text_content_1 }}</td>
                <td>{{ $slider->text_content_2 }}</td>
                <td>{{ $slider->text_content_3 }}</td>
                <td>{{ $slider->serial }}</td>
                <td><img src="{{ asset('storage/'.$slider->image) }}" alt="" style="width: 100px"></td>
                <td>{{ $slider->created_at->format('d-m-y') }}</td>
                <td>{{ $slider->updated_at->format('d-m-y') }}</td>
                <td><a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('slider.destroy',$slider->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
