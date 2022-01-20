@extends('bases.container')

@section('content')
    @include('parts.course.max',[
         'courseID' => $course->courseID,
         'study_period' => $course->study_period,
         'title' => $course->title,
         'description' => $course->description,
         'result' => $course->result,
         'start_date' => $course->start_date,
         'end_date' => $course->end_date,
     ])
@endsection
