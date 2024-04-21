@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Form Pendaftaran Calon Siswa</h2>
    </div>
    <div class="card-body">
        <p> Silahkan isi form dibawah ini dengan cermat.</p>
        @include('flash')
        <form action="{{route('student.store')}}" method="post">
            @csrf
            <label for="name">nama siswa</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="nisn">NISN</label>
            <input type="text" name="nisn" id="nisn">
            <br>
            <label for="nik">nik</label>
            <input type="text" name="nik" id="nik">
            <br>
            <label for="date_of_birth">Tanggal Lahir</label>
            <input type="date" name="date_of_birth" id="date_of_birth">
            <br>
            <p>Jenis kelamin</p>
            <label for="laki-laki">Laki-laku</label>
            <input type="radio" name="gender" id="gender" value="laki-laki">
            <label for="perempuan">Perempuan</label>
            <input type="radio" name="gender" id="perempuan" value="perempuan">
            <br>
            <p>Agama</p>
            <label for="islam">islam</label>
            <input type="radio" name="religion" id="islamr" value="islam">
            <label for="kristen">kristen</label>
            <input type="radio" name="religion" id="kristen" value="kristen">
            <label for="budha">budha</label>
            <input type="radio" name="religion" id="budha" value="budha">
            <label for="hindu">Perempuan</label>
            <input type="radio" name="religion" id="hindu" value="hindu">
            <br>
            <label for="address">alamat</label>
            <input type="text" name="address" id="address">
            <br>
            <label for="last_education">SMP Terakhir</label>
            <input type="text" name="last_education" id="last_education">
            <br>
            <label for="phone_number">No.Hp</label>
            <input type="text" name="phone_number" id="phone_number">

            <br>
            <br>
            <!-- Section orang tua -->
            <!-- ibu -->
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" name="nama_ibu" id="nama_ibu">
            <br>
            <label for="nik_ibu">nik_ibu</label>
            <input type="text" name="nik_ibu" id="nik_ibu">
            <br>
            <label for="date_of_birth_ibu">Tanggal Lahir ibu</label>
            <input type="date" name="date_of_birth_ibu" id="date_of_birth_ibu">
            <br>
            <p>Agama ibu</p>
            <label for="islam">islam</label>
            <input type="radio" name="religion_ibu" id="islamr" value="islam">
            <label for="kristen">kristen</label>
            <input type="radio" name="religion_ibu" id="kristen" value="kristen">
            <label for="budha">budha</label>
            <input type="radio" name="religion_ibu" id="budha" value="budha">
            <label for="hindu">Perempuan</label>
            <input type="radio" name="religion_ibu" id="hindu" value="hindu">
            <br>
            <label for="address_ibu">alamat ibu</label>
            <input type="text" name="address_ibu" id="address_ibu">
            <br>
            <label for="last_education_ibu">pendidikan terakhir ibu</label>
            <input type="text" name="last_education_ibu" id="last_education_ibu">
            <br>
            <label for="phone_number_ibu">No.Hp ibu</label>
            <input type="text" name="phone_number_ibu" id="phone_number_ibu">
            <br>
            <label for="working_as_ibu">Pekerjaan ibu</label>
            <input type="text" name="working_as_ibu" id="working_as_ibu">
            <br>
            <label for="income_ibu">Penghasilan Ibu</label>
            <input type="text" name="income_ibu" id="income_ibu">

            <br><br>
            <!-- Section orang tua -->
            <!-- ayah -->
            <label for="nama_ayah">Nama ayah</label>
            <input type="text" name="nama_ayah" id="nama_ayah">
            <br>
            <label for="nik_ayah">nik_ayah</label>
            <input type="text" name="nik_ayah" id="nik_ayah">
            <br>
            <label for="date_of_birth_ayah">Tanggal Lahir ayah</label>
            <input type="date" name="date_of_birth_ayah" id="date_of_birth_ayah">
            <br>
            <p>Agama ayah</p>
            <label for="islam">islam</label>
            <input type="radio" name="religion_ayah" id="islamr" value="islam">
            <label for="kristen">kristen</label>
            <input type="radio" name="religion_ayah" id="kristen" value="kristen">
            <label for="budha">budha</label>
            <input type="radio" name="religion_ayah" id="budha" value="budha">
            <label for="hindu">Perempuan</label>
            <input type="radio" name="religion_ayah" id="hindu" value="hindu">
            <br>
            <label for="address_ayah">alamat ayah</label>
            <input type="text" name="address_ayah" id="address_ayah">
            <br>
            <label for="last_education_ayah">pendidikan terakhir ayah</label>
            <input type="text" name="last_education_ayah" id="last_education_ayah">
            <br>
            <label for="phone_number_ayah">No.Hp ayah</label>
            <input type="text" name="phone_number_ayah" id="phone_number_ayah">
            <br>
            <label for="working_as_ayah">Pekerjaan ayah</label>
            <input type="text" name="working_as_ayah" id="working_as_ayah">
            <br>
            <label for="income_ayah">Penghasilan ayah</label>
            <input type="text" name="income_ayah" id="income_ayah">

            <!-- Section orang tua -->
            <!-- wali -->
            <label for="nama_wali">Nama wali</label>
            <input type="text" name="nama_wali" id="nama_wali">
            <br>
            <label for="nik_wali">nik_wali</label>
            <input type="text" name="nik_wali" id="nik_wali">
            <br>
            <label for="date_of_birth_wali">Tanggal Lahir wali</label>
            <input type="date" name="date_of_birth_wali" id="date_of_birth_wali">
            <br>
            <p>Agama wali</p>
            <label for="islam">islam</label>
            <input type="radio" name="religion_wali" id="islamr" value="islam">
            <label for="kristen">kristen</label>
            <input type="radio" name="religion_wali" id="kristen" value="kristen">
            <label for="budha">budha</label>
            <input type="radio" name="religion_wali" id="budha" value="budha">
            <label for="hindu">Perempuan</label>
            <input type="radio" name="religion_wali" id="hindu" value="hindu">
            <br>
            <label for="address_wali">alamat wali</label>
            <input type="text" name="address_wali" id="address_wali">
            <br>
            <label for="last_education_wali">pendidikan terakhir wali</label>
            <input type="text" name="last_education_wali" id="last_education_wali">
            <br>
            <label for="phone_number_wali">No.Hp wali</label>
            <input type="text" name="phone_number_wali" id="phone_number_wali">
            <br>
            <label for="working_as_wali">Pekerjaan wali</label>
            <input type="text" name="working_as_wali" id="working_as_wali">
            <br>
            <label for="income_wali">Penghasilan wali</label>
            <input type="text" name="income_wali" id="income_wali">


            <button type="submit">Submit</button>
        </form>
    </div>
</div>


@endsection