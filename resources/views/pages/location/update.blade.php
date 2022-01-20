@extends('bases.container')

@section('content')
    @include('parts.location.form', [
        'action' => route('edit_location', ['location' => $location]),
        'title' => $location->title,
        'location' => $location->address,
        'description' => $location->description,
    ])
@endsection
