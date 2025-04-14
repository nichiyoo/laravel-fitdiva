@php
  $articles = array_to_object([
      [
          'href' => '#',
          'title' => '7 Rekomendasi Olahraga untuk Menurunkan Berat Badan',
          'date' => now(),
          'image' => asset('images/articles/article-1.jpg'),
          'excerpt' => 'Mari simak penjelasan mengenai beberapa jenis olahraga untuk menurunkan berat badan.',
      ],
      [
          'href' => '#',
          'title' => '7 Rekomendasi Olahraga untuk Menurunkan Berat Badan',
          'date' => now(),
          'image' => asset('images/articles/article-1.jpg'),
          'excerpt' => 'Mari simak penjelasan mengenai beberapa jenis olahraga untuk menurunkan berat badan.',
      ],
      [
          'href' => '#',
          'title' => '7 Rekomendasi Olahraga untuk Menurunkan Berat Badan',
          'date' => now(),
          'image' => asset('images/articles/article-1.jpg'),
          'excerpt' => 'Mari simak penjelasan mengenai beberapa jenis olahraga untuk menurunkan berat badan.',
      ],
      [
          'href' => '#',
          'title' => '7 Rekomendasi Olahraga untuk Menurunkan Berat Badan',
          'date' => now(),
          'image' => asset('images/articles/article-1.jpg'),
          'excerpt' => 'Mari simak penjelasan mengenai beberapa jenis olahraga untuk menurunkan berat badan.',
      ],
      [
          'href' => '#',
          'title' => '7 Rekomendasi Olahraga untuk Menurunkan Berat Badan',
          'date' => now(),
          'image' => asset('images/articles/article-1.jpg'),
          'excerpt' => 'Mari simak penjelasan mengenai beberapa jenis olahraga untuk menurunkan berat badan.',
      ],
      [
          'href' => '#',
          'title' => '7 Rekomendasi Olahraga untuk Menurunkan Berat Badan',
          'date' => now(),
          'image' => asset('images/articles/article-1.jpg'),
          'excerpt' => 'Mari simak penjelasan mengenai beberapa jenis olahraga untuk menurunkan berat badan.',
      ],
  ]);
@endphp

<div class="row d-flex">
  @foreach ($articles as $article)
    <div class="col-md-4 d-flex ftco-animate">
      <div class="blog-entry justify-content-end">
        <a href="{{ $article->href }}" style="background-image: url({{ $article->image }})" class="block-20"></a>
        <div class="text p-4 float-right d-block">
          <div class="d-flex align-items-center pt-2 mb-4">
            <div class="one">
              <span class="day">{{ $article->date->format('d') }}</span>
            </div>
            <div class="two">
              <span class="yr">{{ $article->date->format('Y') }}</span>
              <span class="mos">{{ $article->date->format('F') }}</span>
            </div>
          </div>
          <h3 class="heading mt-2">
            <a href="{{ $article->href }}">{{ $article->title }}</a>
          </h3>
          <p>{{ $article->excerpt }}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>
