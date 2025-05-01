<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      Dashboard
    </h3>

    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span>Overview</span>
          <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>

  <div class="row">
    <div class="col-12 col-lg-6 col-xl-3 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img src="{{ asset('images/ornaments/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">
            Total Exercise Plans
            <i class="mdi mdi-chart-line mdi-24px float-end"></i>
          </h4>
          <h2>{{ $plans }}</h2>
        </div>
      </div>
    </div>

  </div>
</x-dashboard-layout>
