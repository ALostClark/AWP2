@extends('bases.container')

@section('content')
    @include('parts.project.form', [
        'action' => route('edit_project', ['project' => $project]),
            'title' => $project->title,
            'description' => $project->description,
            'link' => $project->link,
            'date' => $project->date,
            'image' => $project->image,
    ])
@endsection
