<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5 ftco-animate">
        <div class="ftco-footer-widget mb-4">
          <h1 class="logo">{{ config('company.name') }}</h1>
        </div>
      </div>
      <div class="col-lg col-md-6 mb-5 mb-md-5 ftco-animate">
        <div class="ftco-footer-widget mb-4">
          <h2 class="location">{{ config('company.address') }}</h2>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>
          Copyright &copy;
          {{ date('Y') }}
          All rights reserved |
          <i class="icon-heart" aria-hidden="true"></i>
          by
          <a href="{{ config('app.url') }}">
            {{ config('company.name') }}
          </a>
        </p>
      </div>
    </div>
  </div>
</footer>
