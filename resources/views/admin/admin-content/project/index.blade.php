@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>View All projects</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Title</th>
            <th>location</th>
            <th>achievement</th>
            <th>tag</th>
            <th>funded_by</th>
            <th>Image</th>
            <th>Project Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($projects as $project)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->location }}</td>
                <td>{!! $project->achievement !!}</td>
                <td>{{ $project->tag }}</td>
                <td>{{ $project->funded_by }}</td>
                <td>{{ $project->date }}</td>
                <td><img src="{{ asset('storage/'.$project->image) }}" alt="" style="width: 100px"></td>

                {{-- ----------------------------- SDG ICONS --------------------------------- --}}

                <td><a href="{{ route('svg.show',[$project->id,'project_type'=>'project']) }}" class="btn btn-info">SDG ICONS</a></td>

                {{-- ----------------------------- SDG ICONS --------------------------------- --}}

                <td><a href="{{ route('project.edit',$project->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('project.destroy',$project->id) }}" method="post">
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
