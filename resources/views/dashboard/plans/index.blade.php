<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-book-open-page-variant"></i>
      </span>
      Plan Management
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
          <h4 class="card-title">plan List</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Duration</th>
                  <th>Sets</th>
                  <th>Reps</th>
                  <th>Exercise</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($plans as $plan)
                  <tr>
                    <td>
                      <a href="{{ route('customer.plans.edit', $plan) }}" class="text-primary text-decoration-none">
                        <x-ui.thumbnail src="{{ $plan->image }}" alt="{{ $plan->title }}" />
                        <span class="ms-2">{{ $plan->name }}</span>
                      </a>
                    </td>
                    <td>{{ Str::limit($plan->description, 50) }}</td>
                    <td>{{ $plan->month }} Month</td>
                    <td>{{ $plan->sets }}</td>
                    <td>{{ $plan->reps }}</td>
                    <td>{{ $plan->exercise->name }}</td>
                    <td>
                      <form action="{{ route('customer.plans.destroy', $plan) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm"
                          onclick="return confirm('Are you sure you want to delete this plan?')">
                          <i class="mdi mdi-delete"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="mt-5">
            {{ $plans->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>
