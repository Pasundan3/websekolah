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
                        <form method="post" action="{{route('admin.create_new_post')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                                <!-- <textarea name="title" id="title"></textarea> -->
                            </div>
                            <div class="form-group">
                                <label for="gambar_header">Image for title</label><br>
                                <input type="file" name="gambar_header" id="gambar_header">
                            </div>
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea name="content" id="content"></textarea>
                            </div>
                            <button class="btn btn-primary btn-sm">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content', {
                filebrowserUploadUrl: "{{route('admin.upload_image', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        </script>

@endsection