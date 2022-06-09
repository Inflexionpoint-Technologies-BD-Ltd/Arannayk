@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View Career Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>title</th>
            <th>description</th>
            <th>deadline</th>
            <th>tag</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($careers as $career)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $career->title }}</td>
                <td>{!! $career->description !!}</td>
                <td>{{ $career->deadline }}</td>
                <td>{{ $career->tag }}</td>

                <td><a href="{{ route('career.edit',$career->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('career.destroy',$career->id) }}" method="post">
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
