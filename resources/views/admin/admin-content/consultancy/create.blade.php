@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Add Consultancy Contents</h4>
    <hr>

    <div>
        <form action="{{ route('consultancy.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>


                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter Image 1</label>
                    <input type="file" class="form-control-file @error('image_1') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image_1">
                </div>

                @error('image_1')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter Image 2</label>
                    <input type="file" class="form-control-file @error('image_2') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image_2">
                </div>

                @error('image_2')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter Image 3</label>
                    <input type="file" class="form-control-file @error('image_3') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image_3">
                </div>

                @error('image_3')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="content"
                           class="form-control @error('content') is-invalid @enderror">
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
