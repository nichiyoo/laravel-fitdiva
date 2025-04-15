@props(['message'])

@if ($message)
  <span class="text-danger" role="alert">{{ $message }}</span>
@endif
