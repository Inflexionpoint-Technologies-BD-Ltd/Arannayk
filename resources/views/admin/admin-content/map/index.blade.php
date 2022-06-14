@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All Map Info</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Location</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($maps as $map)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{!! $map->location !!}</td>
                <td>{!! $map->lat !!}</td>
                <td>{!! $map->long !!}</td>

                <td><a href="{{ route('map.edit',$map->id) }}" class="btn btn-info">Update</a></td>

                <td>
                    <form action="{{ route('map.destroy',$map->id) }}" method="post">
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
