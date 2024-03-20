@extends('admin.app')

@section('content')
data siswa
<br>   
nama: {{$data->student->name}}
<br>    
nisn: {{$data->student->nisn}}
<br>   
nik: {{$data->student->nik}}
<br>   
tanggal lahir: {{$data->student->date_of_birth}}
<br>   
gender: {{$data->student->gender}}
<br>   
agama: {{$data->student->religion}}
<br>   
address: {{$data->student->address}}
<br>   
no hp: {{$data->student->phone_number}}
<br>   
smp sebelumnya: {{$data->student->last_education}}

<br><br>
data orang tua <br>
@foreach($data->student->families as $x)
    nama: {{$x->name}}
    <br>   
    nik: {{$x->nik}}
    <br>   
    tanggal lahir: {{$x->date_of_birth}}
    <br>   
    agama: {{$x->religion}}
    <br>   
    gender: {{$x->gender}}
    <br>   
    address: {{$x->address}}
    <br>   
    no hp: {{$x->phone_number}}
    <br>   
    pendidikan terakhir: {{$x->last_education}}
    <br>   
    pekerjaan: {{$x->working_as}}
    <br>   
    penghasilan: {{$x->income}}
    <br>   
    status orang tua: {{$x->parent_status}}
@endforeach
@endsection