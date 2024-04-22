@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Input Biaya Pembayaran</h2>
    </div>
    <div class="card-body">
        <h6>nama: {{$data->student->name}}</h6>
        <h6>nik: {{$data->student->nik}}</h6>
        <h6>nisn: {{$data->student->nisn}}</h6>

        <form action="{{route('admin.input_biaya_pendidikan', ['registration_uid' => $data->registration_uid])}}" method="post">
            @csrf
            <label for="biaya_pendidikan">Biaya Pendidikan : </label>
            <input type="text" name="biaya_pendidikan" id="biaya_pendidikan">
            <button type="submit">
                Set Biaya Pendidikan
            </button>
        </form>
    </div>
</div>
@endsection