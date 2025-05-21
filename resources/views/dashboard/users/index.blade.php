<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span>
      User Management
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
          <h4 class="card-title">
            {{ $role . ' ' . 'List' }}
          </h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Last Update</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>
                      <a href="{{ route('admin.users.edit', $user) }}" class="text-primary text-decoration-none">
                        <x-ui.avatar name="{{ $user->name }}" image="{{ $user->image }}" />
                        <span class="ms-2">{{ $user->name }}</span>
                      </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td><label class="badge badge-primary">{{ $user->role }}</label></td>
                    <td>{{ $user->updated_at->format('d F Y') }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="mt-5">
            {{ $users->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>
