@extends('bases.container')

@section('content')
<div class="float-right">
    <a class="btn btn-primary" href="{{ route('create_course') }}">New Course</a>
    <p>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Course ID</th>
            <th scope="col">Study Period</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Result</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    @foreach($courses as $course)
        @include('parts.course.row',[
            'courseID' => $course->courseID,
            'study_period' => $course->study_period,
            'title' => $course->title,
            'description' => $course->description,
            'result' => $course->result,
            'start_date' => $course->start_date,
            'end_date' => $course->end_date,
            'edit' => route('edit_course', ['course' => $course]),
            'delete' => route('delete_course', ['course' => $course]),
            'cardify' => route('cardify_course', ['course' => $course])
        ])
    @endforeach
</table>
@endsection
