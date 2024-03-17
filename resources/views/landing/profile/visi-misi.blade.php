@extends('layouts.landing')
@section('description', 'SMPN 3 Pasundan adalah ....')
@section('keywords', 'smpn, smp bandung , bandung, smp negeri, smpn, smpn 3 pasundan, smp pasundan, pasunan, negeri pasundan')

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
                    <h2>Visi dan misi smp 3 simpenan Bandung.</h2>
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
                                        <h6>Visi &amp; SMP 3 Simpenen</h6>
                                        <h2 class="mb-3">We provide best design &amp; dev solution.</h2>
                                        <p>It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                                        <ul class="list-unstyled">
                                            <li><i class="alert-info bi bi-check"></i>Vanilla JavaScript</li>
                                            <li><i class="alert-info bi bi-check"></i>Bootstrap 5</li>
                                            <li><i class="alert-info bi bi-check"></i>Creative Design</li>
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
                                        <h6>Misi &amp; SMP 3 Simpenen</h6>
                                        <h2 class="mb-3">We provide digital marketing solution.</h2>
                                        <p>It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                                        <ul class="list-unstyled">
                                            <li><i class="alert-info bi bi-check"></i>Vanilla JavaScript</li>
                                            <li><i class="alert-info bi bi-check"></i>Bootstrap 5</li>
                                            <li><i class="alert-info bi bi-check"></i>Creative Design</li>
                                        </ul>
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
                                        <h6>Tujuan &amp; SMP 3 Simpenen</h6>
                                        <h2 class="mb-3">We provide creative business solution.</h2>
                                        <p>It's crafted with the latest trend of design &amp; coded with all modern approaches. It's a robust &amp; multi-dimensional usable template.</p>
                                        <ul class="list-unstyled">
                                            <li><i class="alert-info bi bi-check"></i>Vanilla JavaScript</li>
                                            <li><i class="alert-info bi bi-check"></i>Bootstrap 5</li>
                                            <li><i class="alert-info bi bi-check"></i>Creative Design</li>
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
<div class="mb-120 d-block"></div>
@endsection