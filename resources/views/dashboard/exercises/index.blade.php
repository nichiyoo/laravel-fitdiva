<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-dumbbell"></i>
      </span>
      Exercise Management
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
          <h4 class="card-title">Exercise List</h4>
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
                @foreach ($exercises as $exercise)
                  <tr>
                    <td>
                      <a href="{{ route('admin.exercises.edit', $exercise) }}"
                        class="text-primary text-decoration-none">
                        <x-ui.avatar name="{{ $exercise->name }}" />
                        <span class="ms-2">{{ $exercise->name }}</span>
                      </a>
                    </td>
                    <td>{{ $exercise->slug }}</td>
                    <td>{{ Str::limit($exercise->description, 50) }}</td>
                    <td>{{ $exercise->updated_at->format('d F Y') }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="mt-5">
            {{ $exercises->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>
