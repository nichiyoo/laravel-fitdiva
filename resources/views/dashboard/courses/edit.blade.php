<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      Edit Course
    </h3>
  </div>

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Course</h4>
        <p class="card-description">Update course information</p>
        @include('dashboard.courses.form', [
            'action' => route('admin.courses.update', $course),
            'method' => 'PUT',
            'course' => $course,
        ])
      </div>
    </div>
  </div>
</x-dashboard-layout>
