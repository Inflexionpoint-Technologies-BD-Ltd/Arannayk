@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>About</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Type</th>
            <th>Project Title</th>
            <th>image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($svgs as $svg)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $svg->project_id == null ? "Archive" : "Project"  }}</td>
                <td>{{ $svg->project_id == null ? \App\Archive::find($svg->archive_id)->title : \App\Project::find($svg->project_id)->title  }}</td>
                <td><img src="{{ asset('storage/'.$svg->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('svg.edit',$svg->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('svg.destroy',$svg->id) }}" method="post">
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
