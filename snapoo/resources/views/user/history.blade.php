@extends('layouts.user.app')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h1>Riwayat Reservasi</h1>
        </div>
        <div class="card-body">
            @if($reservations->isEmpty())
                <p class="text-center">Tidak ada riwayat reservasi.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Nama Paket</th>
                                <th>Tanggal Reservasi</th>
                                <th>Status</th>
                                <th>Invoice</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->order_id }}</td>
                                    <td>{{ $reservation->nama_paket }}</td>
                                    <td>{{ $reservation->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $reservation->status }}</td>
                                    <td>
                                        @if($reservation->status == 'Sudah Bayar')
                                            <a href="{{ route('invoice.download', $reservation->id_reservasi) }}" class="btn btn-primary">Invoice</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <style>
        .table-responsive {
            margin-top: 20px;
        }

        .card-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
@endsection

