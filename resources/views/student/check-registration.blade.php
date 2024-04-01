<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Registration</title>
</head>
<body>
    @if(isset($data))
    Nama : {{$data->student->name}} <br>
    NIK : {{$data->student->nik}} <br>
    NISN : {{$data->student->nisn}} <br>
        @if ($data->student->verify_status == false)
            <div class="alert alert-danger">
                Berkas ditolak <br>
                Alasan: {{$data->student->verify_information}}
            </div>
        @elseif ($data->student->verify_status == true)
            @if($data->status == 'accept')
                <div class="alert alert-success">
                    Pendaftaran diterima
                </div>
            @elseif($data->status == 'reject')
                <div class="alert alert-danger">
                    Pendaftaran ditolak
                    Alasan: {{$data->status_information}}
                </div>
            @endif
        @endif 
    @endif
    <br>
    <form action="{{route('student.check-registration')}}" method="post">
        @csrf
        <label for="registration_uid">Nomor Registrasi</label>
        <input type="text" name="registration_uid" id="registration_uid">

        <button type="submit">Submit</button>
    </form>
</body>
</html>