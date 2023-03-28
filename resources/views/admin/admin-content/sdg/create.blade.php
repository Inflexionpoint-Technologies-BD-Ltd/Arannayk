@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('create') != null)
        <p>{{ session('create') }}</p>
    @endif


    @if(request('project_type') == 'project')
        <h4>ADD SDG Content for - {{ \App\Project::find($id)->title }}</h4>
    @elseif(request('project_type') == 'archive')
        <h4>ADD SDG Content for - {{ \App\Archive::find($id)->title }}</h4>
    @endif

    <hr>

    <div>
        <form action="{{ route('svg.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <form>

                <div class="form-group">

                    {{--                    <label for="exampleInputEmail1">SDG Project Type Initial ( Don't change )</label>--}}

                    <input type="hidden" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Project Type" name="sdg_type" value="{{ request('project_type') }}"
                           class="form-control">

                    {{--                    <label for="exampleInputEmail1">SDG Project Type Initial ( Don't change )</label>--}}


                    <input type="hidden" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="SDG ID" name="sdg_id" value="{{ $id }}"
                           class="form-control">
                </div>

                @error('title')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter Image</label>
                    <input type="file" class="form-control-file @error('files.*') is-invalid @enderror"
                           id="exampleFormControlFile1" name="files[]" multiple required>
                </div>

                @error('files.*')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>
@endsection
