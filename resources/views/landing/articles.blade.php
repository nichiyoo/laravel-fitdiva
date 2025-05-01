<x-landing-layout>

  @isset($category)
    <x-hero :title="$category->name">
      <x-slot name="breadcrumbs">
        <span class="mr-2">
          <a href="{{ route('landing.index') }}">Home</a>
        </span>
        <span class="mr-2">
          <a href="{{ route('landing.articles') }}">Blog</a>
        </span>
      </x-slot>
    </x-hero>
  @else
    <x-hero title="Empower Every Step">
      <x-slot name="breadcrumbs">
        <span class="mr-2">
          <a href="{{ route('landing.index') }}">Home</a>
        </span>
        <span>Blog</span>
      </x-slot>
    </x-hero>
  @endisset

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h3 class="subheading">Insight</h3>
          <h2 class="mb-1">Articles to Move You Forward</h2>
        </div>
      </div>

      <x-article-grid :articles="$articles" />

      {{ $articles->links() }}
  </section>
</x-landing-layout>
