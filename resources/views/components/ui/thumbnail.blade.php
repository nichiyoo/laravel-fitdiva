@props([
    'src' => null,
    'alt' => 'User',
])

@php
  $props = $attributes->merge([
      'src' => $src,
      'alt' => $alt,
      'style' => 'width: 48px; height: 48px; border-radius: 10px; object-fit: cover;',
  ]);
@endphp

<img {{ $props }} />
