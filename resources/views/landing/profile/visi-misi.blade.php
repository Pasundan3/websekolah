@extends('layouts.landing')
@section('description', 'SMA 3 PASUNDAN adalah ....')
@section('keywords','sman, sma bandung , bandung, sma negeri, sman, sma 3 pasundan, sma pasundan, pasunan, negeri pasundan')

@section('content')
<!-- Breadcrumb Area -->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('img/bg-img/12.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Visi & Misi</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-100 d-block"></div>
<div class="saasbox-tab-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-9 col-lg-8">
                <div class="section-heading text-center">
                    <h2>Visi dan Misi SMA 3 Pasundan Bandung.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab--area">
                    <ul class="nav nav-tabs" id="saasboxTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="tab--1" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Visi</a></li>
                        <li class="nav-item"><a class="nav-link" id="tab--2" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Misi</a></li>
                        <li class="nav-item"><a class="nav-link" id="tab--3" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Tujuan</a></li>
                    </ul>
                    <div class="tab-content" id="saasboxTabContent">
                        <!-- Tab Pane-->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-sm-9 col-md-6">
                                    <div class="tab-thumb mt-5 ms-lg-5"><img src="{{ asset('img/illustrator/4.png')}}" alt=""></div>
                                </div>
                                <div class="col-12 col-sm-9 col-md-6">
                                    <div class="tab--text mt-3 mt-lg-5">
                                        <h6>Visi SMA 3 PASUNDAN</h6>
                                        <h6 class="mb-3 mt-2">
                                            "Menghasilkan Lulusan SMA PASUNDAN 3 yang Berprestasi, Inovatif, Serasi, Agamis dan Berwawasan Lingkungan Hidup"
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li><i class="alert-info bi bi-check"></i>Berprestasi</li>
                                            <li><i class="alert-info bi bi-check"></i>Inovatif</li>
                                            <li><i class="alert-info bi bi-check"></i>Serasi</li>
                                            <li><i class="alert-info bi bi-check"></i>Agamis</li>
                                            <li><i class="alert-info bi bi-check"></i>Berwawasan Lingkungan Hidup</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Tab Pane-->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-sm-9 col-md-6">
                                    <div class="tab-thumb mt-5 ms-lg-5"><img src="{{ asset('img/illustrator/bg-1.png')}}" alt=""></div>
                                </div>
                                <div class="col-12 col-sm-9 col-md-6">
                                    <div class="tab--text mt-3 mt-lg-5">
                                        <h6>Misi SMA 3 PASUNDAN</h6>
                                        <h6>
                                            Untuk mencapai VISI tersebut, SMA Pasundan 3 Kota Bandung mengembangkan Permendikbud nomor 61 tahun 2014 dan berdasarkan visi Pendidikan YPDM Pasundan misi sebagai berikut:
                                        </h6>
                                        <ol class="h-6" style="color: #1f0757 !important;">
                                            <li>
                                                Meningkatkan keimanan, ketaqwaan Kepada Tuhan yang Maha Esa dan Akhlaq Mulia.
                                            </li>
                                            <li>
                                                Menumbuhkan jiwa inovatif, aktif, dan peduli terhadap isu-isu yang berkembang
                                                di lingkungan sekitarnya, khususnya dalam pemeliharaan dan pengelolaan
                                                lingkungan hidup.
                                            </li>

                                            <li>
                                                Meningkatkan profesionalisme tenaga pendidik dan tenaga kependidikan
                                            </li>
                                            <li>
                                                Meningkatkan sarana prasarana penunjang pendidikan yang ramah lingkungan
                                            </li>
                                            <li>
                                                Mewujudkan pembelajaran aktif, inovatif, kreatif, efektif, menyenangkan,
                                                kompetitif dan unggul, Mendidik siswa berbudaya lokal untuk memperkuat budaya nasional serta
                                                memiliki daya saing global
                                            </li>
                                            <li>
                                                Menumbuhkan dan mengembangkan pola pikir dan tindakan yang mencerminkan
                                                budaya mutu dan akhlaq mulia dalam kehidupan sehari-hari
                                            </li>
                                            <li>
                                                Meningkatkan pembelajaran berbasis IT
                                            </li>
                                            <li>
                                                Meningkatkan budaya belajar, bekerja, disiplin peduli dan berwawasan
                                                lingkungan
                                            </li>
                                            <li>
                                                Mengembangkan pengelolaan sekolah yang transparan, partisipatif dan akuntabel
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Pane-->
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-sm-9 col-md-6">
                                    <div class="tab-thumb mt-5 ms-lg-5"><img src="{{ asset('img/illustrator/bg-2.png')}}" alt=""></div>
                                </div>
                                <div class="col-12 col-sm-9 col-md-6">
                                    <div class="tab--text mt-3 mt-lg-5">
                                        <h6>Tujuan SMA 3 PASUNDAN</h6>
                                       
                                        <p  style="color: #1f0757 !important;">
                                            "Tujuan sekolah sebagai bagian dari tujuan pendidikan nasional adalah meningkatkan
                                            kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup
                                            mandiri dan mengikuti pendidikan lebih lanjut"
                                        </p>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
@endsection