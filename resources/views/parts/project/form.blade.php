<form action="{{ $action }}" method="post" enctype="multipart/form-data">
  @csrf
  <div id="form-group">
    <label for="title-input">Title:</label>
    <input name=" title" value="{{ $title ?? "" }}" class="form-control" id="title-input">
  </div><p></p>
  <div id="form-group">
    <label for="description-input">Description:</label>
    <textarea name="description" class="form-control" id="description-input" rows="5">{{ $description ?? "" }}</textarea>
  </div><p></p>
  <div id="form-group">
    <label for="link-input">Link:</label>
    <input name="link" value="{{ $link ?? "" }}" class="form-control" id="link-input">
  </div><p></p>
  <div id="form-group">
    <label for="date-input">Date:</label>
    <input name="date" value="{{ $date ?? "" }}" class="form-control" id="date-input">
  </div><p></p>
  <div id="form-group">
     <label for="date-input">Picture:</label>
     <input name="file" class="form-control" id="file-input" type="file">
  </div><p></p>

  <div id="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
