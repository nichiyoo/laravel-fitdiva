<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('landing.index') }}">
      <span class="flaticon-lotus"></span>
      {{ config('company.name') }}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span>
      <span>Menu</span>
    </button>

    @php
      $navigations = array_to_object([
          [
              'label' => 'Home',
              'href' => route('landing.index'),
              'active' => request()->routeIs('landing.index'),
              'hidden' => false,
          ],
          [
              'label' => 'Courses',
              'href' => route('landing.courses'),
              'active' => request()->routeIs('landing.courses'),
              'hidden' => false,
          ],
          [
              'label' => 'Exercises',
              'href' => route('landing.exercises'),
              'active' => request()->routeIs('landing.exercises'),
              'hidden' => false,
          ],
          [
              'label' => 'About',
              'href' => route('landing.about'),
              'active' => request()->routeIs('landing.about'),
              'hidden' => false,
          ],
          [
              'label' => 'Articles',
              'href' => route('landing.articles'),
              'active' => request()->routeIs('landing.articles'),
              'hidden' => false,
          ],
          [
              'label' => 'Login',
              'href' => route('login'),
              'active' => request()->routeIs('login'),
              'hidden' => Auth::check(),
          ],
          [
              'label' => 'Dashboard',
              'href' => route('home'),
              'active' => request()->routeIs('home'),
              'hidden' => !Auth::check(),
          ],
      ]);
    @endphp

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        @foreach ($navigations as $navigation)
          @if ($navigation->hidden)
          @else
            <li class="nav-item {{ $navigation->active ? 'active' : '' }}">
              <a href="{{ $navigation->href }}" class="nav-link">{{ $navigation->label }}</a>
            </li>
          @endif
        @endforeach
      </ul>
    </div>
  </div>
</nav>
