@extends('admin.app')

@section('content')
<h2>Ini tampilan awal student</h2>

<div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <h6 class="m-0 font-weight-bold text-primary">Status Pendaftaran</h6>
    </a>
    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample" >
        <div class="card-body">
            Saat ini kamu sedang dalam proses seleksi oleh panitia.
        </div>
    </div>
</div>
@endsection