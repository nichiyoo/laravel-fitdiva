<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <x-ui.avatar name="{{ Auth::user()->name }}" />
          <span class="login-status online"></span>
        </div>

        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
          <span class="text-secondary text-small">{{ Auth::user()->role }}</span>
        </div>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    @php
      $menus = array_to_object([
          [
              'id' => 'users',
              'label' => 'Manage Users',
              'icon' => 'mdi mdi-account-multiple',
              'menus' => [
                  ['label' => 'List Users', 'href' => route('landing.index')],
                  ['label' => 'List Admins', 'href' => route('landing.index')],
                  ['label' => 'Create User', 'href' => route('landing.index')],
              ],
          ],
          [
              'id' => 'classs',
              'label' => 'Manage Classs',
              'icon' => 'mdi mdi-basketball',
              'menus' => [
                  ['label' => 'List Classes', 'href' => route('landing.index')],
                  ['label' => 'Create Class', 'href' => route('landing.index')],
              ],
          ],
          [
              'id' => 'exercises',
              'label' => 'Manage Exercises',
              'icon' => 'mdi mdi-dumbbell',
              'menus' => [
                  ['label' => 'List Exercises', 'href' => route('landing.index')],
                  ['label' => 'Create Exercise', 'href' => route('landing.index')],
              ],
          ],
          [
              'id' => 'articles',
              'label' => 'Manage Articles',
              'icon' => 'mdi mdi-post-outline',
              'menus' => [
                  ['label' => 'List Articles', 'href' => route('landing.index')],
                  ['label' => 'Create Article', 'href' => route('landing.index')],
              ],
          ],
      ]);
    @endphp

    @foreach ($menus as $menu)
      <x-dashboard.sidenav id="{{ $menu->id }}" label="{{ $menu->label }}" icon="{{ $menu->icon }}">
        @foreach ($menu->menus as $submenu)
          <li class="nav-item">
            <a class="nav-link" href="{{ $submenu->href }}">{{ $submenu->label }}</a>
          </li>
        @endforeach
      </x-dashboard.sidenav>
    @endforeach

    <li class="nav-item">
      <a class="nav-link" href="docs/documentation.html" target="_blank">
        <span class="menu-title">Documentation</span>
        <i class="mdi mdi-file-document-box menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>
