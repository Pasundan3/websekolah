@extends('admin.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>History Pembayaran</h2>
    </div>
    <div class="card-body">
        @if($data->payment_registration->remaining_amount <= 0)
        <h4>Jumlah yang harus dibayarkan.</h4>
        <h5>Rp. {{$data->payment_registration->remaining_amount}}</h5>
        @else
        <h4>Jumlah yang harus dibayarkan.</h4>
        <h5>Rp. {{$data->payment_registration->remaining_amount}}</h5>
        @endif
    </div>
    <div class="card-body">
        <h4>Jumlah yang sudah dibayarkan.</h4>
        <h5>Rp. {{$data->payment_registration->paid_amount ?? 0}}</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pendaftaran</th>
                    <th>Kegiatan Awal</th>
                    <th>Seragam</th>
                    <th>SPP Bulan</th>
                    <th>Dana Sumbangan Pendidikan</th>
                    <th>Jumlah</th>
                    <!-- Add more table headings as needed -->
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <!-- TODO: Jika empty data maka tampilkan not found -->
                @foreach ($data->payment_histories as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->pendaftaran}}</td>
                    <td>{{$item->kegiatan_awal}}</td>
                    <td>{{$item->seragam}}</td>
                    <td>{{$item->spp}}</td>
                    <td>{{$item->dsp}}</td>
                    <td>{{ $item->amount }}</td>
                    <!-- Add more table cells for other data -->
                    <td>
                        {{$item->created_at}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection