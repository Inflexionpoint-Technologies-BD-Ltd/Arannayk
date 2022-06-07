@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Consultancy Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Image 1</th>
            <th>Image 2</th>
            <th>Image 3</th>
            <th>Content</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($consultancies as $consultancy)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td><img src="{{ asset('storage/'.$consultancy->image_1) }}" alt="" style="width: 100px"></td>
                <td><img src="{{ asset('storage/'.$consultancy->image_2) }}" alt="" style="width: 100px"></td>
                <td><img src="{{ asset('storage/'.$consultancy->image_3) }}" alt="" style="width: 100px"></td>
                <td>{{ $consultancy->content }}</td>
                <td><a href="{{ route('consultancy.edit',$consultancy->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('consultancy.destroy',$consultancy->id) }}" method="post">
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
