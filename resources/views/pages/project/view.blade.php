@extends('bases.container')

@section('content')
    @include('parts.project.max',[
            'title' => $project->title,
            'description' => $project->description,
            'link' => $project->link,
            'date' => $project->date,
            'filename' => $project->image,
        ])
@endsection
