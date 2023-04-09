@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Edit Top Nav Content</h4>
    <hr>

    <div>
        <form action="{{ route('top.update',$top->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $top->title }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    {{--                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"--}}
                    {{--                           placeholder="" name="content"--}}
                    {{--                           class="form-control @error('content') is-invalid @enderror">--}}

                    <textarea name="content"
                              class="form-control @error('content') is-invalid @enderror">{!! $top->content !!}</textarea>
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

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Enter Tag</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tag">
                        <option value="Forest" @if($top->tag == "Forest") selected @endif>Forest</option>
                        <option value="Biodiversity" @if($top->tag == "Biodiversity") selected @endif>Biodiversity
                        </option>
                        <option value="Sustainability" @if($top->tag == "Sustainability") selected @endif>
                            Sustainability
                        </option>
                        <option value="Climate" @if($top->tag == "Climate") selected @endif>Climate</option>
                        <option value="Gender" @if($top->tag == "Gender") selected @endif>Gender</option>
                    </select>
                </div>

                @error('tag')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Add SDG icons</label>
                    <input type="file" class="form-control-file @error('files.*') is-invalid @enderror"
                           id="exampleFormControlFile1" name="files[]" multiple>
                </div>

                @error('files.*')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
