@extends('admin.app')

@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data verify Student</h1>
<a  href = "{{url('admin/register-student')}}" class="btn btn-primary mb-3">Create New Registration</a>
<a href = "{{url('admin/export-students')}}" class="btn btn-secondary mb-3">Export Data Student</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Data Registered</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable display" id="example" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Registration ID</th>
                                    <th>Name</th>
                                    <!-- Add more table headings as needed -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    $(function () {
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('admin.verified_students')}}",
            columns: [
                {data:'registration.registration_uid', name:'registration_uid'},
                {data:'name', name:'name'},
                {data:'action', name:'action', orderable: false, searchable: false},
            ]
        })
    })
</script>

@endsection