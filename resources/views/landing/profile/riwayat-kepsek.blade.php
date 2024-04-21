@extends('layouts.landing')
@section('description', 'SMA 3 PASUNDAN adalah ....')
@section('keywords', 'sman, sma bandung , bandung, sma negeri, sman, sman 3 pasundan, sma pasundan, pasunan, negeri
pasundan')

@section('content')
<!-- Breadcrumb Area -->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('img/bg-img/12.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Riwayat Kepala Sekolah SMA 3 Pasundan</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
<!-- FAQ Area-->
<div class="faq--area">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-start">
            <div class="col-12 col-md-3 col-lg-3">
                <div class="faq-content">
                    <h6 class="mb-5">List Kepala Sekolah</h6>
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Juni 2024</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Juni 2015</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Juni 2010</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Juni 2005</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="col-12 col-sm-12">
                            <div class="card team-card wow fadeInDown">
                                <div class="card-body px-4 py-5 py-sm-4 py-md-5 ">
                                    <div class="member-img mb-4 rounded-circle"><img
                                            src="{{asset('img/bg-img/16.jpg')}}" alt=""></div>
                                    <h6 class="text-center">Wisma Lesmana, Drs,. M.M.Pd,. M.Si,. PhD,. S.H,. M.M</h6>
                                    <p class="text-center fz-14">Kepsek angkatan 12</p>
                                    <div class="border"></div>
                                    <div class="container">
                                        <div class="row g-4 justify-content-center  mb-3 mt-1">
                                            <!-- Single Feature Area -->
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4 ">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-tools"></i>
                                                        <div class="fea-text">
                                                            <h6>Jakarta, Indonesia</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-bar-chart"></i>
                                                        <div class="fea-text">
                                                            <h6>086478737884</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-twitter"></i>
                                                        <div class="fea-text">
                                                            <h6>Historia@email.com</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4 g-lg-5 align-items-start justify-content-center">
                                            <div class="col-12 col-md-8 col-lg-8">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Histori</h6>
                                                    <p class="fw-lighter lh-sm fs-6"> Pada tahun blalbalbalbalbalb</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Masa Jabatan</h6>
                                                    <h6 class="mb-0 display-5 fw-bold text-warning">5 TAHUN</h6>
                                                    <small>2015-2020</small>
                                                    <div class="border"></div>
                                                    <h6>Penghargaan Saat Menjabat</h6>
                                                    <ul>
                                                        <li>
                                                            <h6 class="mb-0">Sekolah Terbersih : OLEH BUPATI</h6>
                                                            <span class="text-mited">2013-2017</span>
                                                        </li>
                                                        <li>
                                                            <h6 class="mb-0"> Kepala Sekolah Berprestasi : OLEH DINAS
                                                                PENDIDIKAN</h6>
                                                            <span class="text-mited">2017-2020</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="col-12 col-sm-12">
                            <div class="card team-card fadeInDown">
                                <div class="card-body px-4 py-5 py-sm-4 py-md-5 ">
                                    <div class="member-img mb-4 rounded-circle"><img
                                            src="{{asset('img/bg-img/16.jpg')}}" alt=""></div>
                                    <h6 class="text-center">Among Praja 11</h6>
                                    <p class="text-center fz-14">Kepsek angkatan 11</p>
                                    <div class="border"></div>
                                    <div class="container">
                                        <div class="row g-4 justify-content-center  mb-3 mt-1">
                                            <!-- Single Feature Area -->
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4 ">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-tools"></i>
                                                        <div class="fea-text">
                                                            <h6>Jakarta, Indonesia</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-bar-chart"></i>
                                                        <div class="fea-text">
                                                            <h6>086478737884</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-twitter"></i>
                                                        <div class="fea-text">
                                                            <h6>Historia@email.com</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4 g-lg-5 align-items-start justify-content-center">
                                            <div class="col-12 col-md-8 col-lg-8">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Histori</h6>
                                                    <p class="fw-lighter lh-sm fs-6"> Pada tahun blalbalbalbalbalb</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Masa Jabatan</h6>
                                                    <h6 class="mb-0 display-5 fw-bold text-warning">5 TAHUN</h6>
                                                    <small>2015-2020</small>
                                                    <div class="border"></div>
                                                    <h6>Penghargaan Saat Menjabat</h6>
                                                    <ul>
                                                        <li>
                                                            <h6 class="mb-0">Sekolah Terbersih : OLEH BUPATI</h6>
                                                            <span class="text-mited">2013-2017</span>
                                                        </li>
                                                        <li>
                                                            <h6 class="mb-0"> Kepala Sekolah Berprestasi : OLEH DINAS
                                                                PENDIDIKAN</h6>
                                                            <span class="text-mited">2017-2020</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="col-12 col-sm-12">
                            <div class="card team-card fadeInDown">
                                <div class="card-body px-4 py-5 py-sm-4 py-md-5 ">
                                    <div class="member-img mb-4 rounded-circle"><img
                                            src="{{asset('img/bg-img/16.jpg')}}" alt=""></div>
                                    <h6 class="text-center">Among Praja</h6>
                                    <p class="text-center fz-14">Kepsek angkatan 12</p>
                                    <div class="border"></div>
                                    <div class="container">
                                        <div class="row g-4 justify-content-center  mb-3 mt-1">
                                            <!-- Single Feature Area -->
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4 ">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-tools"></i>
                                                        <div class="fea-text">
                                                            <h6>Jakarta, Indonesia</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-bar-chart"></i>
                                                        <div class="fea-text">
                                                            <h6>086478737884</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-twitter"></i>
                                                        <div class="fea-text">
                                                            <h6>Historia@email.com</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4 g-lg-5 align-items-start justify-content-center">
                                            <div class="col-12 col-md-8 col-lg-8">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Histori</h6>
                                                    <p class="fw-lighter lh-sm fs-6"> Pada tahun blalbalbalbalbalb</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Masa Jabatan</h6>
                                                    <h6 class="mb-0 display-5 fw-bold text-warning">5 TAHUN</h6>
                                                    <small>2015-2020</small>
                                                    <div class="border"></div>
                                                    <h6>Penghargaan Saat Menjabat</h6>
                                                    <ul>
                                                        <li>
                                                            <h6 class="mb-0">Sekolah Terbersih : OLEH BUPATI</h6>
                                                            <span class="text-mited">2013-2017</span>
                                                        </li>
                                                        <li>
                                                            <h6 class="mb-0"> Kepala Sekolah Berprestasi : OLEH DINAS
                                                                PENDIDIKAN</h6>
                                                            <span class="text-mited">2017-2020</span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">
                        <div class="col-12 col-sm-12">
                            <div class="card team-card fadeInDown">
                                <div class="card-body px-4 py-5 py-sm-4 py-md-5 ">
                                    <div class="member-img mb-4 rounded-circle"><img
                                            src="{{asset('img/bg-img/16.jpg')}}" alt=""></div>
                                    <h6 class="text-center">Among Praja</h6>
                                    <p class="text-center fz-14">Kepsek angkatan 12</p>
                                    <div class="border"></div>
                                    <div class="container">
                                        <div class="row g-4 justify-content-center  mb-3 mt-1">
                                            <!-- Single Feature Area -->
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4 ">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-tools"></i>
                                                        <div class="fea-text">
                                                            <h6>Jakarta, Indonesia</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-bar-chart"></i>
                                                        <div class="fea-text">
                                                            <h6>086478737884</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                                                <div class="card feature-card">
                                                    <div class="card-body d-flex align-items-center"><i
                                                            class="bg-primary bi bi-twitter"></i>
                                                        <div class="fea-text">
                                                            <h6>Historia@email.com</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-4 g-lg-5 align-items-start justify-content-center">
                                            <div class="col-12 col-md-8 col-lg-8">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Histori</h6>
                                                    <p class="fw-lighter lh-sm fs-6"> Pada tahun blalbalbalbalbalb</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4">
                                                <div class="faq-content">
                                                    <h6 class="mb-2">Masa Jabatan</h6>
                                                    <h6 class="mb-0 display-5 fw-bold text-warning">5 TAHUN</h6>
                                                    <small>2015-2020</small>
                                                    <div class="border"></div>
                                                    <h6>Penghargaan Saat Menjabat</h6>
                                                    <ul>
                                                        <li>
                                                            <h6 class="mb-0">Sekolah Terbersih : OLEH BUPATI</h6>
                                                            <span class="text-mited">2013-2017</span>
                                                        </li>
                                                        <li>
                                                            <h6 class="mb-0"> Kepala Sekolah Berprestasi : OLEH DINAS
                                                                PENDIDIKAN</h6>
                                                            <span class="text-mited">2017-2020</span>
                                                        </li>

                                                    </ul>
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
        </div>
    </div>
</div>

@endsection