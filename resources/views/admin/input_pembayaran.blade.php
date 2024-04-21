@extends('admin.app')

@section('content')

nama: {{$data->student->name}}
nik: {{$data->student->nik}}
nisn: {{$data->student->nisn}}

<form action="{{route('admin.input_pembayaran', ['registration_uid' => $data->registration_uid])}}" method="post">
    @csrf
    <label for="amount">Biaya Pendidikan : </label>
    <input type="text" name="amount" id="amount">
    <button type="submit">
        tambah pembayaran
    </button>
</form>
@endsection