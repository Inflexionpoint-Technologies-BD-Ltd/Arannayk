@extends('admin.admin-panel.admin-panel')

@section('content')

    @if(session('update') != null)
        <p>{{ session('update') }}</p>

    @elseif(session('delete') != null)
        <p>{{ session('delete') }}</p>
    @endif


    <h4>View Contact Information</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Office Time</th>

            <th>FB Link</th>
            <th>Yt Link</th>
            <th>ln Link</th>
            <th>Flickr Link</th>
            <th>Twitter Link</th>
            <th>rjsc</th>

            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $id += 1 }}</td>
                <td>{{ $contact->address }}</td>
                <td>{!! $contact->phone !!}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->office_time }}</td>

                <td>{{ $contact->fb_link }}</td>
                <td>{{ $contact->yt_link }}</td>
                <td>{{ $contact->ln_link }}</td>
                <td>{{ $contact->flicker_link }}</td>
                <td>{{ $contact->twitter_link }}</td>
                <td>{{ $contact->rjsc }}</td>


                <td><a href="{{ route('contact.edit',$contact->id) }}" class="btn btn-info">Update</a></td>
                <td>
                    <form action="{{ route('contact.destroy',$contact->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
