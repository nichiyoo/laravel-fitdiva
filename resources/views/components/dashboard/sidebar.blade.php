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
          <span class="text-secondary text-small">Project Manager</span>
        </div>

        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
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
              'id' => 'ui-basic',
              'label' => 'Basic UI Elements',
              'icon' => 'mdi mdi-crosshairs-gps',
              'menus' => [
                  ['label' => 'Buttons', 'href' => 'pages/ui-features/buttons.html'],
                  ['label' => 'Dropdowns', 'href' => 'pages/ui-features/dropdowns.html'],
                  ['label' => 'Typography', 'href' => 'pages/ui-features/typography.html'],
              ],
          ],
          [
              'id' => 'icons',
              'label' => 'Icons',
              'icon' => 'mdi mdi-contacts',
              'menus' => [['label' => 'Font Awesome', 'href' => 'pages/icons/font-awesome.html']],
          ],
          [
              'id' => 'forms',
              'label' => 'Forms',
              'icon' => 'mdi mdi-format-list-bulleted',
              'menus' => [['label' => 'Form Elements', 'href' => 'pages/forms/basic_elements.html']],
          ],
          [
              'id' => 'charts',
              'label' => 'Charts',
              'icon' => 'mdi mdi-chart-bar',
              'menus' => [['label' => 'ChartJs', 'href' => 'pages/charts/chartjs.html']],
          ],
          [
              'id' => 'tables',
              'label' => 'Tables',
              'icon' => 'mdi mdi-table-large',
              'menus' => [['label' => 'Basic table', 'href' => 'pages/tables/basic-table.html']],
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
