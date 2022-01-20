@extends('bases.container')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Footer</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        @foreach($cards as $card)
            @include('parts.card.row',[
                'title' => $card->title,
                'body' => $card->body,
                'link' => $card->link,
                'footer' => $card->footer,
            ])
        @endforeach
    </table>
@endsection
