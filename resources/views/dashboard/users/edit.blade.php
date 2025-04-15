<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      Edit User
    </h3>
  </div>

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit User</h4>
        <p class="card-description">Update user information</p>
        @include('dashboard.users.form', [
            'action' => route('admin.users.update', $user),
            'method' => 'PUT',
            'user' => $user,
        ])
      </div>
    </div>
  </div>
</x-dashboard-layout>
