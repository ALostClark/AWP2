@extends('bases.container')

@section('content')
    @include('parts.location.max',[
              'title' => $location->title,
              'location' => $location->address,
              'description' => $location->description,
          ])
@endsection
