@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>About</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>content</th>
            <th>image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($abouts as $about)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $about->content !!}</td>
                <td><img src="{{ asset('storage/'.$about->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('about.edit',$about->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('about.destroy',$about->id) }}" method="post">
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
