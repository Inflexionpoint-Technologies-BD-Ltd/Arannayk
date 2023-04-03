@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Edit Photo Group Title Contents</h4>
    <hr>

    <div>
        <form action="{{ route('title.update',$title->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Edit Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title_first"
                           class="form-control @error('title_first') is-invalid @enderror" value="{{ $title->title_first }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
