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
        
        <form action="{{route('admin.pay', ['registration_uid' => $data->registration_uid])}}" method="post">
            @csrf
            <label for="amount">Jumlah</label>
            <input type="text" name="amount" id="amount">

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection