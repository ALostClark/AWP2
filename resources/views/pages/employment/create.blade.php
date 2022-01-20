@extends('bases.container')

@section('content')
    @include('parts.employment.form', ['action' => route('create_employment')])
@endsection
