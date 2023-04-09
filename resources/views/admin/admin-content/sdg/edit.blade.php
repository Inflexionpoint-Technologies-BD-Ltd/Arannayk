@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Edit About Content</h4>
    <hr>

    <div>
        <form action="{{ route('svg.update',$svg->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')

            <div class="form-group">
                <label for="exampleFormControlFile1">Enter Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                       id="exampleFormControlFile1" name="image">
            </div>

            @error('image')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
@endsection
