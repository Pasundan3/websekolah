@extends('admin.app')

@section('content')
>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand h1" href={{ route('admin.index_posts') }}>News Admin</a>
    <div class="justify-end ">
      <div class="col ">
        <a class="btn btn-sm btn-success" href={{ route('admin.create_post') }}>Add Post</a>
      </div>
    </div>
  </div>
</nav>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2>Detail Berita </h2>
  </div>
  <div class="card-body">
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $news->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{!! $news->content !!}</p>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('admin.edit_post', $news->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                  <form action="{{ route('admin.delete_post', $news->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection