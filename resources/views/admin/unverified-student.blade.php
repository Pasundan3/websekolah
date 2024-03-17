
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <!-- Add more table headings as needed -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->registration->registration_uid}}</td>
                <td>{{ $item->name }}</td>
                <!-- Add more table cells for other data -->
                <td>
                    <a href="{{ route('admin.student_detail', ['registration_uid' => $item->registration->registration_uid]) }}" class="btn btn-primary">View Details</a>
                    <!-- Adjust the route and button text as needed -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    <form action="{{route('admin_verifikasi_berkas', ['registration_uid' => '5xQWfDzG3l', 'status' => 'accept'])}}" method="post">
        @csrf
        <button type="submit">klik</button>
    </form>
</body>
</html>