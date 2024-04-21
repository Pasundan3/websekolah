@extends('layouts.landing')
@section('description', 'SMA 3 PASUNDAN adalah ....')
@section('keywords','sman, sma bandung , bandung, sma negeri, sman, sma 3 pasundan, sma pasundan, pasunan, negeri pasundan')

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
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-between">
            <!-- Welcome Content -->
            <div class="col-12 col-sm-10 col-md-6">
                <div class="welcome-content">
                    <ul class="mb-0 ps-1 d-flex align-items-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="200ms">
                        <li>Idea</li>
                        <li>Development</li>
                        <li>Branding</li>
                    </ul>
                    <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">Halaman <br> Profile sekolah.</h2>
                    <p class="mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">It's crafted with the latest trend of design &amp; coded with all modern approaches.</p>
                    <div class="hero-btn-group wow fadeInUp" data-wow-duration="1s" data-wow-delay="500ms"><a class="btn btn-warning mt-3 me-3" href="#">Buy Now</a><a class="btn btn-light mt-3" href="#">See More</a></div>
                </div>
            </div>
            <!-- Welcome Thumb -->
            <div class="col-12 col-sm-9 col-md-6">
                <div class="welcome-thumb ms-xl-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><img src="img/illustrator/hero-3.png" alt=""></div>
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
                    <h2>Tentang SMA 3 Pasundan Bandung.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab--area">
                    <ul class="nav nav-tabs" id="saasboxTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="tab--1" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" id="tab--3" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Sejarah</a></li>
                    </ul>
                    <div class="tab-content" id="saasboxTabContent">
                        <!-- Tab Pane-->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="tab--text mt-3 mt-lg-5">
                                        <h6>Tentang SMA 3 PASUNDAN</h6>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Nama Sekolah :</th>
                                                    <td>SMA PASUNDAN 3 BANDUNG</td>
                                                </tr>
                                                <tr>
                                                    <th>NPSN :</th>
                                                    <td>20219765</td>
                                                </tr>
                                                <tr>
                                                    <th>Jenjang Pendidikan :</th>
                                                    <td>SMA</td>
                                                </tr>
                                                <tr>
                                                    <th>Tahun Didirikan :</th>
                                                    <td>06 April 1981</td>
                                                </tr>
                                                <tr>
                                                    <th>Status Sekolah :</th>
                                                    <td>Swasta</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Sekolah :</th>
                                                    <td>Jl. Kebon Jati No.31 Bandung</td>
                                                </tr>
                                                <tr>
                                                    <th>Kode POS :</th>
                                                    <td>40181</td>
                                                </tr>
                                                <tr>
                                                    <th>Kelurahan :</th>
                                                    <td>Kebon Jeruk</td>
                                                </tr>
                                                <tr>
                                                    <th>Kecamatan :</th>
                                                    <td>Andir</td>
                                                </tr>
                                                <tr>
                                                    <th>Kota :</th>
                                                    <td>BANDUNG</td>
                                                </tr>
                                                <tr>
                                                    <th>Provinsi :</th>
                                                    <td>Jawa Barat</td>
                                                </tr>
                                                <tr>
                                                    <th>Negara :</th>
                                                    <td>Indonesia</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                        <h6>Sejarah SMA 3 PASUNDAN</h6>

                                        <p style="color: #1f0757 !important;">
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