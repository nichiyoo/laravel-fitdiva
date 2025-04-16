<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      Edit Category
    </h3>
  </div>

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Category</h4>
        <p class="card-description">Update category information</p>
        @include('dashboard.categories.form', [
            'action' => route('admin.categories.update', $category),
            'method' => 'PUT',
            'category' => $category,
        ])
      </div>
    </div>
  </div>
</x-dashboard-layout>
