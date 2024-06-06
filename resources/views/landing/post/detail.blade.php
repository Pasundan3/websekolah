@extends('layouts.landing')
@section('description', 'SMAS PASUNDAN 3 adalah ....')
@section('keywords','sman, sma bandung , bandung, sma negeri, sman, sma pasundan 3, sma pasundan, pasunan, negeri pasundan')

@section('content')
<style>
    .content-container {
        width: 100%; /* Full width of the page */
        height: auto; /* Adjust height based on content */
        padding: 10px; /* Optional padding for better spacing */
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }
    .content-container img {
        max-width: 100%; /* Ensure images within content do not exceed container width */
        height: auto; /* Maintain image aspect ratio */
    }
</style>
<!-- Breadcrumb Area -->
<!-- Scroll Indicator -->
<div id="scrollIndicator"></div>
<!-- Breadcrumb -->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('{{ $newsItem->gambar_header }}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">{{$newsItem->title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
<!-- saasbox Blog Area-->
<div class="saasbox-blog-area">
    <div class="container">
        <div class="row justify-content-center justify-content-md-between">
            <img src="{{ $newsItem->gambar_header }}" alt="gambar" style="width: 619px; height: 348px; object-fit: cover;">
                <div class="post-date mb-2">{{$newsItem->created_at}}</div>
                <div class="content-container"> <!-- Limit image width -->
                        {!! $newsItem->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
<!-- Cool Facts Area-->
<div class="cta-area cta3 py-5 bg-info">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-sm-8">
                <div class="cta-text mb-4 mb-sm-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                    <h3 class="mb-0">Let's start with the simple way to create a website.</h3>
                </div>
            </div>
            <div class="col-12 col-sm-4 text-sm-end wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><a class="btn btn-warning btn-sm" href="#">Buy Now</a></div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
@endsection