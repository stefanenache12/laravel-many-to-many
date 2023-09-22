<div class="w-100 pt-4 pb-4">
    <div class="container align-middle">
        <div class="row align-items-center">
            <div class="logo col-4">
                <a href="{{ route('guest.welcome') }}">
                    <h1>
                        LOGO
                    </h1>
                </a>
            </div>
            <div class="col-2">
    
            </div>
            <div class="nav-links col-6">
                <ul class="d-flex align-items-center mb-0">
                    @auth
                        <li>
                            <a href="{{ route('guest.welcome') }}">Guest View</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.projects.index') }}">Projects</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.types.index') }}">Types</a>
                        </li>
                        <li>
                            <div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
            
                                    <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill">
                                        Log Out
                                    </button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
        
    </div>
</div>