<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <div class="container">

                <ul class="nav justify-content-center navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('hr.dashboard') ? 'active' : '' }} "
                            aria-current="page" href="{{ route('hr.dashboard') }}">Dashboard</a>
                    </li>
                    @can('show karyawan')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('hr.karyawan') ? 'active' : '' }}"
                                href="{{ route('hr.karyawan') }}">Karyawan</a>
                        </li>
                    @endcan
                    @can('show gaji')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('hr.gaji') ? 'active' : '' }}"
                                href="{{ route('hr.gaji') }}">Gaji</a>
                        </li>
                    @endcan
                    @can('show absensi')s
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('hr.absensi') ? 'active' : '' }}"
                                href="{{ route('hr.absensi') }}">absensi</a>
                        </li>
                    @endcan
                </ul>
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
