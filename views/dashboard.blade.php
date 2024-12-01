<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">  
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @else
            @endauth
        </ul>
    </div>
</nav>
