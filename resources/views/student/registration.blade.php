@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Form Pendaftaran Calon Siswa</h2>
    </div>
    <div class="card-body">
        <p> Silahkan isi form dibawah ini dengan cermat.</p>
        <div class="mb-4">
            Keterangan : <br />
            <span class="text-danger mb-4">*</span> Wajib Diisi.
        </div>

        @include('flash')

        <form action="{{ route('student.store') }}" method="post" class="needs-validation" novalidate>
            @csrf

            <!-- Student Information -->
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Nama Siswa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">Mohon isi nama siswa.</div>
                </div>
                <div class="col-md-6">
                    <label for="nisn">NISN <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nisn" name="nisn" required>
                    <div class="invalid-feedback">Mohon isi NISN.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                    <div class="invalid-feedback">Mohon isi NIK.</div>
                </div>
                <div class="col-md-6">
                    <label for="date_of_birth">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                    <div class="invalid-feedback">Mohon isi tanggal lahir.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="gender">Jenis Kelamin</label>
                    <div>
                        <input type="radio" id="male" name="gender" value="Laki-laki" required>
                        <label for="male">Laki-laki</label>
                        <input type="radio" id="female" name="gender" value="Perempuan" required>
                        <label for="female">Perempuan</label>
                    </div>
                    <div class="invalid-feedback">Mohon pilih jenis kelamin.</div>
                </div>
                <div class="col-md-6">
                    <label for="religion">Agama</label>
                    <div>
                        <input type="radio" id="islam" name="religion" value="Islam" required>
                        <label for="islam">Islam</label>
                        <input type="radio" id="christian" name="religion" value="Kristen" required>
                        <label for="christian">Kristen</label>
                        <input type="radio" id="buddha" name="religion" value="Buddha" required>
                        <label for="buddha">Buddha</label>
                        <input type="radio" id="hindu" name="religion" value="Hindu" required>
                        <label for="hindu">Hindu</label>
                    </div>
                    <div class="invalid-feedback">Mohon pilih agama.</div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                        <div class="invalid-feedback">Mohon isi alamat.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_education">SMP Terakhir</label>
                        <input type="text" class="form-control" id="last_education" name="last_education" required>
                        <div class="invalid-feedback">Mohon isi informasi pendidikan terakhir.</div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="phone_number">Nomor HP</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                        <div class="invalid-feedback">Mohon isi nomor HP.</div>
                    </div>
                </div>
            </div>
            
            <!-- Parent Information -->
            <h3>Informasi Orang Tua</h3>

            <!-- Mother's Information -->
            <h4>Informasi Ibu</h4>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
            </div>
            <div class="form-group">
                <label for="nik_ibu">NIK Ibu</label>
                <input type="text" class="form-control" id="nik_ibu" name="nik_ibu">
            </div>
            <div class="form-group">
                <label for="date_of_birth_ibu">Tanggal Lahir Ibu</label>
                <input type="date" class="form-control" id="date_of_birth_ibu" name="date_of_birth_ibu">
            </div>
            <div class="form-group">
                <label>Agama Ibu</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ibu" id="islam_ibu" value="islam">
                        <label class="form-check-label" for="islam_ibu">Islam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ibu" id="kristen_ibu" value="kristen">
                        <label class="form-check-label" for="kristen_ibu">Kristen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ibu" id="budha_ibu" value="budha">
                        <label class="form-check-label" for="budha_ibu">Budha</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ibu" id="hindu_ibu" value="hindu">
                        <label class="form-check-label" for="hindu_ibu">Hindu</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address_ibu">Alamat Ibu</label>
                <input type="text" class="form-control" id="address_ibu" name="address_ibu">
            </div>
            <div class="form-group">
                <label for="last_education_ibu">pendidikan terakhir ibu</label>
                <input type="text" class="form-control" id="last_education_ibu" name="last_education_ibu">
            </div>
            <div class="form-group">
                <label for="phone_number_ibu">No.Hp ibu</label>
                <input type="text" class="form-control" id="phone_number_ibu" name="phone_number_ibu">
            </div>
            <div class="form-group">
                <label for="working_as_ibu">Pekerjaan ibu</label>
                <input type="text" class="form-control" id="working_as_ibu" name="working_as_ibu">
            </div>
            <div class="form-group">
                <label for="income_ibu">Penghasilan Ibu</label>
                <input type="text" class="form-control" id="income_ibu" name="income_ibu">
            </div>
            
            <!-- Father's Information -->
            <h4>Informasi Ayah</h4>
            <div class="form-group">
                <label for="nama_ayah">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
            </div>
            <div class="form-group">
                <label for="nik_ayah">NIK Ayah</label>
                <input type="text" class="form-control" id="nik_ayah" name="nik_ayah">
            </div>
            <div class="form-group">
                <label for="date_of_birth_ayah">Tanggal Lahir Ayah</label>
                <input type="date" class="form-control" id="date_of_birth_ayah" name="date_of_birth_ayah">
            </div>
            <div class="form-group">
                <label>Agama Ayah</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ayah" id="islam_ayah" value="islam">
                        <label class="form-check-label" for="islam_ayah">Islam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ayah" id="kristen_ayah" value="kristen">
                        <label class="form-check-label" for="kristen_ayah">Kristen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ayah" id="budha_ayah" value="budha">
                        <label class="form-check-label" for="budha_ayah">Budha</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_ayah" id="hindu_ayah" value="hindu">
                        <label class="form-check-label" for="hindu_ayah">Hindu</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address_ayah">Alamat Ayah</label>
                <input type="text" class="form-control" id="address_ayah" name="address_ayah">
            </div>
            <div class="form-group">
                <label for="last_education_ayah">pendidikan terakhir Ayah</label>
                <input type="text" class="form-control" id="last_education_ayah" name="last_education_ayah">
            </div>
            <div class="form-group">
                <label for="phone_number_ayah">No.Hp Ayah</label>
                <input type="text" class="form-control" id="phone_number_ayah" name="phone_number_ayah">
            </div>
            <div class="form-group">
                <label for="working_as_ayah">Pekerjaan Ayah</label>
                <input type="text" class="form-control" id="working_as_ayah" name="working_as_ayah">
            </div>
            <div class="form-group">
                <label for="income_ayah">Penghasilan Ayah</label>
                <input type="text" class="form-control" id="income_ayah" name="income_ayah">
            </div>

             <!-- Wali's Information -->
             <h4>Informasi Wali</h4>
            <div class="form-group">
                <label for="nama_wali">Nama Wali</label>
                <input type="text" class="form-control" id="nama_wali" name="nama_wali">
            </div>
            <div class="form-group">
                <label for="nik_wali">NIK Wali</label>
                <input type="text" class="form-control" id="nik_wali" name="nik_wali">
            </div>
            <div class="form-group">
                <label for="date_of_birth_wali">Tanggal Lahir Wali</label>
                <input type="date" class="form-control" id="date_of_birth_wali" name="date_of_birth_wali">
            </div>
            <div class="form-group">
                <label>Agama Wali</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_wali" id="islam_wali" value="islam">
                        <label class="form-check-label" for="islam_wali">Islam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_wali" id="kristen_wali" value="kristen">
                        <label class="form-check-label" for="kristen_wali">Kristen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_wali" id="budha_wali" value="budha">
                        <label class="form-check-label" for="budha_wali">Budha</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="religion_wali" id="hindu_wali" value="hindu">
                        <label class="form-check-label" for="hindu_wali">Hindu</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address_wali">Alamat Wali</label>
                <input type="text" class="form-control" id="address_wali" name="address_wali">
            </div>
            <div class="form-group">
                <label for="last_education_wali">pendidikan terakhir Wali</label>
                <input type="text" class="form-control" id="last_education_wali" name="last_education_wali">
            </div>
            <div class="form-group">
                <label for="phone_number_wali">No.Hp Wali</label>
                <input type="text" class="form-control" id="phone_number_wali" name="phone_number_wali">
            </div>
            <div class="form-group">
                <label for="working_as_wali">Pekerjaan Wali</label>
                <input type="text" class="form-control" id="working_as_wali" name="working_as_wali">
            </div>
            <div class="form-group">
                <label for="income_wali">Penghasilan Wali</label>
                <input type="text" class="form-control" id="income_wali" name="income_wali">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</div>


@endsection