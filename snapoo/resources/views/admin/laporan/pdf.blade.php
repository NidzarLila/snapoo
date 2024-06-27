<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            text-align: right;
            font-weight: bold;
        }
        .total-value {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Laporan Penjualan</h1>
        <p>Dari: {{ $tanggal_awal }} Sampai: {{ $tanggal_akhir }}</p>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID Reservasi</th>
                <th>Tanggal</th>
                <th>Nama Pelanggan</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $totalPenjualan = 0; @endphp
            @foreach ($laporan as $item)
            <tr>
                <td>{{ $item->id_reservasi }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nama_paket }}</td>
                <td>{{ 'Rp ' . number_format($item->subtotal, 0, ',', '.') }}</td>
                <td>{{ $item->status }}</td>
                @php $totalPenjualan += $item->subtotal; @endphp
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="total">Total Penjualan:</td>
                <td class="total-value">{{ 'Rp ' . number_format($totalPenjualan, 0, ',', '.') }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>
</html>