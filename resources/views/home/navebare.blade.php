<nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="{{ route('redirect') }}"><img src="images/logo.png" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            
           
            <ul class="navbar-nav navbar-nav-right">
             
              
              <li  class=" nav-item ">
                <form methode="GET" action="{{ route('profile.show') }}">
                  @csrf
                  <a class="btn bnt-primary" href="{{ route('profile.show') }}">
  {{__('Profile')}}
                  </a>
                            </form>
              </li>
              
              
              <li  class=" nav-item ">
              <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a class="btn bnt-primary" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
        {{ __('Log Out') }}
    </a>
</form>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>