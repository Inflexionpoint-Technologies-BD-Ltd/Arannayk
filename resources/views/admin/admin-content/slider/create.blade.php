@extends('admin.admin-panel.admin-panel')

@section('content')


    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Add Sliders</h4>
    <hr>

    <div>
        <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Text Content 1</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="text_content_1"
                           class="form-control @error('text_content_1') is-invalid @enderror">
                </div>

                @error('text_content_1')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Text Content 2</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="text_content_2"
                           class="form-control @error('text_content_2') is-invalid @enderror">
                </div>

                @error('text_content_2')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Text Content 3</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="text_content_3"
                           class="form-control @error('text_content_3') is-invalid @enderror">
                </div>

                @error('text_content_3')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror



                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter slider image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Content Style</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="serial">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
