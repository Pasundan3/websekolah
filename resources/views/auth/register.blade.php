@extends('layouts.landing')
@section('description', 'SMAN 3 Pasundan adalah ....')
@section('keywords', 'sman, sma bandung , bandung, sma negeri, sman, sman 3 pasundan, sma pasundan, pasunan, negeri pasundan')

@section('content')
<!-- Breadcrumb Area -->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('{{asset('img/bg-img/7.jpg')}}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">PPDB 2024 Formulir</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-120 d-block"></div>
<!-- Register -->
<div class="register-area">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-start justify-content-between">
            <div class="col-12 col-lg-6">
                <div class="register-thumbnail">
                  <img src="{{asset('img/core-img/sma3-title-black-normal.webp')}}" class="img-fluid" alt="logo sma 3 pasundan">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card register-card bg-gray p-2 p-sm-4">
                    <div class="card-body">
                        <h4>Tahap awal pendaftaran siswa baru.</h4>
                        <p>Apakah sudah memiliki akun ?<a class="ms-2" href="{{route('login')}}">Masuk</a></p>
                        <!-- Register Form-->
                        <div class="register-form my-5">
                            <x-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div>
                                    <x-label for="name" value="{{ __('Name') }}" />
                                    <x-input id="name" class="form-control rounded-0" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <x-input id="email" class="form-control rounded-0" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="password" value="{{ __('Password') }}" />
                                    <x-input id="password" class="form-control rounded-0" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="mt-4">
                                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-input id="password_confirmation" class="form-control rounded-0" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button class="btn btn-primary w-100">
                                        {{ __('Daftar Sekarang') }}
                                    </x-button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-120 d-block"></div>
@endsection
