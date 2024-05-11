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
                            @foreach ($families as $family)
                                @foreach($family as $x)
                                    <tr>
                                        <td>{{ $x->parent_status }}</td>
                                        <td>{{ $x->nik }}</td>
                                        <td>{{ $x->name }}</td>
                                        <td>{{$x->last_education}}</td>
                                        <td>{{$x->date_of_birth}}</td>
                                        <td>{{$x->gender}}</td>
                                        <td>{{$x->religion}}</td>
                                        <td>{{$x->address}}</td>
                                        <td>{{$x->phone_number}}</td>
                                        <td>{{$x->working_as}}</td>
                                        <td>{{$x->income}}</td>
                                        <!-- Add more family information rows as needed -->
                                    </tr>
                                @endforeach
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
    </div>
</div>
@endsection