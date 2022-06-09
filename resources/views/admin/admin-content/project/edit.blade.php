@extends('admin.admin-panel.admin-panel')

@section('content')
    <h1>Edit project contents</h1>
    <hr>

    <div>
        <form action="{{ route('project.update',$project->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $project->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Location</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter content" name="location"
                           class="form-control @error('location') is-invalid @enderror" value="{{ $project->location }}">
                </div>

                @error('location')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Achievement Content</label>
                    <textarea name="achievement" id="" cols="30" rows="10"
                              class="@error('achievement') is-invalid @enderror form-control"
                              placeholder="Enter achievement content">{!! $project->achievement !!}</textarea>
                </div>

                @error('achievement')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter background image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Tag</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="tag"
                           class="form-control @error('tag') is-invalid @enderror" value="{{ $project->tag }}">
                </div>

                @error('tag')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Date</label>
                    <input type="date" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="date"
                           class="form-control @error('date') is-invalid @enderror" value="{{ $project->date }}">
                </div>

                @error('date')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Funded by</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="funded_by"
                           class="form-control @error('funded_by') is-invalid @enderror" value="{{ $project->funded_by }}">
                </div>

                @error('funded_by')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
