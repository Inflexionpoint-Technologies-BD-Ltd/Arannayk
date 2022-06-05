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
            <th>Title</th>
            <th>Content</th>
            <th>Color code (Hex)</th>
            <th>Background Image</th>
            <th>Icon</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($services as $service)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->content }}</td>
                <td>{{ $service->color_title }}</td>
                <td><img src="{{ asset('storage/'.$service->image) }}" alt="" style="width: 100px"></td>
                <td><img src="{{ asset('storage/'.$service->icon) }}" alt="" style="width: 100px"></td>
                <td>{{ $service->created_at->format('d-m-y') }}</td>
                <td>{{ $service->updated_at->format('d-m-y') }}</td>
                <td><a href="{{ route('service.edit',$service->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('service.destroy',$service->id) }}" method="post">
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
