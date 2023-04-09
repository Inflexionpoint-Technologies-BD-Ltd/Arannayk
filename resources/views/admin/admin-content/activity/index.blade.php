@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Activity Info</h4>
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
        @foreach($activities as $activity)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $activity->title !!}</td>
                <td>{!! $activity->content !!}</td>
                <td><img src="{{ asset('storage/'.$activity->image) }}" alt="" style="width: 100px"></td>
                <td>{!! $activity->tag !!}</td>

                <td><a href="{{ route('activity.edit',$activity->id) }}" class="btn btn-info">Update</a></td>

                <td>
                    <form action="{{ route('activity.destroy',$activity->id) }}" method="post">
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
