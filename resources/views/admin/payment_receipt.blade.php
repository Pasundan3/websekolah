<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - {{ $registration_id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Bukti Pembayaran</h1>
    <table>
        <tr>
            <th>ID Registrasi</th>
            <td>{{ $registration_id }}</td>
        </tr>
        <tr>
            <th>Jumlah Dibayar</th>
            <td>{{ $amount_paid }}</td>
        </tr>
        @if (isset($image_url))
        <tr>
            <th>URL Gambar Bukti</th>
            <td><a href="{{ $image_url }}">{{ $image_url }}</a></td>
        </tr>
        @endif
    </table>
    <p>Tanggal: {{ Carbon::parse($date)->format('d F Y') }}</p>
</body>
</html>
