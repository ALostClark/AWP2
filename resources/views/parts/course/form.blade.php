<form action="{{ $action }}" method="post">
  @csrf
  <div id="form-group">
    <label for="courseID-input">Course ID:</label>
    <input name=" courseID" value="{{ $courseID ?? "" }}" class="form-control" id="courseID-input">
  </div><p></p>
  <div id="form-group">
    <label for="study_period-input">Studied At:</label>
    <input name=" study_period" value="{{ $study_period ?? "" }}" class="form-control" id="study_period-input">
  </div><p></p>
  <div id="form-group">
    <label for="title-input">Course Title:</label>
    <input name=" title" value="{{ $title ?? "" }}" class="form-control" id="title-input">
  </div><p></p>
  <div id="form-group">
    <label for="description-input">Description:</label>
    <textarea name="description" class="form-control" id="description-input" rows="5">{{ $description ?? "" }}</textarea>
  </div><p></p>
  <div id="form-group">
    <label for="result-input">Result:</label>
    <input name=" result" value="{{ $result ?? "" }}" class="form-control" id="result-input">
  </div><p></p>
  <div id="form-group">
    <label for="start_date-input">Start Date:</label>
    <input name=" start_date" value="{{ $start_date ?? "" }}" class="form-control" id="start_date-input">
  </div><p></p>
  <div id="form-group">
    <label for="end_date-input">End Date:</label>
    <input name=" end_date" value="{{ $end_date ?? "" }}" class="form-control" id="end_date-input">
  </div><p></p>
  <div id="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
