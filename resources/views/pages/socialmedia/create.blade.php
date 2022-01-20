@extends('bases.container')

@section('content')
    @include('parts.socialmedia.form', ['action' => route('create_socialmedia')])
@endsection
