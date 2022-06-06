@extends('admin.admin-panel.admin-panel')

@section('content')


    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Add About Content</h4>
    <hr>

    <div>
        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
{{--                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"--}}
                    {{--                           placeholder="" name="content"--}}
                    {{--                           class="form-control @error('content') is-invalid @enderror">--}}

                    <textarea name="content" class="form-control @error('content') is-invalid @enderror"></textarea>
                </div>

                @error('name')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

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
        </form>
    </div>
@endsection
