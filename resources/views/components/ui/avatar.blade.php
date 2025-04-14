@props([
    'name' => 'User',
])

@php
  $src = 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&background=d291bc&color=fff&size=128&bold=true';
@endphp

<img src="{{ $src }}" alt="{{ $name }}">
