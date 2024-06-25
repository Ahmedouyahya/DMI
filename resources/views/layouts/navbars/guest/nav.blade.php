<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 {{ (Request::is('static-sign-up') ? 'w-100 shadow-none  navbar-transparent mt-4' : 'blur blur-rounded shadow py-2 start-0 end-0 mx4') }}">
    <div class="container-fluid {{ (Request::is('/') ? 'container' : 'container-fluid') }}">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 {{ (Request::is('static-sign-up') ? 'text-white' : '') }}" href="{{ url('dashboard') }}">
        <img src="../assets/img/logo.png" alt="" height="20px" w>
        DMI
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link me-2 {{ (request()->is('/') ? 'active' : '') }}" href="{{ route('home') }}">
              <i class="fas fa-home opacity-6 me-1 {{ (request()->is('/') ? '' : 'text-dark') }}"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 {{ (request()->is('about') ? 'active' : '') }}" href="{{ route('about') }}">
              <i class="fas fa-info-circle opacity-6 me-1 {{ (request()->is('about') ? '' : 'text-dark') }}"></i>
              About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 {{ (request()->is('contact') ? 'active' : '') }}" href="{{ route('contact') }}">
              <i class="fas fa-envelope opacity-6 me-1 {{ (request()->is('contact') ? '' : 'text-dark') }}"></i>
              Contact
            </a>
          </li>
          @if (auth()->user())
            <li class="nav-item">
              <a class="nav-link me-2 {{ (request()->is('profile') ? 'active' : '') }}" href="{{ route('profile') }}">
                <i class="fa fa-user opacity-6 me-1 {{ (request()->is('profile') ? '' : 'text-dark') }}"></i>
                Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center me-2 {{ (request()->is('dashboard*') ? 'active' : '') }}" aria-current="page" href="{{ url('dashboard') }}">
                <i class="fa fa-chart-pie opacity-6 me-1 {{ (request()->is('dashboard*') ? '' : 'text-dark') }}"></i>
                Dashboard
              </a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link me-2 {{ (request()->is('register') ? 'active' : '') }}" href="{{ auth()->user() ? url('static-sign-up') : url('register') }}">
              <i class="fas fa-user-circle opacity-6 me-1 {{ (request()->is('register') ? '' : 'text-dark') }}"></i>
              Sign Up
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2 {{ (request()->is('login*') ? 'active' : '') }}" href="{{ auth()->user() ? url('static-sign-in') : url('login') }}">
              <i class="fas fa-key opacity-6 me-1 {{ (request()->is('login*') ? '' : 'text-dark') }}"></i>
              Sign In
            </a>
          </li>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="https://rim-un.free.nf/pages/list_note.php" target="_blank" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-{{ (Request::is('static-sign-up') ? 'light' : 'dark') }}">Les resulta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
