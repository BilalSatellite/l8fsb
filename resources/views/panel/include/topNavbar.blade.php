<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-home"></i> Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link group-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Hi, <span> {{ auth()->user()->name }}</span>.
            <img src="{{ asset('img/avatar.png') }}" class="rounded-circle z-depth-0" style="width: 35px; hight:35px" alt="avatar image">
        </a>
        <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item drop-itemdh" href="{{ route('user.dashbord') }}">Dashbord</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item drop-item" href="{{ route('user.profile') }}">My profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item drop-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                                                    >{{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>

        </a>
    </li>
</ul>
</nav>
