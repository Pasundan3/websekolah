@extends('admin.app')

@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h2> List Data Guru</h2>
  </div>
  <div class="card-body">
  <a class="btn btn-sm btn-success mb-3" href={{ route('admin.create_teacher') }}>Tambah Data Guru</a>
    <div class="row">
      @foreach ($teacher as $t)
      <div class="col-sm">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">{{ $t->name }}</h5>
          </div>
          @if (isset($t->position))
          <div class="card-body">
            <p class="card-text">{{$t->position}}</p>
          </div>
          @endif
          @if (isset($t->subject))
          <div class="card-body">
            <p class="card-text">{{$t->subject}}</p>
          </div>
          @endif
          @if(isset($t->nip))
          <div class="card-body">
            <p class="card-text">{{$t->position}}</p>
          </div>
          @endif
          <div class="card-body">
            <img src="{{$t->image_url}}" alt="gambar">
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm">
                <a href="{{ route('admin.detail_teacher', $t->id) }}" class="btn btn-primary btn-sm">show</a>
              </div>
              <div class="col-sm">
                <a href="{{ route('admin.edit_teacher', $t->id) }}" class="btn btn-primary btn-sm">Edit</a>
              </div>
              <div class="col-sm">
                <form action="{{ route('admin.delete_teacher', $t->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</div>
@endsection