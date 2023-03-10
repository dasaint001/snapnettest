<nav class="navbar navbar-expand-md navbar-light bg-success text-white shadow-sm mb-5">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/admin-panel') }}">
            Admin Panel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/citizens">Citizens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/roles">Roles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/states">States</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/states">Lgas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/wards">Wards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/citizens/create">New Citizen</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">                        
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>