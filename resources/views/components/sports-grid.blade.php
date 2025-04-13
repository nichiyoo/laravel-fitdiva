@php
  $sports = array_to_object([
      [
          'href' => '#',
          'name' => 'Aerobic',
          'class' => 'sport-1',
          'image' => 'background-image: url(' . asset('images/sports/sport-1.jpg') . ');',
      ],
      [
          'href' => '#',
          'name' => 'Sports For Beginners',
          'class' => 'sport-2',
          'image' => 'background-image: url(' . asset('images/sports/sport-2.jpg') . ');',
      ],
      [
          'href' => '#',
          'name' => 'Sports For Pregnant',
          'class' => 'sport-3',
          'image' => 'background-image: url(' . asset('images/sports/sport-3.jpg') . ');',
      ],
      [
          'href' => '#',
          'name' => 'Sports For Menstruation',
          'class' => 'sport-4',
          'image' => 'background-image: url(' . asset('images/sports/sport-4.jpg') . ');',
      ],
      [
          'href' => '#',
          'name' => 'Weightlifting',
          'class' => 'sport-5',
          'image' => 'background-image: url(' . asset('images/sports/sport-5.jpg') . ');',
      ],
      [
          'href' => '#',
          'name' => 'Pilates',
          'class' => 'sport-6',
          'image' => 'background-image: url(' . asset('images/sports/sport-6.jpg') . ');',
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
