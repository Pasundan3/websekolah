@extends('admin.app')

@section('content')
<h2> List Siswa Diterima</h2>
<table class="table table-responsive w-100">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NIK</th>
            <th>NISN</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{$item->registration_uid}}</td>
                <td>{{$item->student->name}}</td>
                <td>{{$item->student->nik}}</td>
                <td>{{$item->student->nisn}}</td>
                <td>
                    <a href="{{ route('admin.student_detail', ['registration_uid' => $item->registration->registration_uid])}}" class="btn btn-primary">View Details</a>
                    <form action="{{route('admin.accept_reject_application', ['registration_uid' => $item->registration_uid, 'status' => 'accept'])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-secondary">Terima</button>
                    </form>
                    <form action="{{route('admin.accept_reject_application', ['registration_uid' => $item->registration_uid, 'status' => 'reject'])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Tolak</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection