@props([
    'id' => 'sidebar',
    'label' => 'Sidebar',
    'icon' => 'mdi mdi-menu',
])

<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#{{ $id }}" aria-expanded="false"
    aria-controls="{{ $id }}">
    <span class="menu-title">{{ $label }}</span>
    <i class="{{ $icon }} menu-icon"></i>
  </a>
  <div class="collapse" id="{{ $id }}">
    <ul class="nav flex-column sub-menu">
      {{ $slot }}
    </ul>
  </div>
</li>
