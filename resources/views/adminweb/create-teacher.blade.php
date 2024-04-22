@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Buat Berita Baru</h2>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-3 mt-4">
                    <div class="card-body">
                         @include('flash')
                        <form method="post" action="{{route('admin.create_new_teacher')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>kosongkan jika guru biasa</p>
                                <label for="">Position</label>
                                <input type="text" name="position" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>kosongkan jika bukan guru</p>
                                <label for="">Subject</label>
                                <input type="text" name="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>kosongkan jika bukan guru</p>
                                <label for="">nip</label>
                                <input type="text" name="nip" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="formFileLg" class="form-label">Photo</label>
                                <input name="file" class="form-control " id="formFileLg" type="file">
                            </div>
                            <button class="btn btn-primary btn-sm">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection