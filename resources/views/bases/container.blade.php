@extends('bases.base')

@section('body')
    <p></p>
    <div id="container" style="padding-left: 5%; padding-right: 5%">
        <div id="content" class="bg-light text-dark" style="padding: 1% 50px; border: 2px solid darkgray; border-radius: 5px;">
            @yield('content')
        </div>
    </div>
@endsection
