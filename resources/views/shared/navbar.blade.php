<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#00aa99;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Learning Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" >
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Member
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if (Auth::check())
                            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                        @else
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
