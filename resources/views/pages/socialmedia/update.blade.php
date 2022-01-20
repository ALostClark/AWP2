@extends('bases.container')

@section('content')
    @include('parts.socialmedia.form', [
        'action' => route('edit_socialmedia', ['socialmedia' => $socialmedia]),
          'name' => $socialmedia->name,
          'link' => $socialmedia->link,
    ])
@endsection
