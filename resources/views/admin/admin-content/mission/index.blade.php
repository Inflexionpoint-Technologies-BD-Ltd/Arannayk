@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>Mission, Vision, Values</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Background Image</th>
            <th>Icon</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($missions as $mission)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $mission->title }}</td>
                <td>{!! $mission->content !!}</td>
                <td><img src="{{ asset('storage/'.$mission->image) }}" alt="" style="width: 100px"></td>
                <td><img src="{{ asset('storage/'.$mission->icon) }}" alt="" style="width: 100px"></td>
                <td>{{ $mission->created_at->format('d-m-y') }}</td>
                <td>{{ $mission->updated_at->format('d-m-y') }}</td>
                <td><a href="{{ route('mission.edit',$mission->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('mission.destroy',$mission->id) }}" method="post">
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
