<tr>
  <td>{{ $title }}</td>
  <td>{{ $description }}</td>
  <td>{{ $link }}</td>
  <td>{{ $date }}</td>
  <td>{{ $image }}</td>
  <td><a href="{{ $cardify }}"><ion-icon name="albums-outline"></ion-icon></a><a href="{{ $edit }}"><ion-icon name="create-outline"></ion-icon></a> <a href="{{ $delete }}" onclick="event.preventDefault();document.getElementById('delete-form').submit();"><ion-icon name="trash-outline"></ion-icon></a></td>
</tr>
<form id="delete-form" action="{{ $delete }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
