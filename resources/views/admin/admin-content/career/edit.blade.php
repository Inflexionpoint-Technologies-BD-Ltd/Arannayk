@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Edit Career Contents</h4>
    <hr>

    <div>
        <form action="{{ route('career.update',$career->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title"
                           class="form-control @error('title') is-invalid @enderror" value="{{ $career->title }}">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Achievement Content</label>
                    <textarea name="description" id="" cols="30" rows="10"
                              class="@error('description') is-invalid @enderror form-control"
                              placeholder="Enter achievement content">{{ $career->description }}</textarea>
                </div>

                @error('description')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter deadline</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter description" name="deadline"
                           class="form-control @error('deadline') is-invalid @enderror" value="{{ $career->deadline }}">
                </div>

                @error('deadline')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Enter Tag</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tag">
                        <option value="Career" @if($career->tag == "Career") selected @endif>Career</option>
                        <option value="Internship" @if($career->tag == "Internship") selected @endif>Internship</option>
                    </select>
                </div>

                @error('tag')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
