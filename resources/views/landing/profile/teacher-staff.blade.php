@extends('layouts.landing')
@section('description', 'SMA PASUNDAN 3 adalah ....')
@section('keywords','sman, sma bandung , bandung, sma negeri, sman, sma pasundan 3, sma pasundan, pasunan, negeri pasundan')

@section('content')
<!-- Breadcrumb Area-->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('{{asset('img/bg-img/7.jpg')}}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Guru & Staff</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
<div class="container">
    <div class="row g-4 g-md-5 justify-content-center">
        @foreach($teachers as $x)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card team-card shadow wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                    <div class="card-body p-4 py-md-5">
                        <div class="member-img mb-4 rounded-circle"><img src="{{$x->image_url}}" alt=""></div>
                        <h6 class="text-center">{{$x->name}}</h6>
                        <p class="fz-14">{{$x->position}}</p>
                        <p class="fz-16">{{$x->subject}}</p>
                        <div class="border"></div>
                        <ul class="list-unstyled mt-2">
                            <li>
                                <h6>NIP: {{$x->nip}}</h6>
                            </li>
                            
                        </ul>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection