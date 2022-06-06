@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>Services</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>name</th>
            <th>position</th>
            <th>location</th>
            <th>image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($boards as $board)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $board->name }}</td>
                <td>{{ $board->position }}</td>
                <td>{{ $board->location }}</td>
                <td><img src="{{ asset('storage/'.$board->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('board.edit',$board->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('board.destroy',$board->id) }}" method="post">
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
