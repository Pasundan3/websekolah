
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('admin_verifikasi_berkas', ['registration_uid' => '5xQWfDzG3l', 'status' => 'accept'])}}" method="post">
        @csrf
        <button type="submit">klik</button>
    </form>
</body>
</html>