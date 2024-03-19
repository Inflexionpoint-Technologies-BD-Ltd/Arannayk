@extends('admin.admin-panel.admin-panel')

@section('content')


    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Add Contact Information</h4>
    <hr>

    <div>
        <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Address</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Address" name="address"
                           class="form-control @error('address') is-invalid @enderror">
                </div>

                @error('address')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Phone Number</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Phone Number" name="phone"
                           class="form-control @error('phone') is-invalid @enderror">
                </div>

                @error('phone')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Email info</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Email Info" name="email"
                           class="form-control @error('email') is-invalid @enderror">
                </div>

                @error('email')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Office Time</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Office Time" name="office_time"
                           class="form-control @error('office_time') is-invalid @enderror">
                </div>

                @error('office_time')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Facebook Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Facebook Link" name="fb_link"
                           class="form-control @error('fb_link') is-invalid @enderror">
                </div>

                @error('fb_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Youtube Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Youtube Link" name="yt_link"
                           class="form-control @error('yt_link') is-invalid @enderror">
                </div>

                @error('yt_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter LinkedIn Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter LinkedIn Link" name="ln_link"
                           class="form-control @error('ln_link') is-invalid @enderror">
                </div>

                @error('ln_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Flicker Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Flicker Link" name="flicker_link"
                           class="form-control @error('flicker_link') is-invalid @enderror">
                </div>

                @error('flicker_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Twitter Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Twitter Link" name="twitter_link"
                           class="form-control @error('twitter_link') is-invalid @enderror">
                </div>

                @error('twitter_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">RJSC</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter rjsc" name="rjsc"
                           class="form-control @error('rjsc') is-invalid @enderror">
                </div>

                @error('rjsc')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
