@php
  $testimony = array_to_object([
      [
          'name' => 'Ariana, 27 tahun',
          'position' => 'Ibu Muda',
          'text' =>
              'Sebagai ibu baru, saya butuh olahraga ringan yang aman pasca-melahirkan. FitDiva sangat membantu dengan program pasca-kehamilan yang jelas dan mudah diikuti! Saya bisa berolahraga kapan saja di rumah tanpa khawatir berlebihan',
      ],
      [
          'name' => 'Nadia, 22 tahun',
          'position' => 'Mahasiswi',
          'text' =>
              'Aplikasi ini benar-benar membantu saya tetap aktif selama kehamilan! Latihan yang disediakan ringan dan aman, serta ada video yang jelas. Rasanya lebih tenang berolahraga dengan panduan dari FitDiva',
      ],
      [
          'name' => 'Rina, 32 tahun',
          'position' => 'Ibu Hamil',
          'text' =>
              'Kesibukan kerja sering bikin saya nggak sempat ke gym, tapi sejak pakai FitDiva, saya tetap bisa olahraga di rumah dengan latihan yang fleksibel. Ditambah fitur sharing pengalaman, saya jadi makin termotivasi setelah membaca cerita dari pengguna lain!',
      ],
      [
          'name' => 'Sinta, 30 tahun',
          'position' => 'Wanita Karir',
          'text' =>
              'Dulu saya sering malas olahraga karena bingung harus mulai dari mana. FitDiva memberikan panduan langkah demi langkah yang super mudah diikuti! Apalagi ada latihan khusus saat haid yang bikin badan tetap nyaman tanpa merasa terlalu lelah',
      ],
  ]);
@endphp

<div class="row ftco-animate">
  <div class="col-md-12">
    <div class="carousel-testimony owl-carousel">
      @foreach ($testimony as $testimony)
        <div class="item">
          <div class="testimony-wrap p-4 pb-5">
            <div class="text">
              <div class="line pl-5">
                <p class="mb-4 pb-1">
                  {{ $testimony->text }}
                </p>
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="d-flex align-items-center">
                <div class="user-img"></div>
                <div class="ml-4">
                  <p class="name">{{ $testimony->name }}</p>
                  <span class="position">{{ $testimony->position }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
