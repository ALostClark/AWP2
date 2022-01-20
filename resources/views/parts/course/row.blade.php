<tr>
  <td>{{ $courseID }}</td>
  <td>{{ $study_period }}</td>
  <td>{{ $title }}</td>
  <td>{{ $description }}</td>
  <td>{{ $result }}</td>
  <td>{{ $start_date }}</td>
  <td>{{ $end_date }}</td>
  <td><a href="{{ $cardify }}"><ion-icon name="albums-outline"></ion-icon></a><a href="{{ $edit }}"><ion-icon name="create-outline"></ion-icon></a><a href="{{ $delete }}" onclick="event.preventDefault();document.getElementById('delete-form').submit();"><ion-icon name="trash-outline"></ion-icon></a></td>
</tr>
<form id="delete-form" action="{{ $delete }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
