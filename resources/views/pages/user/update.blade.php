@extends('bases.container')

@section('content')
    <div class="float-right">
        <form id="profile-icon-form" action="{{ route('update_profile_icon') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input id="profile-upload" type="file" name="file" class="form-control">
            <button id="button" name="button" value="Change Profile Icon" class="btn btn-primary" type="submit">Change Profile Icon</button>
        </form>
    </div>
    @include('parts.user.form', [
        'action' => route('edit_user'),
        'name' => $user->name,
        'email' => $user->email,
        'date_of_birth' => $user->date_of_birth,
        'about_me' => $user->about_me
    ])
@endsection

