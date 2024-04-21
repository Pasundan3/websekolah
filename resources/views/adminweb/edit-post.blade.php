@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Edit Berita Baru</h2>
    </div>
    <div class="card-body">
        <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Update Post</h3>
                    <form action="{{ route('admin.update_post', $news->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" id="body" name="content" rows="3" required>{{ $news->content }}</textarea>
                        </div>
                        <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
                    </form>
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