<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      Create User
    </h3>
  </div>

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create User</h4>
        <p class="card-description">Make sure to fill all the fields</p>
        @include('dashboard.users.form', [
            'action' => route('admin.users.store'),
            'method' => 'POST',
            'user' => new \App\Models\User(),
        ])
      </div>
    </div>
  </div>
</x-dashboard-layout>
