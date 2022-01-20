@extends('bases.container')

@section('content')
    @include('parts.employment.form', [
        'action' => route('edit_employment', ['employment' => $employment]),
        'title' => $employment->title,
        'location' => $employment->location,
        'description' => $employment->description,
        'reason_forL' => $employment->reason_forL,
        'reference' => $employment->reference,
        'start_date' => $employment->start_date,
        'end_date' => $employment->end_date,
    ])
@endsection
