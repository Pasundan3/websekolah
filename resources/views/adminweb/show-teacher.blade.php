@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2>Edit Berita </h2>
  </div>
  <div class="card-body">
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $teacher->name }}</h5>
            </div>
            @if (isset($teacher->position))
            <div class="card-body">
              <p class="card-text">{{$teacher->position}}</p>
            </div>
            @endif
            @if (isset($teacher->subject))
            <div class="card-body">
              <p class="card-text">{{$teacher->subject}}</p>
            </div>
            @endif
            @if(isset($teacher->nip))
            <div class="card-body">
              <p class="card-text">{{$teacher->position}}</p>
            </div>
            @endif
            <div class="card-body">
              <img src="{{$teacher->image_url}}" alt="gambar">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('admin.detail_teacher', $teacher->id) }}" class="btn btn-primary btn-sm">show</a>
                </div>
                <div class="col-sm">
                  <a href="{{ route('admin.edit_teacher', $teacher->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </div>
                <div class="col-sm">
                  <form action="{{ route('admin.delete_teacher', $teacher->id) }}" method="post">
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