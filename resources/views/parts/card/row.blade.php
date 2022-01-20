<tr>
    <td><a href="{{ $link }}">{{ $title }}</a></td>
    <td style="white-space: pre-line">{!! $body !!}</td>
    <td>{{ $footer }}</td>
    <td><a href="{{ route('decrement_card', ['card' => $card]) }}"><ion-icon name="caret-up-outline"></ion-icon></a><a href="{{ route('increment_card', ['card' => $card]) }}"><ion-icon name="caret-down-outline"></ion-icon></a><a href="{{ route('delete_card', ['card' => $card]) }}" onclick="event.preventDefault();document.getElementById('delete-form').submit();"><ion-icon name="trash-outline"></ion-icon></a></td>
</tr>
<form id="delete-form" action="{{ route('delete_card', ['card' => $card]) }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
