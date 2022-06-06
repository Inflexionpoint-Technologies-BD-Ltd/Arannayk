@extends('admin.admin-panel.admin-panel')

@section('content')


    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Add Publications</h4>
    <hr>

    <div>
        <form action="{{ route('publication.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>


                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter Publications image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter File Content</label>
                    <input type="file" class="form-control-file @error('file_content') is-invalid @enderror"
                           id="exampleFormControlFile1" name="file_content">
                </div>

                @error('file_content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
