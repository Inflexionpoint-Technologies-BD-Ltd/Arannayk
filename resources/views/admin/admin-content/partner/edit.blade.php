@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Edit Partner Contents</h4>
    <hr>

    <div>
        <form action="{{ route('partner.update',$partner->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>



                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter background image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Name</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter title" name="name"
                           class="form-control @error('name') is-invalid @enderror" value="{{ $partner->name }}">
                </div>

                @error('name')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
