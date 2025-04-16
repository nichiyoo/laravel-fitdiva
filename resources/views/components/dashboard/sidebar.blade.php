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
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
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
                  ['label' => 'List Users', 'href' => route('admin.users.index')],
                  ['label' => 'List Customer', 'href' => route('admin.users.index', ['role' => 'Customer'])],
                  ['label' => 'List Admins', 'href' => route('admin.users.index', ['role' => 'Administrator'])],
                  ['label' => 'Create User', 'href' => route('admin.users.create')],
              ],
          ],
          [
              'id' => 'course',
              'label' => 'Manage Courses',
              'icon' => 'mdi mdi-basketball',
              'menus' => [
                  ['label' => 'List Courses', 'href' => route('admin.courses.index')],
                  ['label' => 'Create Courses', 'href' => route('admin.courses.create')],
              ],
          ],
          [
              'id' => 'exercises',
              'label' => 'Manage Exercises',
              'icon' => 'mdi mdi-dumbbell',
              'menus' => [
                  ['label' => 'List Exercises', 'href' => route('admin.exercises.index')],
                  ['label' => 'Create Exercise', 'href' => route('admin.exercises.create')],
              ],
          ],
          [
              'id' => 'articles',
              'label' => 'Manage Articles',
              'icon' => 'mdi mdi-post-outline',
              'menus' => [
                  ['label' => 'List Categories', 'href' => route('admin.categories.index')],
                  ['label' => 'Create Category', 'href' => route('admin.categories.create')],
                  ['label' => 'List Articles', 'href' => route('admin.articles.index')],
                  ['label' => 'Create Article', 'href' => route('admin.articles.create')],
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
