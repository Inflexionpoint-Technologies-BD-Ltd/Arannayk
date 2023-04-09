@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View All Publications</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Publication Image</th>
            <th>File Content</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($publications as $publication)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td><img src="{{ asset('storage/'.$publication->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{asset('storage/'.$publication->file_content)}}">PDF Book Content</a></td>
                <td>{{ $publication->created_at->format('d-m-y') }}</td>
                <td>{{ $publication->updated_at->format('d-m-y') }}</td>
                <td><a href="{{ route('publication.edit',$publication->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('publication.destroy',$publication->id) }}" method="post">
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
