<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      Edit Exercise
    </h3>
  </div>

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Exercise</h4>
        <p class="card-description">Update exercise information</p>
        @include('dashboard.exercises.form', [
            'action' => route('admin.exercises.update', $exercise),
            'method' => 'PUT',
            'exercise' => $exercise,
        ])
      </div>
    </div>
  </div>
</x-dashboard-layout>
