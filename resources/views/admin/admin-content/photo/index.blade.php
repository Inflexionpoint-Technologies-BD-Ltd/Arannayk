@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Photo Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php $id = 0; ?>
            @foreach ($photos as $photo)
                <tr>
                    <td>{{ $id += 1 }}</td>
                    <td>{!! $photo->title !!}</td>
                    <td><img src="{{ asset('storage/' . $photo->image) }}" alt="" style="width: 100px"></td>
                    <td>{!! $photo->content !!}</td>
                    <td><a href="{{ route('photo.edit', $photo->id) }}" class="btn btn-info">Update</a></td>
                    <td>
                        <form action="{{ route('photo.destroy', $photo->id) }}" method="post">
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

    <h4>View All Photo Title Group</h4>
    <hr>

    <table id="example2" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Serial</th>
                <th>Title</th>
                {{--            <th>Image</th> --}}
                {{--            <th>Content</th> --}}
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php $id = 0; ?>
            @foreach ($titles as $photo)
                <tr>
                    <td>{{ $id += 1 }}</td>
                    <td>{!! $photo->title_first !!}</td>
                    {{--                <td><img src="{{ asset('storage/'.$photo->image) }}" alt="" style="width: 100px"></td> --}}
                    {{--                <td>{!! $photo->content !!}</td> --}}
                    <td><a href="{{ route('title.edit', $photo->id) }}" class="btn btn-info">Update</a></td>
                    <td>
                        <form action="{{ route('title.destroy', $photo->id) }}" method="post">
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
