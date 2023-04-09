@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Ecosystem Info</h4>
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

        <?php $id = 0 ?>
        @foreach($ecosystems as $ecosystem)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $ecosystem->title !!}</td>
                <td>{!! $ecosystem->content !!}</td>
                <td><img src="{{ asset('storage/'.$ecosystem->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('ecosystem.edit',$ecosystem->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('ecosystem.destroy',$ecosystem->id) }}" method="post">
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
