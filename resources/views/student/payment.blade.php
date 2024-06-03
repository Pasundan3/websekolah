@extends('admin.app')

@section('content')
@if(Session::has('payment_history_id'))
    <?php $paymentHistoryId = Session::get('payment_history_id'); ?>
    <?php Session::forget('payment_history_id'); ?>

    @if($paymentHistoryId)
        <?php $paymentHistory = \App\Models\PaymentHistory::find($paymentHistoryId); ?>
        @if($paymentHistory)
            <a id="downloadLink" href="{{ asset($paymentHistory->receipt) }}" style="display: none;" download></a>
            <script>
                window.onload = function() {
                    setTimeout(function() {
                        document.getElementById('downloadLink').click();
                        window.location.href = "{{ route('admin.list_accept_students') }}"; // Redirect to another page after download
                    }, 500); // Adjust the delay as needed
                }
            </script>
        @endif
    @endif
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2>Pembayaran</h2>
    </div>
    <div class="card-body">
        @if($data->payment_registration->remaining_amount > 0)
        <form action="{{route('admin.pay', ['registration_uid' => $data->registration_uid])}}" method="post">
            @csrf
            <label for="pendaftaran">Pendaftaran</label>
            <input type="text" name="pendaftaran" id="pendaftaran">
            <br>
            <label for="kegiatan_awal">Kegiatan Awal PPDB</label>
            <input type="text" name="kegiatan_awal" id="kegiatan_awal">
            <br>
            <label for="seragam">Seragam</label>
            <input type="text" name="seragam" id="seragam">
            <br>
            <label for="spp">SPP Bulan</label>
            <input type="text" name="spp" id="spp">
            <br>
            <label for="dsp">Dana Sumbangan Pendidikan (DSP)</label>
            <input type="text" name="dsp" id="dsp">
            <br>
            <button type="submit">Submit</button>
        </form>
        @else
            <h2>Siswa tersebut sudah lunas</h2>
        @endif
    </div>
</div>
@endsection