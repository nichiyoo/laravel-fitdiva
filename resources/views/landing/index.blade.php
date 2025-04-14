<x-landing-layout>
  @php
    $titles = ['Stay Fit, Stay Fierce.', 'Stay Fit, Stay Fierce.', 'Stay Fit, Stay Fierce.'];
    $reasons = [
        'Sports boosts brain power',
        'Sports helps you to breathe better',
        'Sports improves your strength',
        'Sports helps you to focus',
        'Sports helps give meaning to your day',
    ];
  @endphp

  <section class="hero-wrap js-fullheight" style="background-image: url({{ asset('images/main.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
        <div class="col-md-8 ftco-animate">

          <h1 id="title" class="typewrite mb-3" data-period="4000" data-type='{{ json_encode($titles) }}'>
            <span class="wrap"></span>
          </h1>
          <h2 class="mb-5">Do Sports today for a better tomorrow</h2>
          @auth
            <a href="{{ route('home') }}" class="btn btn-primary p-3 px-4">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="btn btn-primary p-3 px-4">Login</a>
          @endauth
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-intro" style="background-image: url({{ asset('images/reasons.jpg') }});">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">
          <div class="heading-section ftco-animate">
            <h2 class="mb-4">Why You Should Start Exercise</h2>
          </div>
          <p class="ftco-animate">
            Exercise is more than fitness — it's about feeling strong, confident, and in control of your body. With
            FitDiva&apos;s video tutorials, flexible plans, and supportive classes, it&apos;s never been easier to get
            started.
          </p>
          <p class="ftco-animate"></p>
          <ul class="mt-5 do-list">
            @foreach ($reasons as $reason)
              <li class="ftco-animate">
                <span class="ion-ios-checkmark-circle mr-3"></span>
                <span>{{ $reason }}</span>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-12 heading-section ftco-animate text-center">
          <h3 class="subheading">Classes</h3>
          <h2 class="mb-1">Choose Your Level &amp; Focus</h2>
        </div>
      </div>
      <x-sports-grid />
    </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h3 class="subheading">Testimony</h3>
          <h2 class="mb-1">Successful Stories</h2>
        </div>
      </div>
      <x-testimony-grid />
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h3 class="subheading">Insight</h3>
          <h2 class="mb-1">Articles to Move You Forward</h2>
        </div>
      </div>
      <x-article-grid />
  </section>
</x-landing-layout>
