@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View Top Nav Options</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>content</th>
            <th>title</th>
            <th>image</th>
            <th>tag</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($tops as $about)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $about->content !!}</td>
                <td>{{ $about->title }}</td>
                <td><img src="{{ asset('storage/'.$about->image) }}" alt="" style="width: 100px"></td>
                <td>{{ $about->tag }}</td>
                <td><a href="{{ route('top.edit',$about->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('top.destroy',$about->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <br><br>

    <h4>View All top Nav Related Images</h4>
    <hr>

    <table id="example2" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Image</th>
            <th>Types</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($images as $consultancy)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td><img src="{{ asset('storage/'.$consultancy->image) }}" alt="" style="width: 100px"></td>
                {{--                <td><a href="{{ route('image.edit',$consultancy->id) }}" class="btn btn-info">Update</a></td>--}}
                <td>{{ $consultancy->type }}</td>

                <td>
                    <form action="{{ route('image.destroy',$consultancy->id) }}" method="post">
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
