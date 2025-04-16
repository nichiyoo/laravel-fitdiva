<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-play-circle"></i>
      </span>
      Course Management
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
          <h4 class="card-title">Course List</h4>
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
                @foreach ($courses as $course)
                  <tr>
                    <td>
                      <a href="{{ route('admin.courses.edit', $course) }}" class="text-primary text-decoration-none">
                        <x-ui.avatar name="{{ $course->name }}" />
                        <span class="ms-2">{{ $course->name }}</span>
                      </a>
                    </td>
                    <td>{{ $course->slug }}</td>
                    <td>{{ Str::limit($course->description, 50) }}</td>
                    <td>{{ $course->updated_at->format('d F Y') }}</td>
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
