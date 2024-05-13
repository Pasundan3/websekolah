@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2> Hasil Selesksi Calon Siswa</h2>
    </div>
    <div class="card-body">
        @if(isset($data))
        Nama : {{$data->student->name}} <br>
        NIK : {{$data->student->nik}} <br>
        NISN : {{$data->student->nisn}} <br>
        @if ($data->student->verify_status == false)
        @if (isset($data->student->verify_information))
        <div class="alert alert-danger">
            Berkas ditolak <br>
            Alasan: {{$data->student->verify_information}}
        </div>
        @else
        <div class="alert alert-danger">
            Berkas belum diverifikasi <br>
        </div>
        @endif
        @elseif ($data->student->verify_status == true)
        <div class="alert alert-success">
            Berkas diterima
        </div>
        @if($data->student->registration->status == 'accept')
        <div class="alert alert-success">
            Pendaftaran diterima
        </div>
        @elseif($data->student->registration->status == 'reject')
        <div class="alert alert-danger">
            Pendaftaran ditolak
            Alasan: {{$data->student->registration->status_information}}
        </div>
        @endif
        @endif
        @endif
        <br>
    </div>
</div>
@endsection