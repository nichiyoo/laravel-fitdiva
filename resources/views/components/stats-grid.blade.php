@php
  $stats = array_to_object([
      [
          'number' => 5000,
          'label' => 'Happy Customers',
      ],
      [
          'number' => 4560,
          'label' => 'Article Readers',
      ],
      [
          'number' => 5,
          'label' => 'Years of Experience',
      ],
      [
          'number' => 900,
          'label' => 'Lesson Conducted',
      ],
  ]);
@endphp

<div class="row">
  @foreach ($stats as $stat)
    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
      <div class="block-18 text-center">
        <div class="text">
          <strong class="number" data-number="{{ $stat->number }}">0</strong>
          <span>{{ $stat->label }}</span>
        </div>
      </div>
    </div>
  @endforeach
</div>
