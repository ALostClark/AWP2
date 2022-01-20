<div class="container-fluid">
<br />
<br />
<br />
<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="name-input">Name:</label>
        <input name="name" value="{{ $name ?? "" }}" class="form-control" id="name-input">
    </div><p></p>
    <div id="form-group">
        <label for="email-input">Email:</label>
        <input name="email" value="{{ $email ?? "" }}" class="form-control" id="email-input">
    </div><p></p>
    <div id="form-group">
        <label for="about_me-input">About Me:</label>
        <textarea name="about_me" class="form-control" id="about_me-input" rows="5">{{ $about_me ?? "" }}</textarea>
    </div><p></p>
    <div id="form-group">
        <label for="date_of_birth-input">Date of Birth:</label>
        <input name="date_of_birth" value="{{ $date_of_birth ?? "" }}" class="form-control" id="date_of_birth-input">
    </div><p></p>
    <div id="form-group">
        <label for="password-input">Password:</label>
        <input name="password" value="" class="form-control" id="password-input" type="password">
    </div><p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
