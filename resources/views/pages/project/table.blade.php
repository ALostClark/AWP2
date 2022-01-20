@extends('bases.container')

@section('content')
<div class="float-right">
    <a class="btn btn-primary" href="{{ route('create_project') }}">New Project</a>
    <p>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Link</th>
            <th scope="col">Date</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    @foreach($projects as $project)
        @include('parts.project.row',[
            'title' => $project->title,
            'description' => $project->description,
            'link' => $project->link,
            'date' => $project->date,
            'image' => $project->image,
            'edit' => route('edit_project', ['project' => $project]),
            'delete' => route('delete_project', ['project' => $project]),
            'cardify' => route('cardify_project', ['project' => $project])
        ])
    @endforeach
</table>
@endsection
