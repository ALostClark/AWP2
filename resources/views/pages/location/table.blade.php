@extends('bases.container')

@section('content')
<div class="float-right">
    <a class="btn btn-primary" href="{{ route('create_location') }}">New Location</a>
    <p>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    @foreach($locations as $location)
        @include('parts.location.row',[
            'title' => $location->title,
            'location' => $location->address,
            'description' => $location->description,
            'edit' => route('edit_location', ['location' => $location]),
            'delete' => route('delete_location', ['location' => $location]),
        ])
    @endforeach
</table>
@endsection
