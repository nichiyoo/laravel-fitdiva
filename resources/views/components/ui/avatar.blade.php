@props([
    'name' => 'User',
    'image' => null,
])

@php
  $src = 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&background=d291bc&color=fff&size=128&bold=true';
  $props = $attributes->merge([
      'src' => $image ? $image : $src,
      'alt' => $name,
      'class' => 'avatar',
  ]);
@endphp

<img {{ $props }} />

@once
  <style>
    .avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
@endonce
