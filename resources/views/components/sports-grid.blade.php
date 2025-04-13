@php
  $sports = array_to_object([
      [
          'href' => '#',
          'class' => 'sport-1',
          'name' => 'Aerobic',
      ],
      [
          'href' => '#',
          'class' => 'sport-2',
          'name' => 'Sports For Beginners',
      ],
      [
          'href' => '#',
          'class' => 'sport-3',
          'name' => 'Sports For Pregnant',
      ],
      [
          'href' => '#',
          'class' => 'sport-4',
          'name' => 'Sports For Menstruation',
      ],
      [
          'href' => '#',
          'class' => 'sport-5',
          'name' => 'Weightlifting',
      ],
      [
          'href' => '#',
          'class' => 'sport-6',
          'name' => 'Pilates',
      ],
  ]);
@endphp

@push('styles')
  <style>
    .sport-1 {
      background-image: url({{ asset('images/sports/sport-1.jpg') }});
    }

    .sport-2 {
      background-image: url({{ asset('images/sports/sport-2.jpg') }});
    }

    .sport-3 {
      background-image: url({{ asset('images/sports/sport-3.jpg') }});
    }

    .sport-4 {
      background-image: url({{ asset('images/sports/sport-4.jpg') }});
    }

    .sport-5 {
      background-image: url({{ asset('images/sports/sport-5.jpg') }});
    }

    .sport-6 {
      background-image: url({{ asset('images/sports/sport-6.jpg') }});
    }
  </style>
@endpush

<div class="row no-gutters">
  @foreach ($sports as $sport)
    <div class="col-md-6 col-lg-4">
      <div class="package-program ftco-animate">
        <a href="{{ $sport->href }}" class="img d-flex justify-content-center align-items-center {{ $sport->class }}">
          <div class="text p-5 text-center">
            <h3>{{ $sport->name }}</h3>
          </div>
        </a>
      </div>
    </div>
  @endforeach
</div>
