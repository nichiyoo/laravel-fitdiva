<x-dashboard-layout>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-file-document"></i>
      </span>
      Article Management
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
          <h4 class="card-title">Article List</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Slug</th>
                  <th>Category</th>
                  <th>Last Update</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($articles as $article)
                  <tr>
                    <td>
                      <a href="{{ route('admin.articles.edit', $article) }}" class="text-primary text-decoration-none">
                        <x-ui.avatar name="{{ $article->title }}" />
                        <span class="ms-2">{{ $article->title }}</span>
                      </a>
                    </td>
                    <td>{{ $article->slug }}</td>
                    <td>{{ $article->category->name ?? '-' }}</td>
                    <td>{{ $article->updated_at->format('d F Y') }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="mt-5">
            {{ $articles->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>
