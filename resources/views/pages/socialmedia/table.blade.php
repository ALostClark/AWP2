@extends('bases.container')

@section('content')
<div class="float-right">
    <a class="btn btn-primary" href="{{ route('create_socialmedia') }}">New Social Media</a>
    <p>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    @foreach($socialmedias as $socialmedia)
        @include('parts.socialmedia.row',[
            'name' => $socialmedia->name,
            'link' => $socialmedia->link,
            'edit' => route('edit_socialmedia', ['socialmedia' => $socialmedia]),
            'delete' => route('delete_socialmedia', ['socialmedia' => $socialmedia])
        ])
    @endforeach
</table>
@endsection
