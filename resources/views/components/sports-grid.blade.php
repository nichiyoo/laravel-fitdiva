@php
  $sports = array_to_object([
      [
          'href' => '#',
          'name' => 'Aerobic',
          'image' => asset('images/sports/sport-1.jpg'),
      ],
      [
          'href' => '#',
          'name' => 'Sports For Beginners',
          'image' => asset('images/sports/sport-2.jpg'),
      ],
      [
          'href' => '#',
          'name' => 'Sports For Pregnant',
          'image' => asset('images/sports/sport-3.jpg'),
      ],
      [
          'href' => '#',
          'name' => 'Sports For Menstruation',
          'image' => asset('images/sports/sport-4.jpg'),
      ],
      [
          'href' => '#',
          'name' => 'Weightlifting',
          'image' => asset('images/sports/sport-5.jpg'),
      ],
      [
          'href' => '#',
          'name' => 'Pilates',
          'image' => asset('images/sports/sport-6.jpg'),
      ],
  ]);
@endphp

<div class="row no-gutters">
  @foreach ($sports as $sport)
    <div class="col-md-6 col-lg-4">
      <a href="{{ $sport->href }}" class="package-program ftco-animate">
        <div style="background-image: url({{ $sport->image }})"
          class="img d-flex justify-content-center align-items-center">
          <div class="text p-5 text-center">
            <h3>{{ $sport->name }}</h3>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
