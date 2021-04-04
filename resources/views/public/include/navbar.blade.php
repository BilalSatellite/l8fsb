    <!-- Navigation fixed-top-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="img/logo/smi.png" alt="Logo" style="width:40px;">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="">
                <div class="block">
                    <div class="cta">
                        <div class="toggle-btn type9"></div>
                    </div>
                </div>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav group1   mr-auto">
                {{-- {{ Route::is('/') ? 'active' : '' }} --}}
                <li class="nav-item active">
                    <a class="nav-link " href="{{ url('/') }}">{{ __('Home') }}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="course.html">Course</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Repairing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        @if (Route::has('login'))

         @auth
            <ul class=" navbar-nav  group3">
                <li class="nav-item dropdown ">
                    <a class="nav-link group-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Welcome, <span> {{ auth()->user()->name }}</span>.
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg"
                            class="rounded-circle z-depth-0" alt="avatar image">
                    </a>
                    <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item drop-itemdh" href="{{ url('dashbord') }}">Dashbord</a>
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
            </ul>
            @else
            <ul class=" navbar-nav  group2">
                <li class="nav-item ">
                   <a class="nav-link lrlink" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <span class="nav_span">|</span>
                       <a class="nav-link lrlink" href="{{ route('register') }}">{{ __('Register') }}</a>

                    @endif
                </li>
            </ul>

            @endauth
        @endif
        </div>
    </nav>



    <!-- Navigation end-->
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif


    </div> --}}
