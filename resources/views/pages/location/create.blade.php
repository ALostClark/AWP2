@extends('bases.container')

@section('content')
    @include('parts.location.form', ['action' => route('create_location')])
@endsection
