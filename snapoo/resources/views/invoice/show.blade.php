@extends('layouts.user.app')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h1>Invoice</h1>
        </div>
        <div class="card-body">
            <p><strong>Order ID:</strong> {{ $reservation->order_id }}</p>
            <p><strong>Nama Paket:</strong> {{ $reservation->nama_paket }}</p>
            <p><strong>Tanggal Reservasi:</strong> {{ $reservation->created_at->format('d-m-Y') }}</p>
            <p><strong>Status:</strong> {{ $reservation->status }}</p>
            <!-- Tambahkan detail lainnya sesuai kebutuhan -->
        </div>
    </div>
@endsection

