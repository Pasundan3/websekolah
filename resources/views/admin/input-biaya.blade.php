@extends('admin.app')

@section('content')

nama: {{$data->student->name}}
nik: {{$data->student->nik}}
nisn: {{$data->student->nisn}}

<form action="{{route('admin.input_biaya_pendidikan', ['registration_uid' => $data->registration_uid])}}" method="post">
    @csrf
    <label for="biaya_pendidikan">Biaya Pendidikan : </label>
    <input type="text" name="biaya_pendidikan" id="biaya_pendidikan">
    <button type="submit">
        Set Biaya Pendidikan
    </button>
</form>
@endsection