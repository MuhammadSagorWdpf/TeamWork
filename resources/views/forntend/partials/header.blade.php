<!-- mobile header -->
<div
      class="mobile-header d-flex align-items-center justify-content-between p-4 d-none">
      <a href="./index.html" class="mobile-logo">
        <img src="./assets/images/logo.png" alt="logo">
      </a>
      <div class="mobile-menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
          viewBox="0 0 24 24" fill="none">
          <path d="M3 7H21" stroke stroke-width="1.5" stroke-linecap="round" />
          <path d="M3 12H21" stroke stroke-width="1.5" stroke-linecap="round" />
          <path d="M3 17H21" stroke stroke-width="1.5" stroke-linecap="round" />
        </svg>
      </div>
    </div>
    <!-- mobile header -->
    <!-- header area starts -->
    <header>
      <div class="header-main d-flex justify-content-between container">
        <a href="./index.html" class="logo-area">
          <img src="{{asset('assets/images/logo.png')}}" alt="Logo" srcset>
          <span class="close-sidebar-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
              viewBox="0 0 384 512">
              <path
                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
          </span>
        </a>
        <div class="header-menu-area d-flex align-items-center">
          <ul
            class="menu d-flex align-items-center justify-content-between list-unstyled">
            <li class="text-decoration-none {{ request()->is('/') ? 'tm-active-menu' : '' }} "><a href="{{ url('/') }}">Home</a></li>
            <li class="text-decoration-none {{ request()->routeIs('about') ? 'tm-active-menu' : '' }}"><a href="{{route('about')}}">About Us</a></li>
            <li class="text-decoration-none {{request()->routeIs('services') ? 'tm-active-menu': ''}}"><a href="{{route('services')}}">Service</a></li>
            <li class="text-decoration-none {{request()->routeIs('psychologist') ? 'tm-active-menu': ''}}"><a href="{{route('psychologist')}}">Our
                Psychologist</a></li>
                <li class="text-decoration-none {{ request()->routeIs('contact') ? 'tm-active-menu' : '' }}">
    <a href="{{ route('contact') }}">Appointment</a>
</li>
<li class="text-decoration-none {{ request()->routeIs('sign-up') ? 'tm-active-menu' : '' }}">
    <a href="{{ route('sign-up') }}">Become A Psychologist</a>
</li>

          </ul>
          <!-- <a href="{{url('account-type')}}" class="nav-btn {{ request()->is('account-type*') ? 'tm-menu-item': ''}}">Get started</a> -->
          <a href="{{ route('account-type') }}" class="nav-btn {{ request()->routeIs('account-type') ? 'tm-menu-item' : '' }}">Get started</a>


        </div>
      </div>
    </header>

    <!-- header area ends -->

    <!-- main area starts -->