 @extends('layouts.landing')
 @section('description', 'SMAS Pasundan 3 adalah ....')
 @section('keywords', 'sman, sma bandung , bandung, sma negeri, sman, sman 3 pasundan, sma pasundan, pasunan, negeri pasundan')

 @section('content')
 <!-- Error Area-->
 <!-- Welcome Area -->
 <div class="welcome-area bg-gradient">
     <!-- Background Shape -->
     <div class="background-shape">
         <div class="circle1 wow fadeInRightBig" data-wow-duration="4000ms"></div>
         <div class="circle2 wow fadeInRightBig" data-wow-duration="4000ms"></div>
         <div class="circle3 wow fadeInRightBig" data-wow-duration="4000ms"></div>
         <div class="circle4 wow fadeInRightBig" data-wow-duration="4000ms"></div>
     </div>
     <!-- Background Animation -->
     <div class="background-animation">
         <div class="item1"></div>
         <div class="item2"></div>
         <div class="item3"></div>
         <div class="item4"></div>
         <div class="item5"></div>
     </div>
     <div class="container">
         <div class="row  align-items-center">
             <!-- Welcome Thumb -->
             <div class="col-12 col-sm-12 col-md-12 text-center mb-5">
                 <div class="welcome-thumb ms-xl-5">
                    <img src="{{ asset('assets/images/sma_simpenan_3_bdg.webp') }}" alt="sma pasundan 3" class="img-fluid mt-2" style="max-height:450px;">
                </div>
             </div>
             <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-2">
                 <div class="card feature-card">
                     <div class="card-body d-flex align-items-center"><i class="bg-primary bi bi-tools"></i>
                         <div class="fea-text">
                             <span class="counter fs-2">+ 28</span>
                             <h6 class="mb-0">Guru</h6>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Single Feature Area -->
             <div class="col-12 col-sm-10 col-md-6 col-lg-4  mb-2">
                 <div class="card feature-card">
                     <div class="card-body d-flex align-items-center"><i class="bg-success bi bi-brush"></i>
                         <div class="fea-text">
                             <span class="counter fs-2">+ 300</span>
                             <h6 class="mb-0">Tenaga Pendidik</h6>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Single Feature Area -->
             <div class="col-12 col-sm-10 col-md-6 col-lg-4  mb-2">
                 <div class="card feature-card">
                     <div class="card-body d-flex align-items-center"><i class="bg-info bi bi-bar-chart"></i>
                         <div class="fea-text">
                             <span class="counter fs-2">+ 15</span>
                             <h6 class="mb-0">Siswa</h6>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>

 <div class="mb-120 d-block"></div>
 <!-- Service Area-->
 <div class="service-area">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-12 col-sm-10 col-md-9 col-lg-8">
                 <div class="section-heading text-center">
                     <h2>Link Terkait</h2>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center g-4 g-xl-5 pb-20">
             <div class="col-3  col-lg-2  col-md-3 col-sm-6">
                 <div class="card team-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                     <div class="card-body px-4 py-5 py-sm-4 py-md-5 text-center">
                         <div class="member-img mb-4 rounded-circle w-100"><img src="img/bg-img/9.jpg" alt=""></div>
                         <h6>TUT WURI HANDAYANI</h6>
                     </div>
                 </div>
             </div>
             <div class="col-3  col-lg-2  col-md-3 col-sm-6">
                 <div class="card team-card wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                     <div class="card-body px-4 py-5 py-sm-4 py-md-5 text-center">
                         <div class="member-img mb-4 rounded-circle w-100"><img src="img/bg-img/16.jpg" alt=""></div>
                         <h6>JABAR NEWS</h6>
                     </div>
                 </div>
             </div>
             <div class="col-3  col-lg-2  col-md-3 col-sm-6">
                 <div class="card team-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                     <div class="card-body px-4 py-5 py-sm-4 py-md-5 text-center">
                         <div class="member-img mb-4 rounded-circle w-100"><img src="img/bg-img/9.jpg" alt=""></div>
                         <h6>PPDB JABAR</h6>
                     </div>
                 </div>
             </div>
             <div class="col-3  col-lg-2  col-md-3 col-sm-6">
                 <div class="card team-card wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                     <div class="card-body px-4 py-5 py-sm-4 py-md-5 text-center">
                         <div class="member-img mb-4 rounded-circle w-100"><img src="img/bg-img/16.jpg" alt=""></div>
                         <h6>SISDIK JABAR</h6>
                     </div>
                 </div>
             </div>
             <div class="col-3  col-lg-2  col-md-3 col-sm-6">
                 <div class="card team-card wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                     <div class="card-body px-4 py-5 py-sm-4 py-md-5 text-center">
                         <div class="member-img mb-4 rounded-circle w-100"><img src="img/bg-img/16.jpg" alt=""></div>
                         <h6>SIAP JABAR</h6>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="mb-     d-block"></div>
 <!-- section 3 -->
 <!-- Client Feedback Area-->
 <div class="client-feedback-area bg-gray pt-120 pb-120">
     <div class="container">
         <div class="row h-100 align-items-center justify-content-between">
             <!-- Welcome Thumb -->
             <div class="col-12 col-sm-9 col-md-4">
                 <div class="welcome-thumb ms-xl-2 wow">
                    <img src="{{ asset('assets/images/sma_simpenan_3_bdg.webp') }}" alt="sma pasundan 3"></div>
             </div>
             <!-- Welcome Content -->
             <div class="col-12 col-sm-10 col-md-7">
                 <div class="section-heading">
                     <h6>Kepala Sekolah SMAS Pasundan 3 Bandung</h6>
                     <p>Pembelajaran e-learning merupakan bagian dari tuntuan kemajuan teknologi dan komunikasi saat ini. It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                 </div>
             </div>
         </div>
     </div>

 </div>

 <!-- section 4 -->
 <div class="mb-120 d-block"></div>
 <!-- Newsletter Area-->
 <div class="saasbox-newsletter-area">
     <div class="container">
         <div class="card newsletter-card shadow-lg bg-text-gray border-0 bg-img" style="background-image: url('img/core-img/4.png')">
             <div class="card-body">
                 <div class="row align-items-center justify-content-between">
                     <div class="col-12 col-sm-3 col-md-2">
                         <div class="welcome-thumb ms-xl-1 wow"><img src="{{ asset('assets/images/sma_simpenan_3_bdg.webp') }}" alt="sma pasundan 3"></div>
                     </div>
                     <div class="col-12 col-sm-7">
                         <div class="cta-text mb-4 mb-sm-0 wow fadeInUp">
                             <h3 class="mb-0">Penerimaan Peserta Didik Baru 2024.</h3>
                             <p>Portal penerimaan peserta didik baru yang sesuai dengan petunjuk teknis dari dinas pendidikan provinsi Jawa Barat.</p>
                         </div>
                     </div>
                     <div class="col-12 col-sm-2 text-sm-end wow fadeInUp"><a class="btn btn-warning btn-sm" href="{{ route('ppdb') }}">PPDB 2024</a></div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="mb-120 d-block"></div>
 <!-- News Area section 5-->
 <div class="saasbox-news-area">
     <div class="container">
         <div class="row align-items-end">
             <div class="col-12 col-sm-8 col-lg-6">
                 <div class="section-heading">
                     <h6>Latest Blog's</h6>
                     <h2>Berita PASTHREE</h2>
                     <p>It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                 </div>
             </div>
             <div class="col-12 col-sm-4 col-lg-6">
                 <div class="text-sm-end"><a class="btn btn-warning mb-80" href="{{ route('blog') }}">Lihat Selengkapnya</a></div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row justify-content-center g-4 g-md-5 g-lg-4 g-xl-5">
             <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                 <div class="card blog-card border-0">
                     <div class="image-wrap"><a class="d-block" href="{{ route('blog-with-id',1) }}"><img src="img/bg-img/blog1.jpg" alt=""></a></div>
                     <div class="card-body p-4 pb-2">
                         <div class="post-meta d-flex align-items-center justify-content-between mb-3"><span class="fz-14"><i class="me-1 bi bi-calendar"></i>12 Sep 2022</span><span class="fz-14"><i class="me-1 bi bi-clock"></i>2 min read</span></div><a class="post-title d-block mb-3" href="{{ route('blog-with-id',1) }}">Seven ways agency can improve your business.</a>
                         <p>It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-primary btn-minimal" href="{{ route('blog-with-id',1) }}">Continue reading...</a>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                 <div class="card blog-card border-0">
                     <div class="image-wrap"><a class="d-block" href="{{ route('blog-with-id',1) }}"><img src="img/bg-img/blog2.jpg" alt=""></a>
                         <!-- Video-->
                         <div class="video-play-btn"><i class="bi bi-play"></i></div>
                     </div>
                     <div class="card-body p-4 pb-2">
                         <div class="post-meta d-flex align-items-center justify-content-between mb-3"><span class="fz-14"><i class="me-1 bi bi-calendar"></i>12 Sep 2022</span><span class="fz-14"><i class="me-1 bi bi-clock"></i>2 min read</span></div><a class="post-title d-block mb-3" href="{{ route('blog-with-id',1) }}">The reason why everyone love business.</a>
                         <p>It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-primary btn-minimal" href="{{ route('blog-with-id',1) }}">Continue reading...</a>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                 <div class="card blog-card border-0">
                     <div class="image-wrap"><a class="d-block" href="{{ route('blog-with-id',1) }}"><img src="img/bg-img/blog3.jpg" alt=""></a></div>
                     <div class="card-body p-4 pb-2">
                         <div class="post-meta d-flex align-items-center justify-content-between mb-3"><span class="fz-14"><i class="me-1 bi bi-calendar"></i>12 Sep 2022</span><span class="fz-14"><i class="me-1 bi bi-clock"></i>2 min read</span></div><a class="post-title d-block mb-3" href="{{ route('blog-with-id',1) }}">Seven ways agency can improve your business.</a>
                         <p>It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-primary btn-minimal" href="{{ route('blog-with-id',1) }}">Continue reading...</a>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                 <div class="card blog-card border-0">
                     <div class="image-wrap"><a class="d-block" href="{{ route('blog-with-id',1) }}"><img src="img/bg-img/blog3.jpg" alt=""></a></div>
                     <div class="card-body p-4 pb-2">
                         <div class="post-meta d-flex align-items-center justify-content-between mb-3"><span class="fz-14"><i class="me-1 bi bi-calendar"></i>12 Sep 2022</span><span class="fz-14"><i class="me-1 bi bi-clock"></i>2 min read</span></div><a class="post-title d-block mb-3" href="{{ route('blog-with-id',1) }}">Seven ways agency can improve your business.</a>
                         <p>It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-primary btn-minimal" href="{{ route('blog-with-id',1) }}">Continue reading...</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="mb-120 d-block"></div>
 <!-- section 6-->
 <div class="saasbox-portfolio-area pt-120 pb-120 bg-gray">
     <div class="container">
         <div class="row align-items-end justify-content-between">
             <div class="col-12 col-sm-8 col-lg-7 col-xxl-6">
                 <div class="section-heading mb-0">
                     <h6>Kegiatan Kami </h6>
                     <h2>Informasi dan kegiatan yang telah kami buat untuk anda nikmati.</h2>
                     <p>It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                 </div>
             </div>
             <div class="col-12 col-sm-4 col-lg-5">
                 <div class="text-sm-end mt-5 mt-sm-0"><a class="btn btn-primary" href="portfolio-creative.html">Lihat Semua Kegiatan</a></div>
             </div>
         </div>
     </div>
     <div class="d-block mb-80"></div>
     <div class="container-fluid">
         <div class="portfolio2-wrapper px-3">
             <div class="portfolio2-slides">
                 <div>
                     <!-- Single Portfolio Area -->
                     <div class="single-portfolio-area"><img src="img/bg-img/p22.jpg" alt="">
                         <!-- Ovarlay Content -->
                         <div class="overlay-content">
                             <div class="portfolio-title">
                                 <h6 class="mb-0">Portfolio Title</h6>
                             </div>
                             <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p22.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <!-- Single Portfolio Area -->
                     <div class="single-portfolio-area"><img src="img/bg-img/p23.jpg" alt="">
                         <!-- Ovarlay Content -->
                         <div class="overlay-content">
                             <div class="portfolio-title">
                                 <h6 class="mb-0">Apps Redesign</h6>
                             </div>
                             <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p23.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <!-- Single Portfolio Area -->
                     <div class="single-portfolio-area"><img src="img/bg-img/p24.jpg" alt="">
                         <!-- Ovarlay Content -->
                         <div class="overlay-content">
                             <div class="portfolio-title">
                                 <h6 class="mb-0">Marketing</h6>
                             </div>
                             <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p24.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <!-- Single Portfolio Area-->
                     <div class="single-portfolio-area"><img src="img/bg-img/p25.jpg" alt="">
                         <!-- Ovarlay Content -->
                         <div class="overlay-content">
                             <div class="portfolio-title">
                                 <h6 class="mb-0">eCommerce Solution</h6>
                             </div>
                             <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p25.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <!-- Single Portfolio Area -->
                     <div class="single-portfolio-area"><img src="img/bg-img/p26.jpg" alt="">
                         <!-- Ovarlay Content -->
                         <div class="overlay-content">
                             <div class="portfolio-title">
                                 <h6 class="mb-0">Bugs Fix Works</h6>
                             </div>
                             <div class="portfolio-links"><a class="portfolio-img-zoom" href="img/bg-img/p26.jpg"><i class="bi bi-arrows-fullscreen"></i></a><a href="portfolio-details-one.html"><i class="bi bi-link-45deg"></i></a></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection