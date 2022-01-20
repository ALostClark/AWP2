@extends('bases.container')

@section('content')
    @include('parts.course.form', ['action' => route('create_course')])
@endsection
