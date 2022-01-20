<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom text-light" style="min-height: 25px !important; padding-top: 2px !important; padding-bottom: 2px !important;">
    <div class="navbar-brand abs">
        <ul class="nav navbar-nav ml-auto">
            <li><a class="nav-link" href="/">{{ App\User::find(1)->name }}'s Portfolio</a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="nav navbar-nav ml-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_cards') }}">Cards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_courses') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_employments') }}">Employments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_projects') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('all_socialmedia') }}">Social Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('edit_user') }}">Update User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
