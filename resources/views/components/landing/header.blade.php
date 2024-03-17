<!-- Header Area-->
<header class="header-area">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Navbar Brand --><a class="navbar-brand" href="/"><img src="{{asset('img/core-img/smp3-title-white-75.png')}}" alt=""></a>
          <!-- Navbar Toggler -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#saasboxNav" aria-controls="saasboxNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
          <!-- Navbar Nav -->
          <div class="collapse navbar-collapse" id="saasboxNav">
            <ul class="navbar-nav navbar-nav-scroll">
              <li><a href="{{ route('root') }}">Home</a></li>
              <li class="sb-dropdown"><a href="#">Profile</a>
                <ul class="sb-dropdown-menu">
                  <li><a href="{{ route('profile') }}">Profile</a></li>
                  <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                  <li><a href="{{ route('riwayat-kepala-sekolah') }}">Riwayat Kepala Sekolah</a></li>
                  <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                </ul>
              </li>
              <li><a href="{{ route('kurikulum') }}">Kurikulum</a></li>
              <li><a href="{{ route('kesiswaan') }}">Kesiswaan</a></li>
              <li><a href="{{ route('ppdb') }}">PPDB</a></li>
              <li><a href="{{ route('blog') }}">Berita</a></li>
              <li><a href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
            <!-- Login Button -->
            <div class="ms-auto mb-3 mb-lg-0"><a class="btn btn-warning btn-sm" href="#">PPDB 2024</a></div>
          </div>
        </div>
      </nav>
    </header>