@extends('layouts.landing')
@section('description', 'halaman 404')
@section('keywords', 'smpn, smp bandung , bandung, smp negeri, smpn, smpn 3 pasundan, smp pasundan, pasunan, negeri pasundan')

@section('content')
<!-- Error Area-->
<!-- Breadcrumb Area -->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('img/bg-img/12.jpg');">
  
</div>
<div class="saasbox-error-area bg-gradient">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12"><img class="img-fluid" src="{{asset('img/illustrator/404-pasundan-nobackgroud.png')}}" alt="halaman 404">
          
                <h6>Oops! Halaman Tidak Ditemukan</h6>
                <p>We couldn't find any results for your search. Try again.</p>
                <a class="btn btn-success mt-4" href="/">Kembali Ke Rumah</a>
        
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
@endsection