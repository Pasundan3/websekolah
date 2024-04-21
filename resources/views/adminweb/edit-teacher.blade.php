<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit new news for admin web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <h3>Update Post</h3>
        <form method="post" action="{{route('admin.update_teacher', $teacher->id)}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$teacher->name}}">
                            </div>
                            <div class="form-group">
                                <p>kosongkan jika guru biasa</p>
                                <label for="">Position</label>
                                <input type="text" name="position" class="form-control" value="{{$teacher->position}}">
                            </div>
                            <div class="form-group">
                                <p>kosongkan jika bukan guru</p>
                                <label for="">Subject</label>
                                <input type="text" name="subject" class="form-control" value="{{$teacher->subject}}">
                            </div>
                            <div class="form-group">
                                <p>kosongkan jika bukan guru</p>
                                <label for="">nip</label>
                                <input type="text" name="nip" class="form-control" value="{{$teacher->nip}}">
                            </div>
                            <div class="mb-3">
                                <p>masukin value gambar dari $teacher->image('url')</p>
                                <label for="formFileLg" class="form-label">Photo</label>
                                <input name="file" class="form-control form-control-lg" id="formFileLg"
                                        type="file">
                            </div>
                            <button class="btn btn-primary btn-sm">Save</button>
                    </form>
        </div>
    </div>
    </div>
</body>
</html>
