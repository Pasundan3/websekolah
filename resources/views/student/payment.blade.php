@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Pembayaran</h2>
    </div>
    <div class="card-body">
        
        <form action="{{route('student.pay', $data->registration_uid)}}" method="post">
            @csrf
            <label for="amount">Jumlah</label>
            <input type="text" name="amount" id="amount">

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection