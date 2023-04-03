@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Add Photo Contents</h4>
    <hr>

    <div>
        <form action="{{ route('title.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Add Title [ If it doesn't shows on the selected title ]</label>
                <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter title" name="title_first"
                       class="form-control @error('title_first') is-invalid @enderror">
            </div>

            @error('title_first')
            <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-success" name="submit">Add Title</button>

        </form>
    </div>
    <br>

    <div>
        <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Title</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="title">
                        @foreach($titles as $title)
                            <option value="{{ $title->title_first }}">{{ $title->title_first }}</option>
                        @endforeach
                    </select>
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Add Images</label>
                    <input type="file" class="form-control-file @error('files.*') is-invalid @enderror"
                           id="exampleFormControlFile1" name="files[]" multiple required>
                </div>

                @error('files.*')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlFile1">Enter image</label>--}}
{{--                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"--}}
{{--                           id="exampleFormControlFile1" name="image">--}}
{{--                </div>--}}

{{--                @error('image')--}}
{{--                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>--}}
{{--                @enderror--}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <textarea name="content" id="" cols="30" rows="10"
                              class="@error('content') is-invalid @enderror form-control"
                              placeholder="Enter achievement content"></textarea>
                </div>

                @error('content')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
