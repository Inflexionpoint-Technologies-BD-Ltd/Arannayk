@extends('admin.admin-panel.admin-panel')

@section('content')


    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif

    <h4>Edit Contact Information</h4>
    <hr>

    <div>
        <form action="{{ route('contact.update', $contact->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')

            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Address</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Address" name="address" value="{{ $contact->address }}"
                           class="form-control @error('address') is-invalid @enderror">
                </div>

                @error('address')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Phone Number</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Phone Number" name="phone"
                           class="form-control @error('phone') is-invalid @enderror" value="{{ $contact->phone }}">
                </div>

                @error('phone')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Email info</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Email Info" name="email"
                           class="form-control @error('email') is-invalid @enderror" value="{{ $contact->email }}">
                </div>

                @error('email')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Office Time</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Office Time" name="office_time"
                           class="form-control @error('office_time') is-invalid @enderror" value="{{ $contact->office_time }}">
                </div>

                @error('office_time')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Facebook Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Facebook Link" name="fb_link"
                           class="form-control @error('fb_link') is-invalid @enderror" value="{{ $contact->fb_link }}">
                </div>

                @error('fb_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Youtube Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Youtube Link" name="yt_link"
                           class="form-control @error('yt_link') is-invalid @enderror" value="{{ $contact->yt_link }}">
                </div>

                @error('yt_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter LinkedIn Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter LinkedIn Link" name="ln_link"
                           class="form-control @error('ln_link') is-invalid @enderror" value="{{ $contact->ln_link }}">
                </div>

                @error('ln_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Flicker Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Flicker Link" name="flicker_link"
                           class="form-control @error('flicker_link') is-invalid @enderror" value="{{ $contact->flicker_link }}">
                </div>

                @error('flicker_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Twitter Link</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter Twitter Link" name="twitter_link"
                           class="form-control @error('twitter_link') is-invalid @enderror" value="{{ $contact->twitter_link }}">
                </div>

                @error('twitter_link')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label for="exampleInputEmail1">RJSC</label>
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter rjsc" name="rjsc"
                           class="form-control @error('rjsc') is-invalid @enderror" value="{{ $contact->rjsc }}">
                </div>

                @error('rjsc')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
