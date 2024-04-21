@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2> Detail Data Calon Siswa</h2>
    </div>
    <div class="card-body">
        @include('flash')
        registration id : {{$data->registration_uid}}
        <br>
        nisn : {{$data->student->nisn}}
        <br>
        nik : {{$data->student->nik}}
        <br>
        nama : {{$data->student->name}}
        <br>
        SMP : {{$data->student->last_education}}
        <br>
        Tanggal lahir : {{$data->student->date_of_birth}}
        <br>
        jenis kelamin : {{$data->student->gender}}
        <br>
        agama : {{$data->student->religion}}
        <br>
        alamat : {{$data->student->address}}
        <br>
        No. hp : {{$data->student->phone_number}}

        <br>
        <br>
        @foreach ($data->student->families as $family)
        Orang tua atau wali
        <br>
        status orang tua : {{$family->parent_status}}
        <br>
        nik : {{$family->nik}}
        <br>
        nama : {{$family->name}}
        <br>
        Pendidikan terakhir : {{$family->last_education}}
        <br>
        Tanggal lahir : {{$family->date_of_birth}}
        <br>
        jenis kelamin : {{$family->gender}}
        <br>
        agama : {{$family->religion}}
        <br>
        alamat : {{$family->address}}
        <br>
        No. hp : {{$family->phone_number}}
        <br>
        pekerjaan : {{$family->working_as}}
        <br>
        income : {{$family->income}}
        @endforeach
    </div>
</div>
@endsection