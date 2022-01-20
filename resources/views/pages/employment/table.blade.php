@extends('bases.container')

@section('content')
<div class="float-right">
    <a class="btn btn-primary" href="{{ route('create_employment') }}">New Employment</a>
    <p>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">location</th>
            <th scope="col">Description</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Reference</th>
            <th scope="col">Reason for Leaving</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    @foreach($employments as $employment)
        @include('parts.employment.row',[
            'title' => $employment->title,
            'location' => $employment->location,
            'description' => $employment->description,
            'reason_forL' => $employment->reason_forL,
            'reference' => $employment->reference,
            'start_date' => $employment->start_date,
            'end_date' => $employment->end_date,
            'edit' => route('edit_employment', ['employment' => $employment]),
            'delete' => route('delete_employment', ['employment' => $employment]),
            'cardify' => route('cardify_employment', ['employment' => $employment])
        ])
    @endforeach
</table>
@endsection
