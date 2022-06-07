@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Achievements</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($achievements as $achievement)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $achievement->title }}</td>
                <td>{!! $achievement->content !!}</td>
                <td><img src="{{ asset('storage/'.$achievement->image) }}" alt="" style="width: 100px"></td>
                <td>{{ $achievement->date }}</td>
                <td><a href="{{ route('achievement.edit',$achievement->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('achievement.destroy',$achievement->id) }}" method="post">
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
