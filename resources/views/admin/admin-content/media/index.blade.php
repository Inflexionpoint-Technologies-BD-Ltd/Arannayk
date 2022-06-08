@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Media Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>tag</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($medias as $media)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $media->title !!}</td>
                <td>{!! $media->content !!}</td>
                <td><img src="{{ asset('storage/'.$media->image) }}" alt="" style="width: 100px"></td>
                <td>{!! $media->tag !!}</td>

                <td><a href="{{ route('media.edit',$media->id) }}" class="btn btn-info">Update</a></td>

                <td>
                    <form action="{{ route('media.destroy',$media->id) }}" method="post">
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
