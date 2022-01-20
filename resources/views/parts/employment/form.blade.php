<form action="{{ $action }}" method="post">
  @csrf
  <div id="form-group">
    <label for="title-input">Job Title:</label>
    <input name=" title" value="{{ $title ?? "" }}" class="form-control" id="title-input">
  </div><p></p>
  <div id="form-group">
    <label for="location-input">Employed Where:</label>
    <input name=" location" value="{{ $location ?? "" }}" class="form-control" id="location-input">
  </div><p></p>
  <div id="form-group">
    <label for="description-input">Job Description:</label>
    <textarea name="description" class="form-control" id="description-input" rows="5">{{ $description ?? "" }}</textarea>
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
    <label for="reference-input">Reference:</label>
    <input name=" reference" value="{{ $reference ?? "" }}" class="form-control" id="reference-input">
  </div><p></p>
  <div id="form-group">
    <label for="reason_forL-input">Reason For Leaving:</label>
    <input name=" reason_forL" value="{{ $reason_forL ?? "" }}" class="form-control" id="reason_forL-input">
  </div><p></p>
  <div id="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
