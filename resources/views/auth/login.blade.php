@extends('layouts.landing')
@section('description', 'SMPN 3 Pasundan adalah ....')
@section('keywords', 'smpn, smp bandung , bandung, smp negeri, smpn, smpn 3 pasundan, smp pasundan, pasunan, negeri pasundan')

@section('content')
<!-- Breadcrumb Area -->
<div class="breadcrumb-wrapper bg-img bg-overlay" style="background-image: url('{{asset('img/bg-img/7.jpg')}}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Log In</h2>
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
            <!-- Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="register-thumbnail">
                    <img src="{{asset('img/core-img/smpn-3-with-title.png')}}" class="img-fluid" alt="logo pasundan">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card register-card bg-gray p-2 p-sm-4">
                    <div class="card-body">
                        <h4>Welcome Back!</h4>
                        <p>Didn't have an account?<a class="ms-2" href="{{url('/register')}}">Daftar Sekarang</a></p>
                        <!-- Register Form -->
                        <div class="register-form my-4 my-lg-5">
                            <x-validation-errors class="mb-4" />

                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group mb-3">
                                    <input class="form-control rounded-0" type="email" placeholder="Email Address" name="email" :value="old('email')" required autofocus autocomplete="username"  >
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label-psswd" for="registerPassword">Show</label>
                                    <input class="form-control rounded-0" id="registerPassword" type="password" placeholder="Password"   name="password"  autocomplete="current-password" required>
                                </div>
                              
                                <x-button class="btn btn-primary w-100">
                                    <i class="bi bi-unlock me-2"></i> {{ __('Log in') }}
                                </x-button>
                            </form>
                            <div class="login-meta-data d-flex align-items-center justify-content-between">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" id="remember_me" type="checkbox" value="" checked  name="remember" >
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <!-- <a class="forgot-password mt-3" href="forget-password.html">Forgot Password?</a> -->
                            </div>
                        </div>
                        <!-- Sign in via others -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-120 d-block"></div>
@endsection