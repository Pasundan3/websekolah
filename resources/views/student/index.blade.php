@extends('admin.app')

@section('content')
<h2>Ini tampilan awal student</h2>

<!-- @aldy : Alert ini hilang sudah selesai daftar ya si studenntnya. -->
<div class="alert alert-warning" role="alert">
  Kamu belum melengkapi formulir pendafaran, silahkan klik <a href="{{url('/student/create')}}">Lengkapi Formulir</a> untuk melanjutkan pendaftara.
</div>

<!-- @aldy : Button ini hilang atau ganti ke url show kalau sudah pernah daftar ya si studenntnya. -->
<a  href = "{{url('/student/create')}}" class="btn btn-primary mb-3">Lengkapi Forumulir</a>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Status Pendaftaran</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample" >
        <div class="card-body">
            Saat ini kamu sedang dalam proses seleksi oleh panitia.
        </div>
    </div>
</div>
@endsection