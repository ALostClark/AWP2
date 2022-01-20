<tr>
  <td>{{ $name }}</td>
  <td>{{ $address }}</td>
  <td>{{ $description }}</td>
  <td><a href="{{ $edit }}"><ion-icon name="create-outline"></ion-icon></a> <a href="{{ $delete }}" onclick="event.preventDefault();document.getElementById('delete-form').submit();"><ion-icon name="trash-outline"></ion-icon></a></td>
</tr>
<form id="delete-form" action="{{ $delete }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
