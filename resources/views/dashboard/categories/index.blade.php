<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-folder"></i>
      </span>
      Category Management
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
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Category List</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                  <th>Last Update</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <td>
                      <a href="{{ route('admin.categories.edit', $category) }}"
                        class="text-primary text-decoration-none">
                        <x-ui.avatar name="{{ $category->name }}" />
                        <span class="ms-2">{{ $category->name }}</span>
                      </a>
                    </td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ Str::limit($category->description, 50) }}</td>
                    <td>{{ $category->updated_at->format('d F Y') }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>
