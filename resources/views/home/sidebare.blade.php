<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="images/logo.png" alt="logo"  width="150px" height="50px"/></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><span class="h1 text-danger">S</span></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                  <span>Admin Member</span>
                </div>
              </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
         
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('addproduct')}}">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Products</span>
            </a>
            
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('comandes')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Les comandes</span>
            </a>
          </li>
          
        </ul>
      </nav>