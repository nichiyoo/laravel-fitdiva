<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo" href="{{ route('landing.index') }}"><x-dashboard.logo /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('landing.index') }}"><x-dashboard.icon /></a>
  </div>

  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>

    <div class="search-field d-none d-md-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <i class="input-group-text border-0 mdi mdi-magnify"></i>
          </div>
          <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
        </div>
      </form>
    </div>

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
          aria-expanded="false">
          <div class="nav-profile-img">
            <x-ui.avatar name="{{ Auth::user()->name }}" image="{{ Auth::user()->image }}" />
            <span class="availability-status online"></span>
          </div>

          <div class="nav-profile-text">
            <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
          </div>
        </a>

        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="{{ route('profile.index') }}">
            <i class="mdi mdi-account me-2 text-primary"></i>
            <span>Profile</span>
          </a>

          <a id="logout-button" class="dropdown-item" hrhref="{{ route('logout') }}">
            <i class="mdi mdi-logout me-2 text-primary"></i>
            <span>Signout</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
    </ul>

    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>

@push('scripts')
  <script>
    const logoutButton = document.getElementById('logout-button');
    const logoutForm = document.getElementById('logout-form');

    logoutButton.addEventListener('click', function(event) {
      event.preventDefault();
      logoutForm.submit();
    });
  </script>
@endpush
