@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Press Release Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>tag</th>
            <th>priority</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($presses as $press)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $press->title !!}</td>
                <td>{!! \Illuminate\Support\Str::limit($press->content,'100','...')  !!}</td>
                <td><img src="{{ asset('storage/'.$press->image) }}" alt="" style="width: 100px"></td>
                <td>{!! $press->tag !!}</td>
                <td>{{ $press->priority }}</td>

                <td><a href="{{ route('press.edit',$press->id) }}" class="btn btn-info">Update</a></td>

                <td>
                    <form action="{{ route('press.destroy',$press->id) }}" method="post">
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
