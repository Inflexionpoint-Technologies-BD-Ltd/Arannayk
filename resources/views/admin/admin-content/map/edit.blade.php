@extends('admin.admin-panel.admin-panel')

@section('content')
    <h4>Edit Map Contents</h4>
    <hr>

    <div>
        <form action="{{ route('map.update',$map->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter location</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter location" name="location"
                           class="form-control @error('location') is-invalid @enderror" value="{{ $map->location }}">
                </div>

                @error('location')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter latitude</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter latitude" name="lat"
                           class="form-control @error('lat') is-invalid @enderror" value="{{ $map->lat }}">
                </div>

                @error('lat')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror



                <div class="form-group">
                    <label for="exampleInputEmail1">Enter longitude</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter longitude" name="long"
                           class="form-control @error('long') is-invalid @enderror" value="{{ $map->long }}">
                </div>

                @error('long')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
