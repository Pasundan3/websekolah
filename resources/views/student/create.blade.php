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
                <div class="register-thumbnail"><img src="{{asset('img/illustrator/1.png')}}" alt=""></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card register-card bg-gray p-2 p-sm-4">
                    <div class="card-body">
                        <h4>Tahap awal pendaftaran siswa baru.</h4>
                        <p>Apakah sudah memiliki akun ?<a class="ms-2" href="login.html">Masuk</a></p>
                        <!-- Register Form-->
                        <div class="register-form my-5">
                            <form action="{{route('student.store')}}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <input class="form-control rounded-0" type="text" placeholder="Nama Lengkap" id="name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control rounded-0" type="text" placeholder="NISN" id="nisn" name="nisn" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control rounded-0" type="text" placeholder="NIK" id="nik" name="nik" required>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" checked>
                                        <label class="form-check-label" for="male">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female">
                                        <label class="form-check-label" for="female">
                                            Default checked radio
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1">Agama</label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="religion" required>
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen-protestan">Kristen Protestan</option>
                                        <option value="kristen-katolik">Kristen Katolik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1" >Alamat</label>
                                    <textarea class="form-control " id="address" name="address" rows="4" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control " type="text" id="last_education" name="last_education" placeholder="Pendidikan Terakhir" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input class="form-control " type="text" id="phone_number" name="phone_number" placeholder="Phone Number ( 085709480940 )" required>
                                </div>
                                <button class="btn btn-primary w-100" type="submit">Daftar Sekarang</button>
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