<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="images/logo.png" alt="logo" width=120px>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('redirect')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('card')}}">
                        <span class="icon-cart">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                                <circle cx="9" cy="21" r="1"></circle>
                                <circle cx="20" cy="21" r="1"></circle>
                                <path d="M1 1h4l2.8 14H20M6.8 15L9 3h10"></path>
                            </svg>
                            
                            
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('user/profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>