@extends('bases.base')

@section('body')
    <div class="container-fluid h-100" >
        <div class="row h-100">
            <div class="col-sm-3 h-100 border-right" style="padding: 10px; text-align: left">
                <img src="storage/profile.png" alt="{{ $user->name }}" style="max-width: 400px; max-height: 400px; width:100%; height:auto; margin-left:auto; margin-right:auto; display:block; border-radius:50%;">
                <p><h1>{{ $user->name }}</h1>
                {{ $user->about_me }}
                <p>
                <br /><h3>Get in Contact:</h3>
                <p><a href="mailto:{{ $user->email }}">Email</a>
                @isset($social_media)
                    @foreach($social_media as $network)
                        <br /><a href="{{ $network->link }}">{{ $network->name }}</a>
                    @endforeach
                @endisset
            </div>
            <div class="col-sm-9 h-100" style="padding: 10px">
                @foreach($cards as $card)
                    @include('parts.card.card', [
                        'title' => $card->title,
                        'body' => $card->body,
                        'footer' => $card->footer,
                        'link' => $card->link,
                    ])
                    <br />
                @endforeach
            </div>
        </div>
    </div>
@endsection
