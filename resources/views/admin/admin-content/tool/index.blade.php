@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Tool Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>Image</th>
            <th>Content</th>
            <th>Author</th>
            <th>Publication Date</th>
            <th>Link</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($tools as $tool)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $tool->title !!}</td>
                <td><img src="{{ asset('storage/'.$tool->image) }}" alt="" style="width: 100px"></td>
                <td>{!! $tool->content !!}</td>
                <td>{!! $tool->author !!}</td>
                <td>{!! $tool->publication_date !!}</td>
                <td>{!! $tool->link !!}</td>
                <td><a href="{{ route('tool.edit',$tool->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('tool.destroy',$tool->id) }}" method="post">
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
