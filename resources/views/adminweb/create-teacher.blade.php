<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new news for admin web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
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
                                <input name="file" class="form-control form-control-lg" id="formFileLg"
                                        type="file">
                            </div>
                            <button class="btn btn-primary btn-sm">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
