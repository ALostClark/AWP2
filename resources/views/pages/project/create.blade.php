@extends('bases.container')

@section('content')
    @include('parts.project.form', ['action' => route('create_project')])
@endsection
