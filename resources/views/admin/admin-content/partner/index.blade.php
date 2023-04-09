@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Partners</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($partners as $partner)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $partner->name }}</td>
                <td><img src="{{ asset('storage/'.$partner->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('partner.edit',$partner->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('partner.destroy',$partner->id) }}" method="post">
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
