@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2> Detail Data Calon Siswa</h2>
    </div>
    <div class="card-body">
        @include('flash')

        <div class="container mt-3">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#studentInfo">Informasi Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#familyInfo">Informasi Orang Tua atau Wali</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-3">
                <!-- Student Information Tab -->
                <div id="studentInfo" class="tab-pane active">
                    <table class="table">
                        <tbody>
                            <!-- <tr>
                                <th>Registration ID</th>
                                <td>{{ $student->registration_uid }}</td>
                            </tr> -->
                            <tr>
                                <th>NISN</th>
                                <td>{{$student->nisn }}</td>
                            </tr>
                            <tr>
                                <th>NIK</th>
                                <td>{{$student->nik }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{$student->name}}</td>
                            </tr>
                            <tr>
                                <th>Riwayat SMP</th>
                                <td>{{$student->last_education}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{$student->date_of_birth}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{$student->gender}}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td> {{$student->religion}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{$student->address}}</td>
                            </tr>
                            <tr>
                                <th>No. Telp</th>
                                <td>{{$student->phone_number}}</td>
                            </tr>
                            <!-- Add more student information rows as needed -->
                        </tbody>
                    </table>
                </div>

                <!-- Family Information Tab -->
                <div id="familyInfo" class="tab-pane">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Status Orang Tua</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Pendidikan terakhir </th>
                                <th>Tanggal lahir </th>
                                <th>Jenis kelamin </th>
                                <th>Agama </th>
                                <th>Alamat </th>
                                <th>No. hp </th>
                                <th>Pekerjaan </th>
                                <th>Penghasilan </th>
                                <!-- Add more column headers as needed -->
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($families))
                            @if(count($families) > 0)
                            @foreach ($families as $family)
                                    <tr>
                                        <td>{{ $family->parent_status }}</td>
                                        <td>{{ $family->nik }}</td>
                                        <td>{{ $family->name }}</td>
                                        <td>{{$family->last_education}}</td>
                                        <td>{{$family->date_of_birth}}</td>
                                        <td>{{$family->gender}}</td>
                                        <td>{{$family->religion}}</td>
                                        <td>{{$family->address}}</td>
                                        <td>{{$family->phone_number}}</td>
                                        <td>{{$family->working_as}}</td>
                                        <td>{{$family->income}}</td>
                                        <!-- Add more family information rows as needed -->
                                    </tr>
                            @endforeach
                            @else
                                <tr>No Data</tr>
                            @endif
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
    </div>
</div>
@endsection