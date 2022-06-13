@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View All Timeline Information</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Content</th>
            <th>Year</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($timelines as $timeline)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $timeline->title }}</td>
                <td>{!! $timeline->content !!}</td>
                <td>{{ $timeline->year }}</td>


                <td><a href="{{ route('timeline.edit',$timeline->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('timeline.destroy',$timeline->id) }}" method="post">
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
