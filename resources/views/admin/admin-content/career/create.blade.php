@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Add Career Contents</h4>
    <hr>

    <div>
        <form action="{{ route('career.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Title</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="title"
                           class="form-control @error('title') is-invalid @enderror">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter description Content</label>
                    <textarea name="description" id="" cols="30" rows="10"
                              class="@error('description') is-invalid @enderror form-control"
                              placeholder="Enter description content"></textarea>
                </div>

                @error('description')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter deadline</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter description" name="deadline"
                           class="form-control @error('deadline') is-invalid @enderror">
                </div>

                @error('deadline')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter tag</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter description" name="tag"
                           class="form-control @error('tag') is-invalid @enderror">
                </div>

                @error('tag')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
